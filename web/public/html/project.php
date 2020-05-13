<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<img class="img-fluid" src="<?php echo $p["img"]; ?>"/>
			<h2>Contexte</h2>
			<p class="text-justify"><?php echo $p["le_projet"];?></p>
			<h2>Ma Contribution</h2>
			<p class="text-justify"><?php echo $p["ma_contribution"];?></p>
			<h2>Bilan</h2>
			<p class="text-justify"><?php echo $p["bilan"];?></p>
			<?php 
				foreach($p["competences"] as $skill)
				{
			?>
				<button class="btn btn-custom" onclick="openSkill('<?php echo $skill['id']; ?>')"><?php echo $skill['name']; ?></button>

			<?php
				}
			?>
		</div>
	</div>
</div>