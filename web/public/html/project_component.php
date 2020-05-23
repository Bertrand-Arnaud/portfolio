<div <?php echo $p["animation"]; ?> data-aos-once="true" class="<?php echo $p["col"];?>">
	<div class="card">
		<img class="card-img-top" src="<?php echo $p["img"];?>" alt="Card image cap">
		<div class="card-header bg-custom"><h5 class="text-white"><?php echo $p["nom"]; ?></h5></div>
		<div class="card-body">
			<p class="card-text"><?php echo $p["brief"]; ?></p>
			<button onclick="openProject('<?php echo $p['id']; ?>')" class="btn btn-inline btn-custom">En savoir plus</button>
		</div>
	</div>
</div>