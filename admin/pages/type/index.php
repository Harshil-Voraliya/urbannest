<?php
require '../../includes/init.php';

$index = 0;
$typepropertys = select('SELECT * FROM PropertyType');
include pathof('includes/header.php');
?>


</style>

  <link rel="stylesheet" href="../../assets/css/button.css">
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
                  <h3>Property Type</h3>
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
                          <?php foreach($typepropertys as $typeproperty) { ?>
                          <tr>
                            <td><?= $index += 1 ?></td>
                            <td><?= $typeproperty['Name'] ?></td>
                            <form action="./update.php" method="post">
                                <td>
                                    <input type="hidden" value="<?= $typeproperty['Id'] ?>" id="Id" name="Id">
                                    <button type="submit" class="btn btn-outline-success">Update</button>


                                </td>
                            </form>
                            <td>
                                <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $typeproperty['Id'] ?>)">Delete</button>
                            </td>
                          </tr>
                          <?php }?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SR No.</th>
                            <th>Username</th>
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
    </div>
  </body>
  <script>
      function deleteData(Id) {
        if(confirm("Are you sure you want to delete this role?")) {
            $.ajax({
                url: '../../api/type/delete.php',
                type: 'POST',
                data: {
                    Id: Id
                },
                success: function(response) {
                  if(response == response.success) {
                    alert("Type deleted successfully");
                    location.reload();
                  } else {
                    alert("Type not deleted");
                  }
                }
            });
        }
      }
    </script>
</html>

<?php
include pathof('includes/scripts.php');
?>