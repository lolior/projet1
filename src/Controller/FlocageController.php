<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FlocageController extends AbstractController
{
    #[Route('/flocage', name: 'app_flocage')]
    public function index(): Response
    {
        return $this->render('flocage/index.html.twig');
    }
}
