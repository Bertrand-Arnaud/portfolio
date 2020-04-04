<?php
	class RouterException
	{
		//Renvoie sur une page d'érreur
		public function matchesError()
		{
			header('Location: ./');
		}
	}
?>