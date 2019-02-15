<?php 

 /** 
  * Twig
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';




$router = new Core\Router();


$router->add('', ['controller' => 'Home', 'action' => 'index']);
//$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->add('{controller}/{id:\d+}/{action}');
//Display the routing tables



$router->dispatch($_SERVER['QUERY_STRING']);