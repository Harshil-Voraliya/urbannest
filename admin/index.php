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
          <div class="row">
              <!-- Card for Total Property -->
              <div class="col-sm-6 col-lg-4">
                <div class="card o-hidden">
                  <div class="card-header pb-0">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-primary">Total Property<i class="fa fa-circle"> </i></p>
                        <h4><?= $totalProperties['total'] ?></h4>
                      </div>
                      <div class="d-flex static-widget">
                        <!-- Icon for Total Property -->
                        <i class="fa fa-home fa-3x" style="color: #0d6efd;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-widget">
                      <div class="progress sm-progress-bar progress-animate">
                        <div class="progress-gradient-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card for Total Client -->
              <div class="col-sm-6 col-lg-4">
                <div class="card o-hidden product-widget">
                  <div class="card-header pb-0">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-success">Total Client<i class="fa fa-circle"> </i></p>
                        <h4><?= $totalClients['total'] ?></h4>
                      </div>
                      <div class="d-flex static-widget">
                        <!-- Icon for Total Client -->
                        <i class="fa fa-user fa-3x" style="color: #198754;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-widget">
                      <div class="progress sm-progress-bar progress-animate">
                        <div class="progress-gradient-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card for Total Order -->
              <div class="col-sm-6 col-lg-4">
                <div class="card o-hidden message-widget">
                  <div class="card-header pb-0">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-secondary">Total Order<i class="fa fa-circle"> </i></p>
                        <h4><?= $totalOrders['total'] ?></h4>
                      </div>
                      <div class="d-flex static-widget">
                        <!-- Icon for Total Order -->
                        <i class="fa fa-shopping-cart fa-3x" style="color: orange"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-widget">
                      <div class="progress sm-progress-bar progress-animate">
                        <div class="progress-gradient-secondary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card for Monthly Sales -->
              <div class="col-sm-6 col-lg-4">
                <div class="card o-hidden user-widget">
                  <div class="card-header pb-0">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-info">Monthly Sales<i class="fa fa-circle"> </i></p>
                        <h4><?= $totalMonthlySales['total'] ?></h4>
                      </div>
                      <div class="d-flex static-widget">
                        <!-- Icon for Monthly Sales -->
                        <i class="fa fa-chart-line fa-3x" style="color: #0d6efd;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-widget">
                      <div class="progress sm-progress-bar progress-animate">
                      <div class="progress-gradient-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card for Yearly Sales -->
              <div class="col-sm-6 col-lg-4">
                <div class="card o-hidden product-widget">
                  <div class="card-header pb-0">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-success">Yearly Sales<i class="fa fa-circle"> </i></p>
                        <h4><?= $totalYearlySales['total'] ?></h4>
                      </div>
                      <div class="d-flex static-widget">
                        <!-- Icon for Yearly Sales -->
                        <i class="fa fa-chart-bar fa-3x" style="color: #198754;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-widget">
                      <div class="progress sm-progress-bar progress-animate">
                        <div class="progress-gradient-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card for Total Profit -->
              <div class="col-sm-6 col-lg-4">
                <div class="card o-hidden message-widget">
                  <div class="card-header pb-0">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-secondary">Total Profit<i class="fa fa-circle"> </i></p>
                        <h4><?= $totalPayments['total'] ?></h4>
                      </div>
                      <div class="d-flex static-widget">
                        <!-- Icon for Total Profit -->
                        <i class="fa fa-dollar-sign fa-3x" style="color: orange;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-widget">
                      <div class="progress sm-progress-bar progress-animate">
                        <div class="progress-gradient-secondary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                      </div>
                    </div>
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
