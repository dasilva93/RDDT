<?php

namespace repositorio\indexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('repositorioindexBundle::index.html.twig');
    }
}
