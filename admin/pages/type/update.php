<?php
require '../../includes/init.php';

$Id = $_POST['Id'];
$typepropertys = selectOne("SELECT * FROM PropertyType WHERE Id = $Id");

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
                <h3>Update Property</h3>
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
        <div class="container-fluid form-validate">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                </div>
                <div class="card-body">
                  <input class="form-control" type="hidden" value="<?= $typepropertys['Id']; ?>" id="Id" name="Id">
                  <div class="mb-3 row">
                    <label">Name</label>
                      <div class="col-sm-12">
                        <input class="form-control" type="text" value="<?= $typepropertys['Name']; ?>" id="Name" name="Name" autofocus>
                      </div>
                  </div>
                  <div class="card-footer text-end">
                    <div class="col-sm-9 offset-sm-3">
                      <button class="btn btn-primary" type="submit" onclick="updateData()">Submit</button>
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


</body>

</html>

<script>
  function updateData() {
    var Id = $('#Id').val();
    var Name = $('#Name').val();
    $.ajax({
      type: 'POST',
      url: '../../api/type/update.php',
      data: {
        Id: Id,
        Name: Name
      },
      success: function(response) {
        console.log(response.success);
        alert("Role Updated");
        window.location.href = './index.php';
      }
    });
  }
</script>

<?php
include pathof('includes/scripts.php');
?>