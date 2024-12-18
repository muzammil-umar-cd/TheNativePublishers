<?php 
session_start();

// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the current URL (including query parameters)
$currentURL = $_SERVER['REQUEST_URI'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <title>Get Your Book Published In No Time | The Native Publishers </title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Metrophobic&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../favicon.ico" size="32x32">
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <style>
     .swal2-container{
         z-index: 9999;
     }
 </style>
</head>

<body>
    
<style>
    .logo img{
        width: 50% !important;
    }
</style>
<!--<div class="marquee" style="background-color: #00000 !imporntant;position: fixed;z-index: 9999;">-->
<!--    <p class="text-center text-light" style="background: #000;font-size: 24px;"><marquee>🏷️ Sign Up Now and Avail a flat 60% discount on all services.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🏷️ Sign Up Now and Avail a flat 60% discount on all services.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🏷️ Sign Up Now and Avail a flat 60% discount on all services.</marquee></p>-->
<!--</div>-->
    <header class="header_area">
        <div class="container">
            <div class="navigation_area">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12">
                        <div class="logo">
                            <a href="https://thenativepublishers.com/publishing-lp">
                                <img src="assets/images/logo.png" alt="The Native Publishers ">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="nmb-cht">
						<ul>
						<li class="first"><a href="tel:+16282564002"><span> Call Us </span>  For Support: +1(628) 256-4002 </a></li>
						<li class="last"><a href="javascript:;" class="grn-btn LineAnimationButton loginUp open-popup">Let’s Get Started</a>
						</li>
						</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
