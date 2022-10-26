<?php

namespace App\Controller;

use App\Form\EditUserType;
use App\Form\OfferFormType;
use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',

        ]);
    }

    #[Route('/offer/form', name: 'app_offer_form')]
    public function edit(Request $request, EntityManagerInterface $em): Response
    {

        $loggedUser = $this->getUser();



        $form = $this->createForm(EditUserType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();
            $data->setUpdateAt(new \DateTime());
            $em->persist($data);
            $em->flush();
            return $this->redirectToRoute('app_test');
        }


        return $this->render('user/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
