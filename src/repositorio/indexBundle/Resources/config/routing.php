<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('repositorioindex_homepage', new Route('/hello/{name}', array(
    '_controller' => 'repositorioindexBundle:Default:index',
)));

$collection->add('repositorioindex_homepage', new Route('/index', array(
    '_controller' => 'repositorioindexBundle:Default:index',
)));

return $collection;
