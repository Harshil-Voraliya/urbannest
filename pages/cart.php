<?php
require '../includes/init.php';

$ClientId = $_SESSION['UserId'];
$carts = select("SELECT cart.*, propertydetails.PropertyName, propertydetails.Price, propertydetails.ImageFileName FROM cart JOIN propertydetails ON cart.PropertyId = propertydetails.Id WHERE cart.ClientId = $ClientId");

$totalPrice = 0; // Initialize total price variable

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
                        <h1 class="title">Cart</h1>
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
                                            <th class="remove text-center" style="width: 50px;">Remove</th> <!-- Reduce the width and center align -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($carts as $cart) : 
                                            $totalPrice += $cart['Price']; // Accumulate price
                                        ?>
                                            <tr>
                                                <td class="thumbnail" style="width: 80px;">
                                                    <a href="product-details.html">
                                                        <img src="<?= urlOf('admin/assets/images/uploads/') . $cart['ImageFileName'] ?>" alt="cart-product-1" style="width: 100%;">
                                                    </a>
                                                </td>
                                                <td class="name">
                                                    <a href="product-details.html"><?= $cart['PropertyName'] ?></a>
                                                </td>
                                                <td class="price">
                                                    <span><?= $cart['Price'] ?></span>
                                                </td>
                                                <td class="remove text-center">
                                                    <button onclick="deleteCartItem(<?= $cart['Id'] ?>)">×</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <!-- Center the Continue Shopping Button -->
                                <div class="row justify-content-center mb-n3">
                                    <div class="col-auto">
                                        <a class="btn btn-light btn-hover-dark mb-3" href="<?= urlOf('pages/propertylist.php') ?>">Continue Shopping</a>
                                    </div>
                                </div>
                            </form>

                            <!-- Center the Cart Totals Box -->
                            <div class="cart-totals-container d-flex justify-content-center">
                                <div class="cart-totals" style="max-width: 400px; padding: 20px; border: 1px solid #ddd;">
                                    <h2 class="title text-center">Cart totals</h2>
                                    <table class="w-100">
                                        <tbody>
                                            <tr class="total">
                                                <th>Total</th>
                                                <td><strong><span class="amount">₹<?= $totalPrice ?></span></strong></td> <!-- Display total price -->
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="./checkout.php" class="btn btn-dark btn-outline-hover-dark">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shopping Cart Section End -->

                </div>
                <!-- Shopping Cart Section End -->
                <script>
                    function deleteCartItem(Id) {
                        $.ajax({
                            url: "../admin/api/carts/delete.php",
                            method: "POST",
                            data: {
                                Id: Id
                            },
                            success: function(response) {
                                alert("Products Deleted Successfully");
                            }
                        })
                    }
                </script>
                <?php
                include pathOf('includes/footer.php');
                include pathOf('includes/scripts.php');
                include pathOf('includes/pageend.php');
                ?>
