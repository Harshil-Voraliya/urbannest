<?php
require '../../includes/init.php';
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
                  <h3>Add State</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> State</li>
                    <li class="breadcrumb-item"> Add State</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid form-validate">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                  </div>
                  <div class="card-body">
                        <div class="mb-3 row">
                            <label">Name</label><br>
                            <div class="col-sm-12"><br>
                              <input class="form-control" type="text" id="Name" name="Name" placeholder="Enter state" autofocus>
                            </div>
                          </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                              <button class="btn btn-outline-primary" type="submit" onclick="insertData()">Submit</button>
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
      </div>
    </div>
    <div class="modal" tabindex="-1" id="success">
        <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header text-white">
              <h5 class="modal-title">State Added!</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success">Success</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal" tabindex="-1" id="error">
        <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header text-white">
              <h5 class="modal-title">State Not Added!</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger">Error</button>
            </div>
          </div>
        </div>
      </div>
    <script>
      function insertData() {
        var Name = $("#Name").val();

        $.ajax({
          url: '../../api/state/insert.php',
          type: 'POST',
          data: {
            Name: Name
          }, 
          success: function(response) {
              $("#success").modal('show');
              setTimeout(function() {
                  window.location.href = './index.php';
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
   
  </body>

</html>

<?php
include pathof('includes/scripts.php');
?>