<!doctype html>
<html class="no-js" lang="zxx">

    <?php include './partials/head.php'?>

<body>
    <!--********************************
    Code Start From Here 
	******************************** -->

    <?php include './partials/preloader.php'?>

    <!--==============================
    Search
    ==============================-->
    <?php include './partials/popup-box.php'?>

    <?php 
        if (isset($lightbox) && $lightbox === true) {
            include './partials/lightbox.php';
        }
    ?>

    <!--==============================
    SideMenu
    ==============================-->
    <?php include './partials/sidemenu.php'?>

    <!--==============================
    Mobile Menu
    ============================== -->
    <?php include './partials/mobile-menu.php'?>

    <!--==============================
	Header Area
    ==============================-->
    <?php 
        if (!isset($header) || $header === true) {
            include './partials/header.php';
        } elseif ($header === 'header2') {
            include './partials/header2.php';
        }
        // else case (like false or 'none') will include nothing
    ?>

    <!--==============================
    Breadcumb
    ============================== -->
    <?php 
        if (!isset($breadcrumb)) {
            include './partials/breadcrumb.php';
        }
    ?>