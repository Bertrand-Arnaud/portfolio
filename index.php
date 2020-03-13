<?php

include_once('./controler/router/RouterException.class.php');
include_once('./controler/router/Router.class.php');
include_once('./controler/router/Route.class.php');
include_once('./controler/Inc.php');
 
// Définition du fuseau horraire
date_default_timezone_set("Europe/Paris");


// Instancie l'objet router
$router = new Router($_GET['url']);
$GLOBALS["INDEXPATH"] = dirname(__FILE__);
$GLOBALS["PROJECT_PATH"] = dirname(__FILE__) . "/data/projects/";
$GLOBALS["SKILLS_PATH"] = dirname(__FILE__) . "/data/skills/";

$router->get('/', function() 
{
	include_once("./public/index.html");
});

$router->post('/get_project', function() 
{
	if (isset($_POST["id"]) && $_POST["id"] != null)
	{
		$fileName = $_POST["id"] . ".json"; 
		foreach(scandir($GLOBALS["PROJECT_PATH"]) as $file)
		{
			if ($file == $fileName)
			{
				$project = file_get_contents($GLOBALS["PROJECT_PATH"] . $file);
				echo json_encode($project);
			}
		}
	}
	return null;
});

$router->post('/get_skill', function() 
{
	if (isset($_POST["id"]) && $_POST["id"] != null)
	{
		$fileName = $_POST["id"] . ".json"; 
		foreach(scandir($GLOBALS["SKILLS_PATH"]) as $file)
		{
			if ($file == $fileName)
			{
				$skill = file_get_contents($GLOBALS["SKILLS_PATH"] . $file);
				echo json_encode($skill);
			}
		}
	}
	return null;
});


$router->run();