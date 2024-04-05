<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'no_locale')]
    public function noLocale(): Response
    {
        return $this->redirectToRoute('app_home_page', [
            '_locale' => 'fr'
        ]);
    }

    #[Route('/{_locale<%app.supported_locales%>}', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
}
