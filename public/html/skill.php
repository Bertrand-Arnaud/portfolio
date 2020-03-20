<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1><?php echo $p["nom"]; ?></h1>
			<h2>Définition</h2>
			<p class="text-justify"><?php echo $p["definition"];?></p>
			<h2>Comment je l'ai mis oeuvre</h2>
			<p class="text-justify"><?php echo $p["comment"];?></p>
			<h2>La place dans mon projet profesionnel</h2>
			<p class="text-justify"><?php echo $p["pourquoi"];?></p>
			<?php 
				foreach($p["projects"] as $project)
				{
			?>
				<button class="btn btn-custom" onclick="openProject('<?php echo $project['id']; ?>')"><?php echo $project['name']; ?></button>

			<?php
				}
			?>
		</div>
	</div>
</div>