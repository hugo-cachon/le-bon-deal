<?php

namespace App\Controller;

use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchbarController extends AbstractController
{
    #[Route('/searchbar', name: 'app_searchbar', methods: ['GET'])]
    public function index(Request $request, OfferRepository $offerRepository): Response
    {
        $offerName  = $request->query->get('offer');
        //$offers = $offerRepository->findAll();
        $offers = $offerRepository->customQuery($offerName);
        return $this->render('searchbar/index.html.twig', [
            'offers' => $offers
        ]);
    }
}
