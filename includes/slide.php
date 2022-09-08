<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">

<?php for($i = 1 ; $i <= 3 ; $i++): ?>
<div class="carousel-item <?php if($i == 1) echo 'active'; ?>">
    <img src="images/slide/sl<?=$i;?>.jpg" height="500" class="d-block w-100">
</div>
<?php endfor; ?>
</div> <!-- inner -->

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>