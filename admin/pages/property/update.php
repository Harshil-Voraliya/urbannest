<?php
require '../../includes/init.php';

$types = select("SELECT * FROM PropertyType");
$cities = select("SELECT * FROM City");
$states = select("SELECT * FROM State");

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
                                    <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item "> Property </li>
                                    <li class="breadcrumb-item active"> Update Property </li>

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
                                        <label class="form-label" for="validationCustom04">Type</label>
                                        <select class="form-select" id="TypeId" name="TypeId">
                                            <?php foreach ($types as $type): ?>
                                                <option value="<?= $type['Id'] ?>"><?= $type['Name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="form-label">City</label>
                                        <select class="form-select" id="CityId" name="CityId">
                                            <?php foreach ($cities as $citie): ?>
                                                <option value="<?= $citie['Id'] ?>"><?= $citie['Name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="form-label">State</label>
                                        <select class="form-select" id="StateId" name="StateId">
                                            <?php foreach ($states as $state): ?>
                                                <option value="<?= $state['Id'] ?>"><?= $state['Name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Name</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="PropertyName" name="PropertyName">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Address</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="Address" name="Address">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Sqft</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="number" id="Sqft" name="Sqft">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Description</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="Description" name="Description">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Price</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="number" id="Price" name="Price">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Image</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="file" id="Image" name="Image">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Second Image</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="file" id="Image2" name="Image2">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Third Image</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="file" id="Image3" name="Image3">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Fourth Image</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="file" id="Image4" name="Image4">
                                            </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label">Fifth Image</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="file" id="Image5" name="Image5">
                                            </div>
                                    </div>

                                    <div class="card-footer text-end">
                                        <div class="col-sm-9 offset-sm-3">
                                            <button class="btn btn-outline-primary" type="submit" onclick="sendData()">Submit</button>
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
        function sendData() {
            var form = new FormData();
            form.append('TypeId', $('#TypeId').val());
            form.append('CityId', $('#CityId').val());
            form.append('StateId', $('#StateId').val());
            form.append('PropertyName', $('#PropertyName').val());
            form.append('Address', $('#Address').val());
            form.append('Sqft', $('#Sqft').val());
            form.append('Description', $('#Description').val());
            form.append('Price', $('#Price').val());
            form.append('Image', $('#Image')[0].files[0]);
            form.append('Image2', $('#Image2')[0].files[0]);
            form.append('Image3', $('#Image3')[0].files[0]);
            form.append('Image4', $('#Image4')[0].files[0]);
            form.append('Image5', $('#Image5')[0].files[0]);

            $.ajax({
                url: '../../api/property/insert.php',
                method: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
                        $("#success").modal('show');
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    },
                    error: function(response) {
                        $("#success").modal('show');
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
            })
        }
    </script>
</body>

</html>

<?php
include pathof('includes/scripts.php');
?>