<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestLogController extends AbstractController
{
    #[Route('/test/log', name: 'app_test_log')]
    public function index(): Response
    {
        return $this->render('test_log/index.html.twig');
    }
}
