<?php
/**
 * Created by PhpStorm.
 * User: Magdalena
 * Date: 2016-01-13
 * Time: 11:37
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('homepage', new Routing\Route('/', array(
    '_controller' => 'Sample\Controller\DefaultController::indexAction',
)));

return $routes;