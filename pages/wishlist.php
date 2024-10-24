<?php
require '../includes/init.php';

if(isset($_SESSION['UserId'])) {
$ClientId = $_SESSION['UserId'];
$wishlists = select("SELECT wishlist.*, propertydetails.PropertyName, propertydetails.Price, propertydetails.ImageFileName FROM wishlist JOIN propertydetails ON wishlist.PropertyId = propertydetails.Id WHERE wishlist.ClientId = $ClientId");
}
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
                        <h1 class="title">Wishlist</h1>
                        
                    </div>
                </div>
                <!-- Page Title/Header End -->

                <!-- Shopping Cart Section Start -->
                <div class="section section-padding">
                    <div class="container">
                        <form class="cart-form" action="#">
                            <table class="cart-wishlist-table table">
                                <thead>
                                    <tr>
                                        <th class="name" colspan="2">Product</th>
                                        <th class="price">Price</th>
                                        <th class="remove">Remove</th>
                                        <th class="add">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($_SESSION['UserId'])) {
                                     foreach ($wishlists as $wishlist) : ?>
                                        <tr>
                                            <td class="thumbnail"><a href="product-details.html"><img src="<?= urlOf('admin/assets/images/uploads/') . $wishlist['ImageFileName'] ?>" alt="cart-product-1"></a></td>
                                            <td class="name"> <a href="product-details.html"><?= $wishlist['PropertyName'] ?></a></td>
                                            <td class="price"><span><?= $wishlist['Price'] ?></span></td>
                                            <td class="remove"><button onclick="deleteWishlistItem(<?= $wishlist['Id'] ?>)">×</button></td>
                                            <td class="add"><button onclick="addToCart(<?= $wishlist['PropertyId'] ?>)">Add to Cart</button></td>
                                        </tr>
                                    <?php endforeach;  } ?>
                                </tbody>
                            </table>
                            <div class="row justify-content-between mb-n3">
                                <div class="col-auto">
                                    <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="<?= urlOf('pages/propertylist.php') ?>">Continue Shopping</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Shopping Cart Section End -->
                <script>
                    function deleteWishlistItem(Id) {
                        $.ajax({
                            url: "../admin/api/wishlists/delete.php",
                            method: "POST",
                            data: {
                                Id: Id
                            },
                            success: function(response) {
                                $("#success").modal('show');
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            },
                            error: function(response) {
                                $("#success").modal('show');
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            }
                        })
                    }

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
                                $("#success").modal('show');
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            },
                            error: function(response) {
                                $("#success").modal('show');
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            }
                        });
                    }
                </script>
                <?php
                include pathOf('includes/footer.php');
                include pathOf('includes/scripts.php');
                include pathOf('includes/pageend.php');
                ?>