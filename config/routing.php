<?php
/**
 * Created by PhpStorm.
 * User: Magdalena
 * Date: 2016-01-12
 * Time: 14:48
 */

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello', array('_controller' => 'Itav/Invoice/InvoiceController')));

return $routes;