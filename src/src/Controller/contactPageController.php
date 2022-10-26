<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class contactPageController extends AbstractController {



    #[Route('/contact', name: 'contact')]
    public function contactPage() {
        return $this->render('contact/contact.html.twig');
    }

}
