<?php
namespace App\Controller;
use App\Entity\Tag;
use App\Repository\TagRepository;
use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends AbstractController {

    /**
     *  @Route("/")
     *  @return Response    
     */

    #[Route('/', name: 'index')]
    public function homepage(TagRepository $tagRepository, OfferRepository $offerRepository ) {
        $tag = $tagRepository->findAll();
        $offer = $offerRepository->findAll();

        // dd($offer);
        return $this->render('index/index.html.twig', [

            'tag' => $tag,
            'offer' => $offer
            // 'product' => $product,
            // 'testimonials' => $testimonials
        ]);
    }

}
