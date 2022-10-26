<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class allProductsController extends AbstractController {



    #[Route('/allProduct', name: 'allProduct')]
    public function allProducts() {
        return $this->render('Product/allproduct.html.twig', [
            
            'tag' => $tag,
            'product' => $product,
        ]);
    }

}
