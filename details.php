<?php
$pageName = "Product Details";
include ('includes/header.php');
include ('includes/navbar.php'); 

    $id = $_GET['pid'];
    $product = $products[$id];

    // for test
    // echo '<pre>';
    // print_r($product);
    // echo '</pre>';
?>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $product['image'] ?>"/></div>
            <div class="col-md-6">
                <div class="small mb-1"><?= $product['type'] ?></div>
                <h1 class="display-5 fw-bolder"><?= $product['name'] ?></h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through"><?= $product['price']+200 ?> LE</span><br>
                    <span><?= $product['price'] ?> LE</span>
                </div>
                <p class="lead"><?= $product['description'] ?>/p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('includes/footer.php'); ?>
