<?PHP

require '../Core/Router.php';

$router = new Router();

//echo get_class($router);


$router->add('home', ['controller' => 'Home', 'action' => 'index']);
