<?php
namespace App\Controller;
use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class allProductsController extends AbstractController {



    #[Route('/allProduct', name: 'allProduct')]
    public function allProducts(OfferRepository $or) {

        $offer = $or->findAll();

        return $this->render('Product/allproduct.html.twig', [
            
            'offer' => $offer,
        ]);
    }

}
