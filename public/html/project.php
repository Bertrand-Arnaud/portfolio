<div class="row">
	<div class="col-xs-12">
		<h2>Contexte</h2>
		<p><?php echo $incArray["contexte"];?></p>
		<h2>Ma Contribution</h2>
		<p><?php echo $incArray["ma_contribution"];?></p>
		<h2>Bilan</h2>
		<p><?php echo $incArray["bilan"];?></p>
		<?php 
			foreach($incArray["competences"] as $skill)
			{
		?>
			<button class="btn btn-custom"><?php echo $skill; ?></button>

		<?php
			}
		?>
	</div>
</div>