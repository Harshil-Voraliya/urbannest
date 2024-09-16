<?php
require '../includes/init.php';
include pathOf('includes/header.php');
?>

<body>
    <!-- Login & Register Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-12 user-login-register bg-light p-4">
                <div class="login-register-title text-center">
                    <h2 class="title">Login</h2>
                    <p class="desc">Great to have you back!</p>
                </div>
                <div class="login-register-form">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="email" class="form-control" placeholder="Username or email address" id="UserName">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-12 mb-3">
                            <input type="password" class="form-control" placeholder="Password" id="Password">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-12 text-center mb-3">
                            <button class="btn btn-dark btn-outline-hover-dark w-100" onclick="sendData()">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login & Register Section End -->

<script>
    function sendData() {
        var data = {
            UserName: $('#UserName').val(),
            Password: $('#Password').val()
        }

        $.post('../admin/api/client/login.php', data, function (response) {
            console.log(response);
            if (response.success !== true)
                return;

            window.location.href = '../index.php';
        });
    }
</script>

<?php
include pathOf('includes/scripts.php');
include pathOf('includes/pageend.php');
?>