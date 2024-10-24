<?php
require '../../includes/init.php';
$index = 0;
// $propertydetails = select("SELECT Propertydetails.Id, Propertydetails.PropertyName, Propertydetails.Address, Propertydetails.Sqft, Propertydetails.Description, PropertyType.Name AS 'PropertyTypeName', City.Name AS 'CityName', State.Name AS 'StateName' FROM PropertyType INNER JOIN Propertydetails ON Propertydetails.TypeId = PropertyType.Id INNER JOIN City ON Propertydetails.CityId = City.Id INNER JOIN State ON Propertydetails.StateId = State.Id");
$propertydetails = select("SELECT * FROM PropertyDetails WHERE IsDeleted = 1");

include pathof('includes/header.php');
?>

<body>
  <link rel="stylesheet" href="../../assets/css/button.css">
  <style>
    .product-img img {
      max-width: 100%;
      /* Make image responsive */
      height: auto;
      /* Maintain aspect ratio */
    }
  </style>
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
      <?php include pathOf('includes/sidebar.php') ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3>Property</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">Property</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid product-wrapper">
          <div class="product-grid">
            <div class="feature-products">
              <div class="row">
                <div class="col-md-12">
                  <div class="pro-filter-sec">
                    <div class="product-sidebar">
                      <h6 class="mb-0 f-w-600"><a class="btn btn-outline-primary" href="./add.php">Add</a></h6>
                      <br><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <?php foreach ($propertydetails as $propertydetail) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> <!-- Each card occupies 3 columns on large screens (4 in a row) -->
                  <div class="card">
                    <input type="hidden" value="<?= $propertydetail['Id'] ?>">
                    <div class="product-box">
                      <div class="product-img">
                        <img class="img-fluid" src=<?= urlOf('assets/images/uploads/') . $propertydetail['ImageFileName'] ?> alt="">
                      </div>
                      <div class="product-details">
                        <a href="product-page.html">
                          <h4><?= $propertydetail['PropertyName'] ?></h4>
                        </a>
                        <p><?= $propertydetail['Address'] ?></p>
                        <div class="product-price"><?= $propertydetail['Price'] ?></div>

                        <!-- Wrapping Update and Delete buttons inside a flexbox container -->
                        <div class="d-flex justify-content-between">
                          <form action="./update.php" method="post">
                            <input type="hidden" name="Id" id="Id" value="<?= $propertydetail['Id'] ?>">
                            <button type="submit" class="btn btn-outline-success">
                              Update
                            </button>
                          </form>
                          <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $propertydetail['Id'] ?>)">
                            Delete
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
    </div>
  </div>

  <script>
    function deleteData(Id) {
      if (confirm("Are you sure you want to delete this Property?")) {
        $.ajax({
          url: "../../api/property/delete.php",
          method: "POST",
          data: {
            Id: Id
          },
          success: function(response) {
            alert("City Deleted Successfully");
            window.location.href = "index.php";
          }
        });
      }
    }
  </script>

  <?php
  include pathof('includes/scripts.php');
  ?>
