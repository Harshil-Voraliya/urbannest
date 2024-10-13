<?php
    require '../includes/init.php';

    $PropertyId = $_POST['Id'];
    $propertydetails = selectOne("SELECT * FROM propertydetails WHERE Id = $PropertyId");

    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
?>
<body>
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop.html">Products</a></li>
                            <li class="breadcrumb-item active">Cleaning Dustpan & Brush</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Single Products Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">
            <div class="row learts-mb-n40">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-images">
                        <div class="product-gallery-slider">
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-1.webp">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName'] ?>" alt="">
                            </div>
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-2.webp">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName2'] ?>" alt="">
                            </div>
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-3.webp">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName3'] ?>" alt="">
                            </div>
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-4.webp">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName4'] ?>" alt="">
                            </div>
                        </div>
                        <div class="product-thumb-slider">
                            <div class="item">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName'] ?>" alt="">
                            </div>
                            <div class="item">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName2'] ?>" alt="">
                            </div>
                            <div class="item">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName3'] ?>" alt="">
                            </div>
                            <div class="item">
                                <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetails['ImageFileName4'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-summery">
                        <div class="product-nav">
                            <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <br>
                        <h3 class="product-title"><?= $propertydetails['PropertyName'] ?></h3>
                        <div class="product-price"><?= $propertydetails['Price'] ?></div>
                        <div class="product-description">
                            <p><?= $propertydetails['Description'] ?></p>
                        </div>
                        <div class="product-variations">
                        </div>
                        <div class="product-buttons">
                            <button class="btn btn-dark btn-outline-hover-dark" data-hint="Add to Wishlist" onclick="addToWishlist(<?= $propertydetails['Id'] ?>)"><i class="far fa-heart"></i></button>
                            <button class="btn btn-dark btn-outline-hover-dark" data-hint="Add to Cart" onclick="addToCart(<?= $propertydetails['Id'] ?>)"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                        <div class="product-meta">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>Property Type</span></td>
                                        <td class="value">
                                            <ul class="product-category">
                                                <li><a href="#"><?= $propertydetails['TypeId'] ?></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        </div>

    </div>
    <!-- Single Products Section End -->
<?php
    include pathOf('includes/scripts.php');
?>

    <script>
        function addToCart(PropertyId) {
            // Properly embed the PHP value into JavaScript as a boolean
            var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
            var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;
            console.log(PropertyId);
            console.log(UserId);

            if (!isLoggedIn) {
                alert("Please log in to add products to the wishlist.");
                window.location.href = "./login.php";
                return;
            }

            $.ajax({
                url: '../admin/api/carts/insert.php',
                type: 'POST',
                data: {
                    PropertyId: PropertyId,
                    UserId: UserId
                },
                success: function(response) {
                    console.log(response.success);
                    alert("Product added to Wishlist");
                    location.reload();
                }
            });
        }

        function addToWishlist(PropertyId) {
            // Properly embed the PHP value into JavaScript as a boolean
            var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
            var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;
            console.log(PropertyId);
            console.log(UserId);

            // Check if the user is not logged in
            if (!isLoggedIn) {
                alert("Please log in to add products to the wishlist.");
                window.location.href = "./login.php";
                return;
            }

            $.ajax({
                url: '../admin/api/wishlists/insert.php',
                type: 'POST',
                data: {
                    PropertyId: PropertyId,
                    UserId: UserId
                },
                success: function(response) {
                    console.log(response.success);
                    alert("Product added to Wishlist");
                    location.reload();
                }
            });
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/pageend.php');
?>