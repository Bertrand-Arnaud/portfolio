<?php
	class Router
	{
		//Contiendra l'url demandé par l'utilisateur
		private $url;
		//Contiendra les routes du projet
		private $routes = [];

		//Constructeur
		public function __construct($url)
		{
			$this->url = $url;
		}

		//Méthode qui détecte les urls en get
		public function get($path, $callable)
		{
			//On créer une nouvelle route get
			$route = new Route($path, $callable);
			//On stock cette route dans un tableau (les routes sont indexées par la méthode, ici get)
			$this->routes['GET'][] = $route;
		}

		//Méthode qui détecte les urls en post
		public function post($path, $callable)
		{
			//On créer une nouvelle route post
			$route = new Route($path, $callable);
			//On stock cette route dans un tableau (les routes sont indexées par la méthode, ici post)
			$this->routes['POST'][] = $route;
		}

		//Vérifie si l'url demandé par l'utilisateur correspond à une des urls
		public function run()
		{
			//On parcourt l'ensemble des routes qui correspondent à la requête (get ou post)
			foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
			{
				//On vérifie pour chaque route s'il y'a une correspondence avec l'url tapé grâce à la méthode match de l'objet Route
				if($route->match($this->url))
				{
					//Si on a une correspondence, on appellera la closure par la méthode call de Route qui exécutera la fonction associée
					return $route->call();
				}

			}

			//Si on ne trouve pas de correspondence, on renvoie une exception avec l'objet RouterException
			$routerException = new RouterException();
			$routerException->matchesError();
		}
	}
?>