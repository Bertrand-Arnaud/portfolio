<div class="<?php echo $p["col"];?>">
	<div class="card">
		<div class="card-header bg-custom"><h5 class="text-white"><?php echo $p["nom"]; ?></h5></div>
		<div class="card-body">
			<p class="card-text"><?php echo $p["brief"]; ?></p>
			<button onclick="openProject('<?php echo $p['id']; ?>')" class="btn btn-inline btn-custom">En savoir plus</button>
		</div>
	</div>
</div>