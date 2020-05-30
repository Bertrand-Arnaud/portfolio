<div class="<?php echo $p["col"];?> card-container">
    <div class="card-flip">
    <div class="front">
        <div class="card">
        <img class="card-img-top" src="<?php echo $p["img"];?>" alt="Card image cap">
        <div class="card-header bg-custom"><p class="text-white"><?php echo $p["nom"];?></p></div>
        </div>
    </div>
    <div class="back">
        <div class="card">
        <div class="card-body">
            <p><?php echo $p["brief"];?></p>
            <button onclick="openSkill('<?php echo $p['id']; ?>')" class="btn btn-inline btn-custom">En savoir plus</button>
        </div>
        </div>
    </div>
    </div>
</div>