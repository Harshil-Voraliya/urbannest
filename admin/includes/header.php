<?php

$url = urlOf('pages/login/login.php');
if (!isset($_SESSION['LoggedIn'])) {
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 16:22:40 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= urlOf('assets/images/logo/black.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= urlOf('assets/images/logo/black.png') ?>" type="image/x-icon">
    <title>Urban Nest</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
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
    <link id="color" rel="stylesheet" href="<?= urlOf('assets/css/color-1.css') ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/responsive.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/datatables.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/select2.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/owlcarousel.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= urlOf('assets/css/vendors/range-slider.css') ?>">
</head>