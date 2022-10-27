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

    #[Route('/user/edit', name: 'app_edit_user')]
    public function edit(Request $request, EntityManagerInterface $em): Response
    {

        $loggedUser = $this->getUser();



        $form = $this->createForm(EditUserType::class, $loggedUser);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();
            $data->setUpdatedAt(new \DateTimeImmutable());
            $em->persist($data);
            $em->flush();
            return $this->redirectToRoute('app_user');
        }


        return $this->render('user/editoffer.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/offers', name: 'app_user_offers')]
    public function userOffer(): Response
    {
        return $this->render('user/useroffers.html.twig', [
            'controller_name' => 'UserController',

        ]);
    }
}
