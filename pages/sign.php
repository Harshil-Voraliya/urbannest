<?php
require '../includes/init.php';
include pathOf('includes/header.php');
?>

<!-- Login & Register Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row justify-content-center g-0">
            <div class="col-md-6 col-lg-5 col-12 user-login-register bg-light p-4">
                <div class="login-register-title text-center">
                    <h2 class="title">Register</h2>
                    <p class="desc">If you don’t have an account, register now!</p>
                </div>
                <div class="login-register-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="registerEmail">User Name<abbr class="required">*</abbr></label>
                                <input type="text" id="UserName" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="registerEmail">Email address <abbr class="required">*</abbr></label>
                                <input type="email" id="Email" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="registerEmail">Password<abbr class="required">*</abbr></label>
                                <input type="password" id="Password" class="form-control">
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-dark btn-outline-hover-dark w-100" onclick="insertData()">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login & Register Section End -->

<script>
    function insertData() {
        var UserName = $('#UserName').val();
        var Email = $('#Email').val();
        var Password = $('#Password').val();

        $.ajax({
            url: '../admin/api/client/sign.php',
            type: 'POST',
            data: {
                UserName: UserName,
                Email: Email,
                Password: Password
            },
            success: function (response) {
                console.log(response.success);
                alert("Client Registered");
                window.location.href = './login.php';
            }
        });
    }
</script>

<?php
include pathOf('includes/scripts.php');
include pathOf('includes/pageend.php');
?>