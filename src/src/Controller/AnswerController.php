<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Form\AnswerType;
use App\Repository\AnswerRepository;
use App\Repository\CommentRepository;
use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnswerController extends AbstractController
{
    #[Route('/answer/{idComment}/{idOffer}', name: 'app_answer')]
    public function index(int $idComment, int $idOffer, CommentRepository $commentRepository, OfferRepository $offerRepository, AnswerRepository $answerRepository ,Request $request)
    {
        $comment = $commentRepository->find($idComment);
        $offer = $offerRepository->find($idOffer);

        $answer = new Answer();
        $answer->setComment($comment);
        $form = $this->createForm(AnswerType::class, $answer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $answerRepository->save($answer, true);
            return $this->redirectToRoute('app_singleProduct', ['idOffer'=>$idOffer]);
        }

        return $this->renderForm('user/answerUser.html.twig', ['comment'=>$comment, 'offer'=>$offer, 'form'=>$form]);
    }
}