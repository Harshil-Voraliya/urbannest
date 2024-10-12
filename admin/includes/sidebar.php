<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar with Icons</title>
    <!-- Include Font Awesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Your CSS -->
    <style>
        /* Your custom styles here */
    </style>
</head>

<style>
    .logo {
        width: 150px;
        margin-left: 45px;
        /* height: 200px; */
        /* margin-bottom: 500px; */
    }

    /* .white{ */
    /* color: white: */
    /* } */
</style>

<body>
    <div class="sidebar-wrapper">
        <div>
            <div class="logo-wrapper">
                <a href="#">
                    <img class="img-fluid for-light logo " src="<?= urlOf('assets/images/logo/black.png') ?>" alt="">
                </a>
                <div class="back-btn"><i data-feather="grid"></i></div>
                <!-- <div class="toggle-sidebar icon-box-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                </div> -->
            </div>
            <div class="logo-icon-wrapper">
                <a href="index.html">
                    <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
                </a>
            </div>
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn">
                            <div class="mobile-back text-end">
                                <span>Back</span>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </li>
                        <li class="pin-title sidebar-list">
                            <h6>Pinned</h6>
                        </li>
                        <hr>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('index.php') ?>">
                                <i data-feather="grid"></i>
                                <span class="lan-3">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/property/index.php') ?>">
                                <i data-feather="home"></i>
                                <span>Property</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/type/index.php') ?>">
                                <i data-feather="layers"></i>
                                <span>Property Type</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/state/index.php') ?>">
                                <i data-feather="map"></i>
                                <span>State</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/city/index.php') ?>">
                                <i data-feather="map-pin"></i>
                                <span>City</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/order/index.php') ?>">
                                <i data-feather="shopping-cart"></i>
                                <span>Order</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/payment/index.php') ?>">
                                <i data-feather="credit-card"></i>
                                <span>Payment</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/feedback/index.php') ?>">
                                <i data-feather="message-circle"></i>
                                <span>Feedback</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="<?= urlOf('pages/client/index.php') ?>">
                                <i data-feather="users"></i>
                                <span>Client</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- Include Feather Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <script>
        feather.replace(); // Initialize Feather icons
    </script>
</body>

</html>