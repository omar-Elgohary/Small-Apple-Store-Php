<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="index.php">Apple Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link <?php if($pageName == 'Home') echo 'active'; ?>" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link <?php if($pageName == 'Products') echo 'active'; ?>" href="products.php">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
    </div>
</div>
</nav>