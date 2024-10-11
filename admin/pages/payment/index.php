<?php
require '../../includes/init.php';

$index = 0;
$orders = select("SELECT Order.TotalAmount, Order.Status, Cart.PropertyId AS 'PropertyId', Cart.ClientId AS 'ClientId', Client.UserName AS 'ClientName', PropertyDetails.PropertyName AS 'PropertyName' FROM `Order` INNER JOIN Cart ON Order.CartId = Cart.Id INNER JOIN Client ON Cart.ClientId = Client.Id INNER JOIN PropertyDetails ON Cart.PropertyId = PropertyDetails.Id");

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
                  <h3>Order</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> Form Controls</li>
                    <li class="breadcrumb-item active"> Validation Forms</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          
          <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <a>Add</a><span>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive theme-scrollbar">
                      <table class="display" id="basic-9">
                        <thead>
                          <tr>
                            <th>SR No.</th>
                            <th>User</th>
                            <th>Property</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($orders as $order): ?>
                          <tr>
                              <td><?= $index += 1 ?></td>
                              <td><?= $order['ClientName'] ?></td>
                              <td><?= $order['PropertyName'] ?></td>
                              <td><?= $order['TotalAmount'] ?></td>
                              <td><?= $order['Status'] ?></td>
                          </tr>
                          <?php endforeach;?>
                        </tbody>
                        <tfoot>
                        <tr>
                           <th>SR No.</th>
                            <th>User</th>
                            <th>Property</th>
                            <th>Total Amount</th>
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

<!-- Mirrored from admin.pixelstrap.com/tivo/template/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2024 06:31:11 GMT -->
</html>

<?php
include pathof('includes/scripts.php');
?>