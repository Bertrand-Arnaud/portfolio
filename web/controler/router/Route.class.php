<?php
	class Route
	{
		//Contient une route
		private $path;
		//Contiendra la fonction associée
		private $callable;
		//Contiendra les différents matches
		private $matches;

		//Constructeur
		public function __construct($path, $callable)
		{
			//Trim enlève le / qui se trouve au début de la route (ex: /accueil)
			$this->path = trim($path, '/');
			$this->callable = $callable;
		}

		public function match($url)
		{
			//Remplace les paramètres par une regex (ex : fiche:5 => fiche\/([a-zA-Z0-9]+))
			$path = preg_replace('#:([\w]+)#', '\/([a-zA-Z0-9]+)', $this->path);
			//Regex qui va servir à la comparaison
			$regex = "#^$path$#i";

			//Si on n'a pas de correspondence entre la regex et l'url on retourne false
			if(!preg_match($regex, $url, $matches))
			{
				return false;
			}

			//On supprime le premier élément du tableau $matches (il contient l'url entier)
			array_shift($matches);
			$this->matches = $matches;
			return true;
		}

		public function call()
		{
			//On appelle la fonction associée
			return call_user_func_array($this->callable, $this->matches);
		}
	}
?>