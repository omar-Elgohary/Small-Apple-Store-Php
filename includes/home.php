<section class="py-5">
<div class="container px-4 px-lg-5 mt-5">
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    
<?php foreach(array_slice($products , 0 , 4 , true) as $id => $product): ?>
    <div class="col mb-5">
        <div class="card h-100">
            <img class="card-img-top" src="<?= $product['image'] ?>"  height="200"/>
            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder"><?= $product['name'] ?></h5>
                    <?= $product['price'] ?> LE
                </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                href="details.php?pid=<?= $id ?>">View options</a></div>
            </div>
        </div> <!-- card -->
    </div> <!-- col -->
<?php endforeach; ?>

</div> <!-- row -->
</div> <!-- container -->
</section>