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
                  <div class="card-header">Total Properties</div>
                  <div class="card-body">
                    <h4><?php echo $totalProperties['total']; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Clients Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Clients</div>
                  <div class="card-body">
                    <h4><?php echo $totalClients['total']; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Orders Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Orders</div>
                  <div class="card-body">
                    <h4><?php echo $totalOrders['total']; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Payments Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Payments</div>
                  <div class="card-body">
                    <h4><?php echo $totalPayments['total'] ?? 0; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Types Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Property Types</div>
                  <div class="card-body">
                    <h4><?php echo $totalTypes['total']; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Weekly Sales Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Weekly Sales</div>
                  <div class="card-body">
                    <h4><?php echo $totalWeeklySales['total'] ?? 0; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Monthly Sales Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Monthly Sales</div>
                  <div class="card-body">
                    <h4><?php echo $totalMonthlySales['total'] ?? 0; ?></h4>
                  </div>
                </div>
              </div>

              <!-- Total Yearly Sales Card -->
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">Total Yearly Sales</div>
                  <div class="card-body">
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
