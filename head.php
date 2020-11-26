<!DOCTYPE HTML>
<html>

<head>
    <title>FAM</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <script src="vendor/bootstrap/css/bootstrap.min.css"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <style>
    .no-js #loader {
        display: none;
    }

    .js #loader {
        display: block;
        position: absolute;
        left: 100px;
        top: 0;
    }

    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif) center no-repeat #fff;
    }
    </style>
    <script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
</head>

<body id="top">

    <div class="se-pre-con"></div>

    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
        <img src="images/icon.png" height="100%">
        <h1><a href="index.php" style="padding-left: 50px;">F.A.M</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="left-sidebar.php">Info</a></li>
                <li><a href="right-sidebar.php">CoronaVirus</a></li>
                <li><a href="no-sidebar.php">Contact</a></li>
            </ul>
        </nav>
    </header>