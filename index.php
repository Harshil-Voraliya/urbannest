<?php
    require 'includes/init.php';
    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
?>

<body>

    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-1" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/banner/parallax/parallax-1.webp" alt="parallax-1" /></div>
        <div class="content text-center" data-scrollax="properties: { opacity: '2' }">
            <span class="sub-title">Large</span>
            <h2 class="title">CUTTING BOARD</h2>
        </div>
    </div>
    <!-- Parallax Banner End -->

    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-2" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/banner/parallax/parallax-2.webp" alt="parallax-2" /></div>
        <div class="content text-center">
            <img class="price " src="assets/images/banner/parallax/parallax-2-1.webp" alt="Price">
            <h2 class="title">MOROCCO VASE</h2>
            <span class="sub-title">Superb quality</span>
        </div>
    </div>
    <!-- Parallax Banner End -->

    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-3" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/banner/parallax/parallax-3.webp" alt="parallax-3" /></div>
        <div class="content text-center">
            <img class="sub-title " src="assets/images/banner/parallax/parallax-3-1.webp" alt="Price">
            <h2 class="title">Alumsy Shelf</h2>
            <a href="shop.html" class="btn btn-light btn-hover-dark">shop now</a>
        </div>
    </div>
    <!-- Parallax Banner End -->

    <!-- Parallax Banner Start -->
    <div class="parallax-banner parallax-banner-4" data-scrollax-parent="true">
        <div class="parallax-image" data-scrollax="properties: { translateY: '30%' }"><img src="assets/images/banner/parallax/parallax-4.webp" alt="parallax-4" /></div>
        <div class="content">
            <span class="sub-title">made for you</span>
            <h2 class="title">Salmon Cutting Board Blue Stone</h2>
            <a href="shop.html">+ Online store</a>
        </div>
    </div>
    <!-- Parallax Banner End -->


<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>