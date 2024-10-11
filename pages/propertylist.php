<?php
require '../includes/init.php';

$propertydetails = select("SELECT * FROM propertydetails");

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<body>
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="<?= urlOf('assets/images/bg/page-title-1.webp') ?>">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button class="active" data-filter="*">all</button>
                            <button data-filter=".featured">Hot Products</button>
                            <button data-filter=".new">New Products</button>
                            <button data-filter=".sales">Sales Products</button>
                        </div>
                    </div>
                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls">

                            <li>
                                <div class="product-sorting">
                                    <select class="nice-select">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle active hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>
                            <li>
                                <a class="product-filter-toggle" href="#product-filter">Filters</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->



        <div class="section learts-mt-70">
            <div class="container">
                <!-- Products Start -->
                <div id="shop-products" class="products isotope-grid row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                    <input type="hidden" value="<?= $UserId ?>" id="UserId">
                    <div class="grid-sizer col-1"></div>
                    <?php foreach ($propertydetails as $propertydetail) { ?>
                        <div class="grid-item col featured">
                            <div class="product">
                                <div class="product-thumb">
                                        <img src="<?= urlOf('admin/assets/images/uploads/') . $propertydetail['ImageFileName'] ?>" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <h6 class="title"><a href="./propertydetails.php"><?= $propertydetail['PropertyName'] ?></a></h6>
                                    <span class="price">
                                        ₹<?= $propertydetail['Price'] ?>
                                    </span>
                                    <div class="product-buttons">
                                        <button onclick="addToWishlist(<?= $propertydetail['Id'] ?>)" class="product-button hintT-top" data-hint="Wishlist"><i class="fas fa-heart"></i></button>
                                        <form action="./propertydetails.php" method="post">
                                            <input type="hidden" value="<?= $propertydetail['Id'] ?>" id="Id" name="Id">
                                            <button type="submit" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    ?>
    <!-- Shop Products Section End -->
    <script>
        function addToCart(Id) {
            $.ajax({
                url: './cart.php',
                type: 'POST',
                data: {
                    Id: Id
                },
                success: function(response) {
                    console.log(response);
                    alert('Product added to cart!');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function addToWishlist(PropertyId) {
            // Properly embed the PHP value into JavaScript as a boolean
            var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
            var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;

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

    <?php
    include pathOf('includes/pageend.php');
    ?>