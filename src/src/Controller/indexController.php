<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends AbstractController {

    /**
     *  @Route("/")
     *  @return Response    
     */

    #[Route('/', name: 'index')]
    public function homepage() {
        return $this->render('index/index.html.twig', [

            'tag' => $tag,
            'product' => $product,
            'Testimonials' => $testimonials
        ]);
    }

}
