<?php
require 'includes/init.php'; // Initialize database and helper functions
include pathOf('includes/header.php'); // Include header

// Fetch data for dashboard
$totalProperties = selectOne("SELECT COUNT(*) as total FROM PropertyDetails");
$totalClients = selectOne("SELECT COUNT(*) as total FROM Client");
$totalOrders = selectOne("SELECT COUNT(*) as total FROM `Order`"); // Total Orders
$totalPayments = selectOne("SELECT SUM(Amount) as total FROM Payment");
$totalTypes = selectOne("SELECT COUNT(*) as total FROM PropertyType"); // Total Property Types

// Sales calculations
$totalWeeklySales = selectOne("SELECT SUM(TotalAmount) as total FROM `Order` WHERE YEARWEEK(Date) = YEARWEEK(CURRENT_DATE)");
$totalMonthlySales = selectOne("SELECT SUM(TotalAmount) as total FROM `Order` WHERE MONTH(Date) = MONTH(CURRENT_DATE) AND YEAR(Date) = YEAR(CURRENT_DATE)");
$totalYearlySales = selectOne("SELECT SUM(TotalAmount) as total FROM `Order` WHERE YEAR(Date) = YEAR(CURRENT_DATE)");
?>

<style>
  .card-header {
    font-weight: bold;
    font-size: large;
  }
  .card-body{
    padding: 0px !important;
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<body onload="startTime()">
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php include pathOf('includes/navbarTop.php'); ?> <!-- Navbar -->
    <div class="page-body-wrapper">
      <?php include pathOf('includes/sidebar.php'); ?> <!-- Sidebar -->

      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <h3>Dashboard</h3>
          </div>

          <!-- Dashboard cards displaying data -->
          <div class="row">
            <!-- Total Properties Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Properties</div>
                <div class="card-body text-center">
                  <i class="fas fa-home fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalProperties['total']; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Clients Card -->
            <div class="col-lg-3">  
              <div class="card">
                <div class="card-header text-center">Total Clients</div>
                <div class="card-body text-center">
                  <i class="fas fa-users fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalClients['total']; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Orders Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Orders</div>
                <div class="card-body text-center">
                  <i class="fas fa-shopping-cart fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalOrders['total']; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Property Types Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Property Types</div>
                <div class="card-body text-center">
                  <i class="fas fa-layer-group fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalTypes['total']; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Payments Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Payments</div>
                <div class="card-body text-center">
                  <i class="fas fa-credit-card fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalPayments['total'] ?? 0; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Weekly Sales Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Weekly Sales</div>
                <div class="card-body text-center">
                  <i class="fas fa-calendar-week fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalWeeklySales['total'] ?? 0; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Monthly Sales Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Monthly Sales</div>
                <div class="card-body text-center">
                  <i class="fas fa-calendar-alt fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalMonthlySales['total'] ?? 0; ?></h4>
                </div>
              </div>
            </div>

            <!-- Total Yearly Sales Card -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header text-center">Total Yearly Sales</div>
                <div class="card-body text-center">
                  <i class="fas fa-calendar fa-3x"></i> <!-- Big Icon --><br><br>
                  <h4><?php echo $totalYearlySales['total'] ?? 0; ?></h4>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <?php include pathOf('includes/scripts.php'); ?> <!-- Include scripts -->
</body>

</html>