<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Users;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SingleProductController extends AbstractController
{
    #[Route('/productpage/{idOffer}', name: 'app_singleProduct')]
    public function index(Request $request, OfferRepository $offerRepository, int $idOffer, CommentRepository $commentRepository)
    {
        $offer = $offerRepository->findUser($idOffer);

        $user = $this->getUser();

        if (!$user instanceof Users) {
            throw $this->createAccessDeniedException();
        }

        $comment = $commentRepository->createForOffer($offer, $user);
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $comment->setCreatedAt(new \DateTime());
            $commentRepository->save($comment, true);
            //to restore page in get method
            return $this->redirectToRoute('app_singleProduct', ['idOffer'=>$idOffer]);
        }

        $comments = $commentRepository->findBy(['offer' => $offer], ["created_at"=>'DESC']);


        return $this->renderForm('/product/singleProduct.html.twig',
            ['offer' => $offer, 'form' => $form, 'comments' => $comments]);
    }


}