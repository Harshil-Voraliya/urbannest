<?php
require '../../includes/init.php';

// Initialize index counter
$index = 0;

// Query to select cities where IsDeleted = 1
$cities = select("SELECT City.Id, City.Name, State.Name AS StateName FROM State INNER JOIN City ON City.StateId = State.Id WHERE City.IsDeleted = 1");

include pathof('includes/header.php');
?>

<body>
  <link rel="stylesheet" href="../../assets/css/button.css">

  <!-- Tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- Tap on top ends-->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  <!-- Loader ends-->
  <!-- Page wrapper start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include pathOf('includes/navbarTop.php') ?>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include pathOf('includes/sidebar.php'); ?>
      <!-- Page Sidebar Ends-->

      <!-- Main content starts-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3>City</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">City</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <a class="btn btn-outline-primary" href="./add.php">Add</a>
            </div>
            <div class="card-body">
              <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-9">
                  <thead>
                    <tr>
                      <th>SR No.</th>
                      <th>City Name</th>
                      <th>State Name</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($cities as $city) { ?>
                      <tr>
                        <td><?= ++$index ?></td>
                        <td><?= $city['Name'] ?></td>
                        <td><?= $city['StateName'] ?></td>
                        <form action="./update.php" method="post">
                          <td>
                            <input type="hidden" value="<?= $city['Id'] ?>" name="Id">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                          </td>
                        </form>
                        <td>
                          <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $city['Id'] ?>)">Delete</button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>SR No.</th>
                      <th>City Name</th>
                      <th>State Name</th>
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
      <!-- Main content ends-->


  <script>
    // Function to delete city
    function deleteData(Id) {
      $.ajax({
        url: "../../api/city/delete.php",
        method: "POST",
        data: { Id: Id },
        success: function(response) {
          alert("City Deleted Successfully");
          window.location.href = "index.php";
        }
      });
    }
  </script>

</body>

</html>

<?php include pathof('includes/scripts.php'); ?>
