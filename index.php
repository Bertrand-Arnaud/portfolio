<?php

include_once('./controler/router/RouterException.class.php');
include_once('./controler/router/Router.class.php');
include_once('./controler/router/Route.class.php');
 
// Définition du fuseau horraire
date_default_timezone_set("Europe/Paris");


// Instancie l'objet router
$router = new Router($_GET['url']);
$GLOBALS["INDEXPATH"] = dirname(__FILE__);

$router->get('/', function() 
{
	echo("Portfolio Bertrand ARNAUD");
});

$router->post('/get_project', function() 
{
	return null;
});

$router->post('/get_skill', function() 
{
	return null;
});


$router->run();