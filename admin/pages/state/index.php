<?php
require '../../includes/init.php';

$index = 0;
$states = select('SELECT * FROM state WHERE IsDeleted = 1');
include pathof('includes/header.php');
?>

<body>
  <link rel="stylesheet" href="../../assets/css/button.css">
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
                <h3>State</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item"> State</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <a class="btn btn-outline-primary" href="./add.php">Add</a><span>
            </div>
            <div class="card-body">
              <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-9">
                  <thead>
                    <tr>
                      <th>SR No.</th>
                      <th>Name</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($states as $state) { ?>
                      <tr>
                        <td><?= $index += 1 ?></td>
                        <td><?= $state['Name'] ?></td>
                        <form action="./update.php" method="post">
                          <td>
                            <input type="hidden" value="<?= $state['Id'] ?>" id="Id" name="Id">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                          </td>
                        </form>
                        <td>
                          <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $state['Id'] ?>)">Delete</button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SR No.</th>
                      <th>Name</th>
                      <th>Update</th>
                      <th>Delete</th>
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

</body>
<script>
  function deleteData(Id) {
    $.ajax({
      url: "../../api/state/delete.php",
      method: "POST",
      data: {
        Id: Id
      },

      success: function(response) {
        alert("State Deleted Successfully");
        window.location.href = "index.php";
      }
    })
  }
</script>

</html>

<?php
include pathof('includes/scripts.php');
?>