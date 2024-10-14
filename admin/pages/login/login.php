<?php
require '../../includes/init.php';
?>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/icofont.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/themify.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/flag-icon.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/feather-icon.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/scrollbar.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/chartist.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/prism.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/vector-map.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/style.css') ?>">
    <link id="color"      rel="stylesheet" href="<?= urlOf('assets/css/color-1.css') ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/responsive.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/datatables.css') ?>">
  <body>

  <style>
    .logo{
      height: 250px;
    }
  </style>

    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              <div><a class="logo" href="index.html"><img style="height:350px;" src="<?= urlOf('assets/images/logo/white.png')?>" alt="looginpage"></a></div>
              <div class="login-main"> 
                  <h4 class="text-center">Sign in to account</h4>
                  <p class="text-center">Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">User Name</label>
                    <input class="form-control" type="text" id="Username" name="Username" autofocus>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="Password" name="Password" autofocus>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="button" onclick="sendData()">Sign in</button>
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
        var data = {
            Username: $('#Username').val(),
            Password: $('#Password').val()
        }

        $.post('../../api/login/login.php', data, function (response) {
            console.log(response);
            if (response.success !== true)
                return;

            window.location.href = '../../index.php';
        });
    }
</script>
<?php
include pathof('includes/scripts.php');
?>