<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SiteMapController extends AbstractController
{
    #[Route('/sitemap.{_format}', name: 'sitemap', defaults: ['_format' => 'xml'])]
    public function index(Request $request): Response
    {
        $response = new Response(
            $this->renderView('sitemap.xml', [], 200)
        );

        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }
}