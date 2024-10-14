<?php
    require '../includes/init.php';

    $ClientId = $_SESSION['UserId'];
    $carts = select("SELECT cart.*, propertydetails.PropertyName, propertydetails.Price, propertydetails.ImageFileName FROM cart JOIN propertydetails ON cart.PropertyId = propertydetails.Id WHERE cart.ClientId = $ClientId");

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
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdFirstName">FIrst Name <abbr class="required">*</abbr></label>
                        <input type="text" id="FirstName" name="FirstName" >
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">Last Name <abbr class="required">*</abbr></label>
                        <input type="text" id="LastName" name="LastName" >
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">Address <abbr class="required">*</abbr></label>
                        <input type="text" id="Address" name="Address" >
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">City <abbr class="required">*</abbr></label>
                        <input type="text" id="City" name="City"> 
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">State <abbr class="required">*</abbr></label>
                        <input type="text" id="State" name="State">
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">Pincode <abbr class="required">*</abbr></label>
                        <input type="number" id="PinCode" name="PinCode">
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">Phone <abbr class="required">*</abbr></label>
                        <input type="number" id="Phone" name="Phone">
                    </div>
                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName">Email <abbr class="required">*</abbr></label>
                        <input type="email" id="Email" name="Email">
                    </div>
                </div>
            </form>
            <div class="section-title2 text-center">
                <h2 class="title">Your order</h2>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-6 order-lg-2 learts-mb-30">
                    <div class="order-review">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="name">Product</th>
                                    <th class="total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($carts as $cart) { ?>
                                <tr>
									<input type="hidden" value="<?= $cart['Id'] ?>" id="CartId" name="CartId">
                                    <td class="name"><?= $cart['PropertyName'] ?></td>
                                    <td class="total"><span><?= $cart['Price'] ?></span></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr class="total">
                                    <th>Total</th>
                                    <td><strong><span></span><?= $cart['Price'] ?></strong></td>
                                    <input type="hidden" value="<?= $cart['Price'] ?>" id="TotalPrice" name="TotalPrice">
                                </tr>
                            </tfoot>
                        </table>
                        <button onclick="insertData()">Place Order</button>
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
					},
					error: function(xhr, status, error) {
						console.log(xhr.responseText);
					}
				});
			}
		</script>

<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>