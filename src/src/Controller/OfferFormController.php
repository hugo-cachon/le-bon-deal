<?php

namespace App\Controller;

use App\Form\EditOfferType;
use App\Form\EditUserType;
use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Monolog\DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\OfferFormType;
use App\Entity\Offer;

class OfferFormController extends AbstractController
{
    private $OfferRepository;

    public function __construct(OfferRepository $offerRepository)
    {
        $this->OfferRepository = $offerRepository;
    }

    #[Route('/offer/form', name: 'app_offer_form')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {

        $loggedUser = $this->getUser();



        $form = $this->createForm(OfferFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            //dd($form->getData());
            $data = $form->getData();
            $data->setUser($loggedUser);
            $data->setCreatedAt(new \DateTime());
            $data->setUpdateAt(new \DateTime());
            $em->persist($data);
            $em->flush();
            return $this->redirectToRoute('app_user_offers');
        }


        return $this->render('offer_form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/offer/{id}/edit', name: 'app_edit_offer')]
    public function edit(Request $request, EntityManagerInterface $em, $id): Response
    {

        $offer = $this->OfferRepository->find($id);


        $form = $this->createForm(EditOfferType::class, $offer);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();
            $data->setUpdateAt(new \DateTimeImmutable());
            $em->persist($data);
            $em->flush();
            return $this->redirectToRoute('app_user_offers');
        }


        return $this->render('offer_form/editoffer.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/offer/{id}/delete', name: 'app_delete_offer', methods: ['GET','DELETE'])]
    public function delete(EntityManagerInterface $em, $id): Response
    {

        $offer = $this->OfferRepository->find($id);


        if($offer){

            $em->remove($offer);
            $em->flush();

        }


        return $this->redirectToRoute('app_user_offers');
    }
}
