<?php
    require 'includes/init.php';
    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
?>

<body>

    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-1" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/out/20.jpg" alt="parallax-1" /></div>
        <div class="content text-center" data-scrollax="properties: { opacity: '2' }">
            <span class="sub-title">Heaven</span>
            <a href="<?= urlOf("pages/propertylist.php") ?>" class="btn btn-light btn-hover-dark">shop now</a>
        </div>
    </div>
    <!-- Parallax Banner End -->
<br>
    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-2" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/out/1.jpg" alt="parallax-2" /></div>
        <div class="content text-center">
            <img class="price " src="assets/images/banner/parallax/parallax-2-1.webp" alt="Price">
            <h2 class="title">Blue sky</h2>
            <a href="<?= urlOf("pages/propertylist.php") ?>" class="btn btn-light btn-hover-dark">shop now</a>
        </div>
    </div>
    <!-- Parallax Banner End -->
<br>
    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-3" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/out/2.jpg" alt="parallax-3" /></div>
        <div class="content text-center">
            <img class="sub-title " src="assets/images/banner/parallax/parallax-3-1.webp" alt="Price">
            <h2 class="title">Park Avenue</h2>
            <a href="<?= urlOf("pages/propertylist.php") ?>" class="btn btn-light btn-hover-dark">shop now</a>
        </div>
    </div>
    <!-- Parallax Banner End -->
    <br>
    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-4" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/out/3.jpg" alt="parallax-4" /></div>
        <div class="content">
            <span class="sub-title">made for you</span>
            <a href="<?= urlOf("pages/propertylist.php") ?>" class="btn btn-light btn-hover-dark">shop now</a>
        </div>
    </div>
    <!-- Parallax Banner End -->


<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>