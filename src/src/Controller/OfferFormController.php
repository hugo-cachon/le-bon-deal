<?php

namespace App\Controller;

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
            return $this->redirectToRoute('app_test');
        }


        return $this->render('offer_form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
