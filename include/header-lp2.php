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

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="jMhckwVwMUuv1FntTgocqhf3Yr5JE7Gzo7wIiDlu">
    <link rel="icon" href="assets/publishing-new/images/favicon.ico" type="">
    <link rel="stylesheet" type="text/css" href="assets/publishing-new/css/css-all.css">
    <link rel="stylesheet" type="text/css" href="assets/publishing-new/css/css-style.css">
    <link rel="stylesheet" type="text/css" href="assets/publishing-new/css/css-style-web.css">
    <link rel="stylesheet" type="text/css" href="assets/publishing-new/css/css-responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <title>Book publishing services at 50% discount | The Native Publishers </title>
    <meta name="description"
        content="We are among the top book publishing companies. Our team of book publishers helps you to publish your book on Amazon, Kindle & Barnes & Noble at affordable rates. ">
        <meta name="keywords" content="Best Book Publishing Services, publish a book on amazon, Best self-publishing services, Get you book published now, Professional Book Publishers, Self-Publish Your Book">
    <!-- Google Tag Manager -->
    <!-- <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MNNJJ5J');
    </script> -->
    <!-- End Google Tag Manager -->
    <style>
        input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
    </style>

</head>

<body>

<!--<div class="marquee" style="background-color: #00000 !imporntant;position: fixed;z-index: 9999;">-->
<!--    <p class="text-center text-light" style="background: #000;font-size: 24px;"><marquee>🏷️ Sign Up Now and Avail a flat 60% discount on all services.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🏷️ Sign Up Now and Avail a flat 60% discount on all services.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🏷️ Sign Up Now and Avail a flat 60% discount on all services.</marquee></p>-->
<!--</div>-->
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNNJJ5J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="javascript:;" class="logo">
                        <img src="assets/publishing-new/images/footerlogo.png" alt="" />
                    </a>
                </div>
                <div class="col-md-9">
                    <nav class="navbar-expand-md main-menu">
                        <ul class="menu">
                            <li class="phone">
                                <i class="fas fa-phone"></i>
                                <a
                                    href="tel:+1(628) 256-4002">+1(628) 256-4002</a>
                            </li>
                            <li class="msg">
                                <a href="javascript:.html" name="0" data-fancybox="" data-src="#popupform"
                                    class="btn btn-dark open-popup various" id="autopop">
                                    Get Started
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
