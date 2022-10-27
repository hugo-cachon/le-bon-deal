<?php

namespace App\Controller;

use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SingleProductController extends AbstractController
{
    #[Route('/productpage/{idOffer}', name: 'app_singleProduct')]
    public function index(OfferRepository $offerRepository, $idOffer)
    {
        $offer = $offerRepository->findUser($idOffer);

        return $this->render('/product/singleProduct.html.twig',
            ['offer' => $offer]);
    }
}