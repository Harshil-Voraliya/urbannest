<?php
require '../../includes/init.php';

$index = 0;
$checkouts = select("SELECT * FROM Checkout");

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
                                <h3>City</h3>
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
                        <div class="card-body">
                            <div class="table-responsive theme-scrollbar">
                                <table class="display" id="basic-9">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($checkouts as $checkout) { ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $checkout['FirstName'] ?></td>
                                                <td><?= $checkout['LastName'] ?></td>
                                                <td><?= $checkout['Phone'] ?></td>
                                                <td><?= $checkout['Email'] ?></td>
                                                <td><?= $checkout['Address'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
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
    <script>
        function deleteData(Id) {
            if (confirm("sure you want to delete this City"));
            $.ajax({
                url: "../../api/city/delete.php",
                method: "POST",
                data: {
                    Id: Id
                },

                success: function(response) {
                    console.log(response);
                    if (response.success != true)
                        return alert('City Deleted');

                    window.location.href = './index.php';
                }
            })
        }
    </script>
</body>

</html>

<?php
include pathof('includes/scripts.php');
?>