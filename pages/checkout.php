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
                        <h1 class="title">Checkout</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->

        <!-- Checkout Section Start -->
        <div class="section section-padding">
            <div class="container">

                <div class="section-title2">
                    <h2 class="title">Billing details</h2>
                </div>
                <form action="#" class="checkout-form learts-mb-50">
                    <div class="row">
                        <!-- Billing form fields go here -->
                        <!-- Same as your original code for billing details -->
                    </div>
                </form>

                <div class="section-title2 text-center">
                    <h2 class="title">Your order</h2>
                </div>

                <div class="row learts-mb-n30 justify-content-center"> <!-- Center the row -->
                    <div class="col-lg-9 order-lg-2 learts-mb-30">
                        <div class="order-review">
                            <table class="table table-bordered"> <!-- Added table-bordered for better visibility -->
                                <thead style="border-bottom: 2px solid #ddd;"> <!-- Ensure header has a bottom border -->
                                    <tr>
                                        <th class="name">Product</th>
                                        <th class="total">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($carts as $cart) { 
                                        $totalPrice += $cart['Price']; // Accumulate the price of each item
                                    ?>
                                        <tr>
                                            <input type="hidden" value="<?= $cart['Id'] ?>" id="CartId" name="CartId">
                                            <td class="name"><?= $cart['PropertyName'] ?></td>
                                            <td class="total"><span>₹<?= number_format($cart['Price'], 2) ?></span></td> <!-- Added rupee symbol and formatted the price -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot style="border-top: 2px solid #ddd;"> <!-- Ensure footer has a top border -->
                                    <tr class="total">
                                        <th>Total</th>
                                        <td><strong><span>₹</span><?= number_format($totalPrice, 2) ?></strong></td> <!-- Display the calculated total price -->
                                        <input type="hidden" value="<?= $totalPrice ?>" id="TotalPrice" name="TotalPrice">
                                    </tr>
                                </tfoot>
                            </table>

                            <!-- Center the button and add top margin -->
                            <div class="text-center mt-4"> <!-- Added text-center and mt-4 -->
                                <button class="btn btn-light btn-hover-dark" onclick="insertData()">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Section End -->

        <script>
            function insertData() {
                var CartId = $('#CartId').val();
                var FirstName = $('#FirstName').val();
                var LastName = $('#LastName').val();
                var Address = $('#Address').val();
                var City = $('#City').val();
                var State = $('#State').val();
                var PinCode = $('#PinCode').val();
                var Phone = $('#Phone').val();
                var Email = $('#Email').val();
                var TotalPrice = $('#TotalPrice').val();

                $.ajax({
                    url: '../admin/api/checkouts/insert.php',
                    type: 'POST',
                    data: {
                        CartId: CartId,
                        FirstName: FirstName,
                        LastName: LastName,
                        Address: Address,
                        City: City,
                        State: State,
                        PinCode: PinCode,
                        Phone: Phone,
                        Email: Email,
                        TotalPrice: TotalPrice
                    },
                    success: function(response) {
                        alert("Order Placed Successfully");
                    }
                });
            }
        </script>

        <?php
        include pathOf('includes/footer.php');
        include pathOf('includes/scripts.php');
        include pathOf('includes/pageend.php');
        ?>