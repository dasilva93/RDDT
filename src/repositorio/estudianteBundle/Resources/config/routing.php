<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('estudiante_homepage', new Route('/estudiante', array(
    '_controller' => 'estudianteBundle:Default:estudiante',
)));

$collection->add('estudiante_registrar', new Route('/registrar', array(
    '_controller' => 'estudianteBundle:Default:registrar',
)));

$collection->add('estudiante_buscar', new Route('/buscar/{por}/{bus}', array(
    '_controller' => 'estudianteBundle:Default:buscar',
)));

return $collection;
