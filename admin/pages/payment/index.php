<?php
require '../../includes/init.php';

$index = 0;
// $payments = select("SELECT * FROM Payment");
$payments = select("SELECT 
    Payment.Id AS PaymentId,
    Payment.Date AS PaymentDate,
    Payment.Amount,
    Payment.Method,
    Payment.Status AS PaymentStatus,
    `Order`.Id AS OrderId,
    Client.UserName AS ClientName,
    PropertyDetails.PropertyName,
    PropertyDetails.Price AS PropertyPrice,
    PropertyDetails.Sqft,
    PropertyType.Name AS PropertyType,
    City.Name AS CityName,
    State.Name AS StateName
FROM 
    Payment
INNER JOIN `Order` ON Payment.OrderId = `Order`.Id
INNER JOIN Cart ON `Order`.CartId = Cart.Id
INNER JOIN Client ON Cart.ClientId = Client.Id
INNER JOIN PropertyDetails ON Cart.PropertyId = PropertyDetails.Id
INNER JOIN PropertyType ON PropertyDetails.TypeId = PropertyType.Id
INNER JOIN City ON PropertyDetails.CityId = City.Id
INNER JOIN State ON PropertyDetails.StateId = State.Id;

");
include pathof('includes/header.php');
?>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include pathOf('includes/navbarTop.php') ?>

    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php
      include pathOf('includes/sidebar.php');
      ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3>Payment</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href=<?= urlOf('index.php') ?>><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item"> Payment </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
            </div>
            <div class="card-body">
              <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-9">
                  <thead>
                    <tr>
                      <th>SR No.</th>
                      <th>Client</th>
                      <th>Payment Received Date</th>
                      <th>Total Amount</th>
                      <th>Method</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($payments as $payment): ?>
                      <tr>
                        <td><?= $index += 1 ?></td>
                        <td><?= $payment['ClientName'] ?></td>
                        <td><?= $payment['PaymentDate'] ?></td>
                        <td><?= $payment['Amount'] ?></td>
                        <td><?= $payment['Method'] ?></td>
                        <td><?= $payment['PaymentStatus'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SR No.</th>
                      <th>Client</th>
                      <th>Payment Received Date</th>
                      <th>Total Amount</th>
                      <th>Method</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>

</html>

<?php
include pathof('includes/scripts.php');
?>