<?php

use app\controllers\ApiExampleController;
use app\controllers\HomeController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Instanciar o HomeController
$homeController = new HomeController($app);

// Rotas principais do site
$router->get('/', [ $homeController, 'index' ]);
$router->get('/sobre', [ $homeController, 'about' ]);
$router->get('/produtos', [ $homeController, 'products' ]);
$router->get('/sustentabilidade', [ $homeController, 'sustainability' ]);
$router->get('/contato', [ $homeController, 'contact' ]);
$router->post('/contato', [ $homeController, 'submitContact' ]);

// Rotas da API (mantidas para compatibilidade)
$router->group('/api', function() use ($router, $app) {
	$Api_Example_Controller = new ApiExampleController($app);
	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
});