<?php
require '../../includes/init.php';
$Id = $_POST['Id'];
$States = selectOne("SELECT * FROM State WHERE Id = $Id");
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
    <div class="dot"></div>
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
                <h3>Update State</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item"> State</li>
                  <li class="breadcrumb-item"> Update State</li>
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
                    <label">Name</label>
                      <div class="col-sm-12"><br>
                        <input class="form-control" type="text" id="Name" name="Name" autofocus placeholder="Enter state" value="<?= $States['Name'] ?>">
                        <input class="form-control" type="hidden" id="Id" name="Id" autofocus placeholder="Enter state" value="<?= $States['Id'] ?>">
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

  <script>
    function insertData() {
      var Id = $("#Id").val();
      var Name = $("#Name").val();

      $.ajax({
        url: '../../api/state/update.php',
        type: 'POST',
        data: {
          Id: Id,
          Name: Name
        },
        success: function(response) {
          alert("State Updated Successfully");
          window.location.href = "index.php";
        }
      });
    }
  </script>

</body>

</html>

<?php
include pathof('includes/scripts.php');
?>