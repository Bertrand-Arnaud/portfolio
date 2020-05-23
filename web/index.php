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
	$projects_html = '<div class="row">';
	$i = 0;
	$projects = scandir($GLOBALS["PROJECT_PATH"]);
	foreach($projects as $file)
	{
		if (strpos($file, ".json"))
		{
			$project = file_get_contents($GLOBALS["PROJECT_PATH"] . $file);
			$project = json_decode($project, true);
			$fileNameExploded = explode('.', $file);
			$project["id"] = $fileNameExploded[0];
			$project["brief"] = substr($project["le_projet"], 0, 120) . "...";
			$project["col"] = sizeof($projects) - 1 == $i ? "col-xs-12 col-sm-6 col align-self-center" : "col-sm-6 col-xs-12 animation-tilt-in-fwd-tl";
			$project["animation"] = "data-aos=\"fade-down-right\"";
			$projects_html .= Inc::html("public/html/project_component.php", $project);
			if ($i % 2 == 1)
			{
				$projects_html .= '</div><br/><div class="row justify-content-center">';
			}
		}
		$i++;
	}
	$projects_html .= "</div>";
	include_once("./public/html/index.php");
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
				$project = json_decode($project, true);
				$return["html"] = Inc::html("public/html/project.php", $project);
				$return["title"] = $project["nom"];

				echo json_encode($return);
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
				$skill = json_decode($skill, true);
				$return["html"] = Inc::html("public/html/skill.php", $skill);
				$return["title"] = $skill["nom"];

				echo json_encode($return);
			}
		}
	}
	return null;
});

$router->run();