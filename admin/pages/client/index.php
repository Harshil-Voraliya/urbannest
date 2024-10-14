<?php
require '../../includes/init.php';

$index = 0;
$clients = select('SELECT * FROM client');
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
                  <h3>Client</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> client</li>
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
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($clients as $client) { ?>
                          <tr>
                            <td><?= $index += 1 ?></td>
                            <td><?= $client['UserName'] ?></td>
                            <td><?= $client['Password'] ?></td>
                            <td><?= $client['Email'] ?></td>
                           
                          </tr>
                          <?php }?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SR No.</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                          
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
      </div>
    </div>
  </body>
</html>

<?php
include pathof('includes/scripts.php');
?>