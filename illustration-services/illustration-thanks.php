<?php
session_start();

if($_SESSION['api_code_executed'] == false){
    
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : '-';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '-';
    $phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '-';
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '-';
    $ip_address = isset($_SESSION['ip_address']) ? $_SESSION['ip_address'] : '-';
    $city = isset($_SESSION['city']) ? $_SESSION['city'] : '-';
    $country = isset($_SESSION['country']) ? $_SESSION['country'] : '-';
    $internet_connection = isset($_SESSION['internet_connection']) ? $_SESSION['internet_connection'] : '-';
    $zipcode = isset($_SESSION['zipcode']) ? $_SESSION['zipcode'] : '-';
    $region = isset($_SESSION['region']) ? $_SESSION['region'] : '-';
    $Pageurl = isset($_SESSION['url']) ? $_SESSION['url'] : '-';
    
    $api_key = 'f130432e28c4d8a311f5e23239491c4b36bd54721ff5ac53c1759eddb8bee0e9'; // replace this with your API key
        
    // Set the API endpoint URL and data to be sent
    $url = 'https://securepay.designtechpro.com/brand-leads-store';
    $data = array(
      'brand_name' => 'TheNativePublishing',
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'service' => 'E-Book',
      'message' => $message,
      'url' => $Pageurl,
      'ip_address' => $ip_address,
      'city' => $city,
      'country' => $country,
      'internet_connection' => $internet_connection,
      'zipcode' => $zipcode,
      'region' => $region
    );
    
    $jsonData = json_encode($data);
    
    // Set the cURL options
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'X-API-TOKEN:' . $api_key
    )
    );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_HTTPHEADER, array('X-CSRF-Token: ' . csrf_token()));
    
    // Execute cURL request
    $response = curl_exec($curl);
    $responseData = json_decode($response, true);
    
    
    $_SESSION['api_code_executed'] = true;
    
    // Close cURL
    curl_close($curl);
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Creative Illustration Services - The Native Publishers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" href="./bifc/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/accordian-jquery-ui.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-web.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/responsive-web.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icomo.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="shortcut icon" href="images/favicon.webp">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <style>
    ul.book-cover li {
        display: inline-block;
        width: 48%;
        margin: 0 0 15px;
    }
    
    img.book-01 {
        margin: -50px 0 0;
    }
    
    .web-slider h1 {
        font-weight: 700;
        margin-top: 0;
        width: unset;
        font-size: 55px;
        line-height: 60px;
    }
    
    .bnr-form-st-new .mainformtop {
        width: 620px;
        margin-left: 0;
        padding: 20px 15px;
        background: #30313138;
        border-radius: 8px;
    }
    
    .mainformtop {
        background: #434a4dd9;
        /*    width: 400px;*/
        /*    margin-left: 55px;*/
        border-radius: 20px;
        /*    margin-top: 22px;*/
        position: relative;
        z-index: 1;
    }
    
    .bnr-form-st-new .mainformtop .topformsv {
        width: 100%;
        padding: 10px 10px;
        background: transparent;
        text-align: left;
    }
    
    .mainformtop .topformsv {
        padding: 20px 20px;
        text-align: center;
        background: #313232;
        border-radius: 20px;
    }
    
    .bnr-form-st-new .mainformtop h3 {
        margin: 0;
        padding-bottom: 10px;
        line-height: normal;
        font-weight: bold;
    }
    
    .mainformtop .topformsv h3 {
        color: #fff;
        font-size: 30px;
        text-transform: uppercase;
    }
    
    .bnr-form-st-new .mainformtop h3 span {
        color: #fa690c;
        font-weight: bold;
    }
    
    .banner-side-img img {
        animation: mymove 5s infinite;
    }
    
    .get_contact_deal {
        width: auto !important;
    }
    
    .bnr-form-st-new .mainformtop form {
        display: block;
        padding: 0;
    }
    
    .mainformtop form {
        padding: 20px 20px;
    }
    
    .mainformtop .banfield {
        margin: 0;
        width: 100%;
        margin-right: 6px;
    }
    
    .mainformtop .banfield {
        width: auto;
        border: 0;
        height: auto;
    }
    
    .mainformtop .banfield {
        margin-bottom: 10px;
        /*    border-bottom: 1px solid #aeaeae;*/
    }
    
    .mainformtop input,
    .bnr-form-st-new .mainformtop textarea {
        background: #fff;
        padding: 9px 10px;
        height: auto;
        border-radius: 4px;
    }
    
    .mainformtop .banfield input {
        height: 50px;
        border: #f9f9f9;
        background: transparent;
    }
    
    .first_input input {
        margin: 0 0 12px 0;
    }
    
    .banfield input {
        width: 100%;
        height: 60px;
        border: 2px solid #000000;
        border-radius: 10px;
        padding: 0 0px;
        color: #fff;
        font-size: 15px;
        font-weight: 400;
    }
    
    .mainformtop .banfield input {
        height: 50px;
        border: #f9f9f9;
        background: #fff;
        color: #000;
        font-weight: 800;
        padding: 0 10px 0;
    }
    
    input.sub-btn-chbk:hover {
        background: #fa690c !important;
    }
    
    .section-padding {
        padding: 50px 0 20px !important;
    }
    
    .top-padding {
        padding: 50px 0 0 !important;
    }
    
    .testimonials_sect {
        text-align: unset !important;
        padding: 0 !important;
    }
    
    .contact_home h2 {
        visibility: visible !important;
    }
    
    .contact_home {
        background: #f7d208 !important;
    }
    
    .number-page {
        animation: blinkingText 1.2s infinite;
    }
    
    @keyframes blinkingText {
        0% {
            background: #fa690c;
            color: #fff;
        }
        100%,
        49% {
            background: #000000;
            color: #fff;
        }
        60% {
            background: #fa690c;
            color: #fff;
        }
        99% {
            background: #000000;
        }
    }
    
    .display-wrap {
        display: none !important;
    }
    
    @media(max-width:767px) {
        .display-wrap {
            display: block !important;
            padding: 10px 0;
            width: 50%;
            margin: auto;
            border-radius: 32px;
        }
        .slef_published_sec_m .slick-dots li button {
            border-radius: 50px;
            width: 10px;
            height: 10px;
            border: 1px solid #000
        }
        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: #000
        }
        .slef_published_sec_m .slick-dots li.slick-active button {
            background-color: #000
        }
        .live-views {
            display: none;
        }
        .btn_banner {
            margin: 33px auto 0;
        }
        .live-view-mbl {
            display: none;
        }
        .list-process ol li em,
        .list-process ol li span {
            margin-top: 59px;
        }
        .list-process ol li:before {
            left: 0;
        }
        .list-process ol li:after {
            left: 0;
        }
        .list-process ol {
            padding: 0 0 0 15px;
        }
        /*.list-process ol li:before {*/
        /*    display : none;*/
        /*}*/
        /*.list-process ol li:after {*/
        /*       display : none;*/
        /*}*/
    }
    </style>
    <style>
    .logo {
        width: 197px;
        margin: -45px 0 0 0;
    }
    
    .new-popupform-main.active {
        backdrop-filter: unset !important;
        background: #ffffff85;
    }
    
    .overlay-bg.over-bg-2 {
        backdrop-filter: unset !important;
        background: #ffffff85 !important;
    }
    
    .overlay-bg.over-bg-2 {
        display: none !important;
    }
    
    .slick-slide {
        height: unset;
    }
    
    @media only screen and (max-width: 800px) and (min-width: 320px) {
        .logo {
            width: 100%;
            margin: -60px 0 0;
        }
    }
    </style>
    <style>
    .slef_published_sec_m {
        background: #f1f1f1;
    }
    
    .slick-slide {
        height: unset;
    }
    
    .logo {
        margin: -40px 0 0 0;
        /*filter: invert(1);*/
    }
    
    @media only screen and (max-width: 800px) and (min-width: 320px) {
        .logo {
            margin: -44px 60px 0;
            width: 65%;
        }
        .navbar-header {
            display: flex;
            justify-content: center;
        }
    }
    
    .logo {
        margin: auto !important;
    }
    
    .logo-ftr {
        /*filter: invert(1);*/
    }
    </style>
</head>

<body>
    <style>
    .easter img {
        max-width: 50%;
    }
    
    .easter {
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
        animation: swinging 3.5s ease-in-out forwards infinite;
        position: absolute;
        justify-items: legacy;
        top: -25px;
        z-index: 9;
        width: 251px;
        left: 65px;
    }
    
    @keyframes swinging {
        0% {
            transform: rotate(10deg);
        }
        50% {
            transform: rotate(-5deg)
        }
        100% {
            transform: rotate(10deg);
        }
    }
    /*santa*/
    
    #sticky-Left-Banner {
        animation: MoveUpDown 3s linear infinite;
        position: fixed;
        bottom: 3%;
        z-index: 12;
        /* -webkit-animation: slideIn 2s forwards; */
        -moz-animation: slideIn 2s forwards;
        /* animation: slideIn 1s forwards; */
        -webkit-animation: mover 1s infinite alternate;
        animation: mover 1s infinite alternate;
    }
    
    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-10px);
        }
    }
    
    @keyframes mover {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-10px);
        }
    }
    
    .santa img {
        width: 12%;
        /*margin: -330px 0 0 !important;*/
    }
    /*santa*/
    
    @media only screen and (max-width: 800px) and (min-width: 320px) {
        .easter {
            -webkit-transform-origin: 50% 0 !important;
            transform-origin: 50% 0;
            -webkit-animation: swinging 3.5s ease-in-out forwards infinite !important;
            animation: swinging 3.5s ease-in-out forwards infinite;
            position: absolute;
            justify-items: legacy;
            top: -3px;
            z-index: 9;
            width: 251px;
            left: 4px;
        }
        @keyframes swinging {
            0% {
                transform: rotate(10deg);
            }
            50% {
                transform: rotate(-5deg)
            }
            100% {
                transform: rotate(10deg);
            }
        }
        .easter img {
            max-width: 25%;
        }
        .santa img {
            width: 30%;
        }
        section.bg-main {
            padding: 12em 0 3em !important;
        }
    }
    </style>
    <div id="sticky-Left-Banner" style></div>
    <section class="inner_banner child_banner">
        <div class="container">
            <div class="row">
                <div class="banner_boxes_mm">
                    <div class="col-sm-12">
                        <div class=" text-center d-flex jusitfy-content-center">
                            <a href="https://thenativepublishers.com/illustration-services/" class="mb-5"> <img src="/images/logo-dark.png" width="300" alt="logo"> </a>
                            <h1 class="title_m clr_black_m wow fadeInUp text-center" style="padding:20px;" data-wow-duration="2s">Thank You For Availing <br/>The 50% Discount!!!</h1>
                            <p class="para_m clr_4_cool wow fadeInUp" style="padding:15px;" data-wow-duration="3s"> ©thenativepublishers.com  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    .overlay-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        display: none;
        filter: blur(2px);
    }
    
    .overlay-bg.over-bg-2 {
        backdrop-filter: blur(6px);
        background: transparent;
        position: fixed;
    }
    
    .new-pop-form .submit-btn {
        font-size: 18px;
        width: 100%;
        padding: 15px 0px;
        background-color: #000000;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        width: 100%;
        margin: 10px 0 0 0px !important;
        font-weight: 700;
    }
    
    .new-pop-form .submit-btn {
        font-size: 18px;
        padding: 15px 0px;
        background: #fb2224;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        width: 100%;
    }
    
    .new-popupform-main.active {
        display: block;
    }
    
    .new-popupform-main {
        position: fixed;
        background-color: transparent;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: none;
    }
    
    .new-pop-form {
        position: absolute;
        width: 1049px;
        height: 679px;
        top: 0px;
        left: 225px;
        bottom: 0;
        right: 0;
        margin: auto;
        background: transparent;
        padding: 0px 0 0px 0;
        z-index: 99;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        background-size: cover;
    }
    
    .new-popupform-main .main-pop .col-md-12 {
        padding: 0;
    }
    
    .new-popupform-main h3 {
        font-size: 27px;
        margin: 31px 0 0 0;
        float: none;
        color: #000000;
        font-weight: bold;
        text-align: left;
        padding: 0 !important;
        filter: blur(0px);
    }
    
    .new-popupform-main h2 {
        font-size: 40px;
        margin: 10px 0 0 0;
        color: #080808;
        font-weight: 700;
    }
    
    .new-popupform-main h4 {
        font-size: 26px;
        margin: 8px 0 0 0;
        color: #000000;
        text-align: left;
        font-weight: 300;
    }
    
    .fspx-23 {
        font-size: 23px;
    }
    
    .fw-exbold {
        font-weight: 800 !important;
    }
    
    .ls-xsmall {
        letter-spacing: -2px;
    }
    
    .fc-red {
        color: #fb2224;
    }
    
    .tt-uppercase {
        text-transform: uppercase !important;
    }
    
    .new-popupform-main h6 {
        letter-spacing: 0;
        font-size: 45px;
        background: #4274fa;
        color: #fff;
        border-radius: 10px;
        padding: 10px 15px 5px 15px;
        text-align: left;
        position: relative;
        right: 0px;
        margin: 0px;
        float: right;
    }
    
    .fspx-20 {
        font-size: 20px;
        display: block;
    }
    
    .fspx-23 {
        font-size: 23px;
        margin-bottom: 10px;
    }
    
    .fw-normal {
        font-weight: 400 !important;
    }
    
    .new-popupform-main .main-pop {
        padding: 25px 10px 0 0;
    }
    
    .new-pop-form .no-thanks {
        text-decoration: underline;
        color: #666666;
    }
    
    .new-pop-form form .control-group {
        margin-bottom: 10px;
    }
    
    form .control-group {
        margin-bottom: 24px;
        position: relative;
    }
    
    .new-pop-form form .control-group input[type=text],
    .new-pop-form form .control-group input[type=text],
    .new-pop-form form .control-group input[type=tel],
    .new-pop-form form .control-group input[type=email],
    .new-pop-form form .control-group select,
    .new-pop-form form .control-group textarea {
        background-color: #fff;
        font-family: "Nunito", sans-serif;
        text-align: left;
    }
    
    .new-popupform-main form input[type=text],
    .new-popupform-main form input[type=tel],
    .new-popupform-main form input[type=email] {
        padding-left: 10px;
        min-height: 50px;
    }
    
    .new-popupform-main form input[type=text],
    .new-popupform-main form input[type=tel],
    .new-popupform-main form input[type=email] {
        color: #333333;
        padding: 10px;
        height: 44px;
        width: 100%;
        background: transparent;
        border: 1px solid #cccccc;
        box-shadow: none;
        -webkit-appearance: none;
        border-radius: 4px;
        font-family: "Nunito", sans-serif;
    }
    
    form .numberarea {
        width: auto;
        position: relative;
    }
    
    .new-pop-form .submit-btn {
        font-size: 18px;
        width: 100%;
        padding: 10px 0px;
        background-color: #ffffff;
        color: #000;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        width: 100%;
        margin: 10px 0 0 0px !important;
        font-weight: 700;
        text-transform: uppercase;
    }
    
    .new-pop-form .no-thanks {
        text-decoration: underline;
        color: #666666;
    }
    
    .new-popupform-main h6:before {
        position: absolute;
        content: "";
        left: -35px;
        top: 0px;
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-right: 45px solid #4274fa;
        border-bottom: 28px solid transparent;
    }
    
    .float-left {
        float: left;
    }
    
    .lh-medium {
        line-height: 1.2;
    }
    
    .lh-medium {
        line-height: 1.2;
    }
    
    .ta-left {
        text-align: left;
    }
    
    .fw-exbold {
        font-weight: 800 !important;
    }
    
    .mtpx-60 {
        margin-top: 60px;
    }
    
    .new-pop-form .close-btn {
        top: -10px;
        position: absolute;
        /* border: 5px solid #fff; */
    }
    
    .pop-form-txt-side {
        position: absolute;
        left: 30px;
        transform: rotate(-90deg);
        bottom: 0;
        top: 0;
        height: 113%;
        width: 55%;
        z-index: -1;
    }
    
    .pop-form-txt-side h4 {
        font-size: 19px;
        font-weight: 300;
    }
    
    .pop-form-txt-side h2 {
        text-align: left;
        font-size: 36px;
    }
    
    div#new-pop-form textarea {
        height: 140px;
    }
    
    .popup-new-imgs img {
        z-index: 1;
        width: 125%;
        position: relative;
        left: -170px;
    }
    
    .popup-txt-form-new {
        position: relative;
        z-index: 2;
    }
    
    .popup-new-imgs:before {}
    
    .popup-new-imgs {
        position: relative;
    }
    
    .popup-new-imgs:before {
        content: '';
        background: #a22425;
        position: absolute;
        top: -70px;
        right: 185px;
        bottom: 0;
        margin: auto;
        height: 500px;
        width: 360px;
        border-radius: 6px;
    }
    
    .new-pop-form .close-btn img {
        width: auto;
        left: 33px;
    }
    
    @media(max-width: 1600px) {
        .pop-form-txt-side {
            position: absolute;
            left: 30px;
            transform: rotate(-90deg);
            bottom: 0;
            top: 0;
            height: 114%;
            width: 50%;
            z-index: -1;
        }
        div#new-pop-form textarea {
            height: 92px;
        }
    }
    
    @media(max-width: 1180px) {
        .new-pop-form {
            width: 950px;
            height: 620px;
        }
        .new-pop-form .close-btn img {
            width: auto;
            left: 5px;
            top: -20px;
        }
        .new-popupform-main h3 {
            font-size: 22px;
        }
        div#new-pop-form form {
            padding: 20px 30px;
        }
        div#new-pop-form form {
            margin-top: 10px;
        }
        .new-popupform-main.active div#new-pop-form form {
            margin: 0 auto 0;
            border-radius: 0px 0px 6px 6px;
            padding-top: 10px;
            background: rgb(241 199 64 / 79%);
        }
    }
    
    @media(max-width: 991px) {
        .new-pop-form {
            position: absolute;
            width: 510px;
            height: 500px;
            top: 0px;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            /* background-image: url(../images/popup-bg2.png); */
            padding: 0px 0 0px 0;
            z-index: 99;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            background: #260868;
        }
        .new-popupform-main .col-sm-offset-4.col-sm-8 {
            max-width: 100%;
            width: 100%;
            margin: 0;
        }
        .new-popupform-main h3 {
            font-size: 30px !important;
        }
        .new-popupform-main h6 {
            font-size: 30px;
        }
        #flform input[type="text"],
        input[type="email"] {
            margin-bottom: 0px;
        }
        .new-pop-form .close-btn {
            width: 35px;
            height: 30px;
            display: block;
            position: absolute;
            top: 2px;
            right: 0;
            font-size: 18px;
            font-weight: 900;
            color: #080808;
            padding-top: 3px;
        }
    }
    
    @media(max-width: 767px) {
        .pop-form-txt-side {
            display: none;
        }
        .banner_boxes_mm .title_m {
            margin-top: 20px;
        }
        p.para_m br {
            display: none;
        }
        .popup-txt-form-new {
            background: rgb(241 199 64 / 79%);
            padding: 10px 20px;
        }
        .popup-new-imgs img {
            width: 112%;
            left: -28px;
            top: -185px;
        }
        .popup-new-imgs {
            position: absolute;
            top: -300px;
            width: 100%;
        }
        .popup-new-imgs:before {
            right: 0;
            left: -25px;
            width: 100%;
            top: -220px;
            height: 520px;
            background: #a22425;
            height: 520px;
        }
        .new-popupform-main h6:before {
            position: absolute;
            content: "";
            left: -20px;
            top: 0px;
            width: 0;
            height: 0;
            border-top: 0px solid transparent;
            border-right: 28px solid #4274fa;
            border-bottom: 28px solid transparent;
        }
        div#new-pop-form form {
            width: 100% !important;
        }
        .new-pop-form {
            position: absolute;
            width: 334px !important;
            height: 535px !important;
            background: transparent;
        }
        .new-popupform-main .new-pop-form h3 {
            font-size: 17px !important;
            margin-top: 4px;
            text-align: center;
            color: #000;
        }
        .new-pop-form .close-btn {
            top: -186px;
            right: 12px;
            height: 35px;
        }
        .new-popupform-main h6 {
            letter-spacing: 0;
            font-size: 21px;
            background: #4274fa;
            color: #fff;
            border-radius: 10px;
            padding: 3px 8px 5px 8px;
            text-align: left;
            position: relative;
            right: 0px;
            margin: 0px;
            float: right;
        }
        .new-pop-form .submit-btn {
            font-size: 18px;
            width: 100%;
            padding: 8px 0px;
        }
        div#new-pop-form {
            max-width: 100%;
            width: 100%;
            margin: 0;
            text-align: center;
            padding-top: 10px;
            position: relative;
        }
        .new-popupform-main h3 {
            font-size: 26px;
            margin: 31px 0 0 0;
            color: #ffffff;
            font-weight: 500;
        }
        .new-popupform-main h2 {
            font-size: 30px;
            margin: 10px 0 0 0;
            color: #ffffff;
            font-weight: 700;
        }
        .new-popupform-main h4 {
            font-size: 20px;
            margin: 8px 0 0 0;
            color: #000;
            font-weight: 700;
            text-align: center;
        }
        .chk-st-1 {
            display: inline-flex;
        }
    }
    
    div#new-pop-form {
        width: 100%;
        margin: 0 auto;
        display: table;
        text-align: center;
        padding-top: 70px;
        position: relative;
        z-index: 1;
    }
    
    div#new-pop-form form {
        width: 100%;
        margin: 20px auto 0;
        display: table;
        background: rgb(241 199 64 / 90%);
        padding: 30px 30px;
        border-radius: 6px;
        position: relative;
        z-index: 2;
    }
    
    @media (min-width:320px) and (max-width:767px) {
        .wow {
            animation-name: none !important;
            visibility: visible !important;
        }
        div#new-pop-form {
            width: 100%;
            margin: 0 auto;
            display: table;
            text-align: center;
            padding-top: 14px;
        }
    }
    </style>
    <div class="overlay-bg over-bg-2"></div>
    <div class="new-popupform-main">
        <div class="new-pop-form ta-center">
            <div id="new-pop-form" class="col-sm-12">
                <div class="pop-form-txt-side">
                    <h4> Fill This Form To Avail Special Discounts Of </h4>
                    <h2>Up To 50%!</h2> </div>
                <div class="col-sm-5">
                    <div class="popup-txt-form-new">
                        <h3>Looking For Professional Illustration Design Services</h3>
                        <h4>At Affordable Rates?</h4> </div>
                    <div class="clearfix"></div>
                    <form action="/sendmail/sendmail_illustration.php" method="POST" class="main-pop">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                        <input type="hidden" name="city" value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                        <input type="hidden" name="country" value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                        <input type="hidden" name="internet_connection" value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                        <input type="hidden" name="zipcode" value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                        <input type="hidden" name="region" value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                        <input type="hidden" name="url" value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                        
                        <div class="col-md-12">
                            <div class="control-group">
                                <input type="text" placeholder="Name" name="name" class="required" required> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="control-group">
                                <input type="email" name="email" class="required email" placeholder="Enter your email here" required /> </div>
                        </div>
                        <div class="col-md-12 phonecode">
                            <div class="control-group clearfix">
                                <div class="numberarea">
                                    <input type="tel" name="phone" id="phone" class="required" placeholder="Phone Number" required /> </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="control-group clearfix">
                                <div class="textarea_auto">
                                    <textarea class="form-control" name="message" placeholder="Talk about your project" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="control-group clearfix  ">
                                <input name="send_reserve_req" type="submit" class="btn btn-default pop_btn submit-btn fspx-23  ls-medium d-block w-100 fw-bold" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="popup-new-imgs"> <img src="popup-new-side-img.png">
                        <a href="javascript:;" class="close-btn ta-center cors-img"> <img src="cross-img.png"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <style>
    .overlay-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        display: none;
        filter: blur(2px);
    }
    
    .overlay-bg.over-bg-3 {
        backdrop-filter: blur(6px);
        background: transparent;
        position: fixed;
    }
    
    .new-pop-form .submit-btn {
        font-size: 18px;
        width: 100%;
        padding: 15px 0px;
        background-color: #000000;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        width: 100%;
        margin: 10px 0 0 0px !important;
        font-weight: 700;
    }
    
    .new-pop-form .submit-btn {
        font-size: 18px;
        padding: 15px 0px;
        background: #fb2224;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        width: 100%;
    }
    
    .new-popupform-main.active {
        display: block;
    }
    
    .new-popupform-main {
        position: fixed;
        background-color: transparent;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: none;
        backdrop-filter: blur(6px);
    }
    
    .new-pop-form {
        position: absolute;
        width: 1049px;
        height: 679px;
        top: 0px;
        left: 225px;
        bottom: 0;
        right: 0;
        margin: auto;
        background: transparent;
        padding: 0px 0 0px 0;
        z-index: 99;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        background-size: cover;
    }
    
    .new-popupform-main .main-pop .col-md-12 {
        padding: 0;
    }
    
    .new-popupform-main h3 {
        font-size: 27px;
        margin: 31px 0 0 0;
        float: none;
        color: #000000;
        font-weight: bold;
        text-align: left;
        padding: 0 !important;
        filter: blur(0px);
    }
    
    .new-popupform-main h2 {
        font-size: 40px;
        margin: 10px 0 0 0;
        color: #080808;
        font-weight: 700;
    }
    
    .new-popupform-main h4 {
        font-size: 26px;
        margin: 8px 0 0 0;
        color: #000000;
        text-align: left;
        font-weight: 300;
    }
    
    .fspx-23 {
        font-size: 23px;
    }
    
    .fw-exbold {
        font-weight: 800 !important;
    }
    
    .ls-xsmall {
        letter-spacing: -2px;
    }
    
    .fc-red {
        color: #fb2224;
    }
    
    .tt-uppercase {
        text-transform: uppercase !important;
    }
    
    .new-popupform-main h6 {
        letter-spacing: 0;
        font-size: 45px;
        background: #4274fa;
        color: #fff;
        border-radius: 10px;
        padding: 10px 15px 5px 15px;
        text-align: left;
        position: relative;
        right: 0px;
        margin: 0px;
        float: right;
    }
    
    .fspx-20 {
        font-size: 20px;
        display: block;
    }
    
    .fspx-23 {
        font-size: 23px;
        margin-bottom: 10px;
    }
    
    .fw-normal {
        font-weight: 400 !important;
    }
    
    .new-popupform-main .main-pop {
        padding: 25px 10px 0 0;
    }
    
    .new-pop-form .no-thanks {
        text-decoration: underline;
        color: #666666;
    }
    
    .new-pop-form form .control-group {
        margin-bottom: 10px;
    }
    
    form .control-group {
        margin-bottom: 24px;
        position: relative;
    }
    
    .new-pop-form form .control-group input[type=text],
    .new-pop-form form .control-group input[type=text],
    .new-pop-form form .control-group input[type=tel],
    .new-pop-form form .control-group input[type=email],
    .new-pop-form form .control-group select,
    .new-pop-form form .control-group textarea {
        background-color: #fff;
        font-family: "Nunito", sans-serif;
        text-align: left;
    }
    
    .new-popupform-main form input[type=text],
    .new-popupform-main form input[type=tel],
    .new-popupform-main form input[type=email] {
        padding-left: 10px;
        min-height: 50px;
    }
    
    .new-popupform-main form input[type=text],
    .new-popupform-main form input[type=tel],
    .new-popupform-main form input[type=email] {
        color: #333333;
        padding: 10px;
        height: 44px;
        width: 100%;
        background: transparent;
        border: 1px solid #cccccc;
        box-shadow: none;
        -webkit-appearance: none;
        border-radius: 4px;
        font-family: "Nunito", sans-serif;
    }
    
    form .numberarea {
        width: auto;
        position: relative;
    }
    
    .new-pop-form .submit-btn {
        font-size: 18px;
        width: 100%;
        padding: 10px 0px;
        background-color: #ffffff;
        color: #000;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        width: 100%;
        margin: 10px 0 0 0px !important;
        font-weight: 700;
        text-transform: uppercase;
    }
    
    .new-pop-form .no-thanks {
        text-decoration: underline;
        color: #666666;
    }
    
    .new-popupform-main h6:before {
        position: absolute;
        content: "";
        left: -35px;
        top: 0px;
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-right: 45px solid #4274fa;
        border-bottom: 28px solid transparent;
    }
    
    .float-left {
        float: left;
    }
    
    .lh-medium {
        line-height: 1.2;
    }
    
    .lh-medium {
        line-height: 1.2;
    }
    
    .ta-left {
        text-align: left;
    }
    
    .fw-exbold {
        font-weight: 800 !important;
    }
    
    .mtpx-60 {
        margin-top: 60px;
    }
    
    .new-pop-form .close-btn {
        top: -10px;
        position: absolute;
        /* border: 5px solid #fff; */
    }
    
    .pop-form-txt-side {
        position: absolute;
        left: 30px;
        transform: rotate(-90deg);
        bottom: 0;
        top: 0;
        height: 113%;
        width: 55%;
        z-index: -1;
    }
    
    .pop-form-txt-side h4 {
        font-size: 19px;
        font-weight: 300;
    }
    
    .pop-form-txt-side h2 {
        text-align: left;
        font-size: 36px;
    }
    
    div#new-pop-form textarea {
        height: 140px;
    }
    
    .popup-new-imgs img {
        z-index: 1;
        width: 125%;
        position: relative;
        left: -170px;
    }
    
    .popup-txt-form-new {
        position: relative;
        z-index: 2;
    }
    
    .popup-new-imgs:before {}
    
    .popup-new-imgs {
        position: relative;
    }
    
    .popup-new-imgs:before {
        content: '';
        background: #a22425;
        position: absolute;
        top: -70px;
        right: 185px;
        bottom: 0;
        margin: auto;
        height: 500px;
        width: 360px;
        border-radius: 6px;
    }
    
    .new-pop-form .close-btn img {
        width: auto;
        left: 33px;
    }
    
    @media(max-width: 1600px) {
        .pop-form-txt-side {
            position: absolute;
            left: 30px;
            transform: rotate(-90deg);
            bottom: 0;
            top: 0;
            height: 114%;
            width: 50%;
            z-index: -1;
        }
        div#new-pop-form textarea {
            height: 92px;
        }
    }
    
    @media(max-width: 1180px) {
        .new-pop-form {
            width: 950px;
            height: 620px;
        }
        .new-pop-form .close-btn img {
            width: auto;
            left: 5px;
            top: -20px;
        }
        .new-popupform-main h3 {
            font-size: 22px;
        }
        div#new-pop-form form {
            padding: 20px 30px;
        }
        div#new-pop-form form {
            margin-top: 10px;
        }
        .new-popupform-main.active div#new-pop-form form {
            margin: 0 auto 0;
            border-radius: 0px 0px 6px 6px;
            padding-top: 10px;
            background: rgb(241 199 64 / 79%);
        }
    }
    
    @media(max-width: 991px) {
        .new-pop-form {
            position: absolute;
            width: 510px;
            height: 500px;
            top: 0px;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            /* background-image: url(../images/popup-bg2.png); */
            padding: 0px 0 0px 0;
            z-index: 99;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            background: #260868;
        }
        .new-popupform-main .col-sm-offset-4.col-sm-8 {
            max-width: 100%;
            width: 100%;
            margin: 0;
        }
        .new-popupform-main h3 {
            font-size: 30px !important;
        }
        .new-popupform-main h6 {
            font-size: 30px;
        }
        #flform input[type="text"],
        input[type="email"] {
            margin-bottom: 0px;
        }
        .new-pop-form .close-btn {
            width: 35px;
            height: 30px;
            display: block;
            position: absolute;
            top: 2px;
            right: 0;
            font-size: 18px;
            font-weight: 900;
            color: #080808;
            padding-top: 3px;
        }
    }
    
    @media(max-width: 767px) {
        .pop-form-txt-side {
            display: none;
        }
        .popup-txt-form-new {
            background: rgb(241 199 64 / 79%);
            padding: 10px 20px;
        }
        .popup-new-imgs img {
            width: 112%;
            left: -28px;
            top: -185px;
        }
        .popup-new-imgs {
            position: absolute;
            top: -300px;
            width: 100%;
        }
        .popup-new-imgs:before {
            right: 0;
            left: -25px;
            width: 100%;
            top: -220px;
            height: 520px;
            background: #a22425;
            height: 520px;
        }
        .new-popupform-main h6:before {
            position: absolute;
            content: "";
            left: -20px;
            top: 0px;
            width: 0;
            height: 0;
            border-top: 0px solid transparent;
            border-right: 28px solid #4274fa;
            border-bottom: 28px solid transparent;
        }
        div#new-pop-form form {
            width: 100% !important;
        }
        .new-pop-form {
            position: absolute;
            width: 334px !important;
            height: 535px !important;
            background: transparent;
        }
        .new-popupform-main .new-pop-form h3 {
            font-size: 17px !important;
            margin-top: 4px;
            text-align: center;
            color: #000;
        }
        .new-pop-form .close-btn {
            top: -186px;
            right: 12px;
            height: 35px;
        }
        .new-popupform-main h6 {
            letter-spacing: 0;
            font-size: 21px;
            background: #4274fa;
            color: #fff;
            border-radius: 10px;
            padding: 3px 8px 5px 8px;
            text-align: left;
            position: relative;
            right: 0px;
            margin: 0px;
            float: right;
        }
        .new-pop-form .submit-btn {
            font-size: 18px;
            width: 100%;
            padding: 8px 0px;
        }
        div#new-pop-form {
            max-width: 100%;
            width: 100%;
            margin: 0;
            text-align: center;
            padding-top: 10px;
            position: relative;
        }
        .new-popupform-main h3 {
            font-size: 26px;
            margin: 31px 0 0 0;
            color: #ffffff;
            font-weight: 500;
        }
        .new-popupform-main h2 {
            font-size: 30px;
            margin: 10px 0 0 0;
            color: #ffffff;
            font-weight: 700;
        }
        .new-popupform-main h4 {
            font-size: 20px;
            margin: 8px 0 0 0;
            color: #000;
            font-weight: 700;
            text-align: center;
        }
        .chk-st-1 {
            display: inline-flex;
        }
    }
    
    div#new-pop-form {
        width: 100%;
        margin: 0 auto;
        display: table;
        text-align: center;
        padding-top: 70px;
        position: relative;
        z-index: 1;
    }
    
    div#new-pop-form form {
        width: 100%;
        margin: 20px auto 0;
        display: table;
        background: rgb(241 199 64 / 90%);
        padding: 30px 30px;
        border-radius: 6px;
        position: relative;
        z-index: 2;
    }
    
    @media (min-width:320px) and (max-width:767px) {
        .wow {
            animation-name: none !important;
            visibility: visible !important;
        }
        div#new-pop-form {
            width: 100%;
            margin: 0 auto;
            display: table;
            text-align: center;
            padding-top: 14px;
        }
    }
    </style>
    <div class="overlay-bg over-bg-3"></div>
    </div>
    <script>
    function order_now_value(objButton) {}
    </script>
    <script></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/fancybox.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/accordian-jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="../previews.customer.envatousercontent.com/files/308385206/js/jquery.easing.min.js"></script><script src="../previews.customer.envatousercontent.com/files/308385206/js/jquery.fittext.js"></script> -->
    <!-- <script type="text/javascript" src="../previews.customer.envatousercontent.com/files/308385206/wow_book/pdf.combined.min.js"></script><script type="text/javascript" src="../previews.customer.envatousercontent.com/files/308385206/wow_book/wow_book.min.js"></script> -->
    <script src="js/custom.js"></script>
    <!-- <script src="assets/js/chat51dc.js?r=415836235"></script> -->
    <!-- <script src="../js/javascript845a.js?r=681130219"></script> -->
    
    <!-- Start of designneshelp Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
    <!-- End of designneshelp Zendesk Widget script -->
    <script>
    $(document).ready(function() {
    $('.livechat, .live_chatt, .chats').click(function () {
            $zopim.livechat.window.toggle();
            return false;
          }
          );
          $(window).on('load', function() {
                $zopim.livechat.window.show();
          });
        zE(function() {
            zE.activate();
        });
        zE(function() {
            $zopim(function() {
              $zopim.livechat.setOnUnreadMsgs(unread);
                function unread(number) {
                if (number>=1)
                {
                    $zopim.livechat.window.toggle();
                    $zopim.livechat.window.show();
                }
                }
            });
        });
    });
    </script>
    
    <script>
    function order_now_value(objButton) {}
    </script>
    <script>
    $('.myHover').mouseenter(function() {
        $('.bgGround').css("background-image", "url(images/" + $(this).data('img') + ")");
    });
    $('.illus-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.illus-slider-nav'
    });
    $('.illus-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.illus-slider-for',
        dots: false,
        focusOnSelect: true
    });
    $('.price-slidr').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('.illus-tab-slider-for').slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        fade: true,
        asNavFor: '.illus-tab-slider-nav'
    });
    $('.illus-tab-slider-nav').slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        asNavFor: '.illus-tab-slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
    });
    $('.testi-side-slider').slick({
        infinite: true,
        vertical: true,
        slidesToShow: 3,
        autoplay: true,
        centerMode: true,
        autoplaySpeed: 2000,
        arrows: false,
        autoplaySpeed: 0,
        arrows: false,
        speed: 15000,
        cssEase: 'linear',
        Swiping: true,
        verticalSwiping: true,
        cssEase: 'ease-in-out',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: false
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    var newsletter_p = setInterval(function() {
        $(".popupform-main-auto").css("display", "block")
        clearInterval(newsletter_p);
    }, 4000);
    $('.close-btn').click(function() {
        $('.popupform-main-auto').attr('class', 'popupform-main-auto');
        setTimeout(function() {
            $('.popupform-main-auto').css('display', 'none')
        }, 0);
    });
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
    $('.poupBtn').on('click', function() {
        $('.new-popupform-main').addClass('active');
        $('body').addClass('o-hidden');
        $('.overlay-bg').fadeIn(500);
        $('.close-btn').on('click', function() {
            $('.new-popupform-main').removeClass('active');
            $('body').removeClass('o-hidden');
            $('.overlay-bg').fadeOut(500);
        });
        $('.overlay-bg').click(function() {
            $('new-popupform-main').removeClass('active');
            $('body').removeClass('o-hidden');
            $('.overlay-bg').fadeOut(500);
        });
    });
    $('#service-category-tabs li a').click(function() {
        $('#service-category-tabs li a').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        if($(this).next('.contant_box_acc').css('display') == 'block') {
            $(this).next('.contant_box_acc').slideUp('slow');
        } else {
            $('#service-category-tabs .contant_box_acc').css('display', 'none');
            $(this).next('.contant_box_acc').slideDown('slow');
            $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
        }
    });
    </script>
    <script type="text/javascript">
    $(function() {
        function fullscreenErrorHandler() {
            if(self != top) return "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
        }
        // imageBook = ["1", "8"][ Math.floor(Math.random()*2)];
        // imageBookPath = "./img/magazine_template_0"+imageBook+"/";
        // $("#book1-trigger .book-thumb").attr("src", imageBookPath+"image_000.jpg")
        var optionsBook1 = {
            height: 1024,
            width: 725 * 2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,
            pageNumbers: false,
            pdf: "images/pdf/book1.pdf",
            pdfFind: true,
            pdfTextSelectable: true,
            lightbox: "#book1-trigger",
            lightboxClass: "lightbox-pdf",
            centeredWhenClosed: true,
            hardcovers: true,
            curl: false,
            toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails",
            thumbnailsPosition: 'bottom',
            responsiveHandleWidth: 50,
            onFullscreenError: fullscreenErrorHandler
        };
        var optionsBook2 = {
            height: 1024,
            width: 725 * 2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,
            pageNumbers: false,
            pdf: "images/pdf/book2.pdf",
            pdfFind: true,
            pdfTextSelectable: true,
            lightbox: "#book2-trigger",
            lightboxClass: "lightbox-pdf",
            centeredWhenClosed: true,
            hardcovers: true,
            curl: false,
            toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails",
            thumbnailsPosition: 'bottom',
            responsiveHandleWidth: 50,
            onFullscreenError: fullscreenErrorHandler
        };
        var optionsBook3 = {
            height: 1024,
            width: 725 * 2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,
            pageNumbers: false,
            pdf: "images/pdf/book3.pdf",
            pdfFind: true,
            pdfTextSelectable: true,
            lightbox: "#book3-trigger",
            lightboxClass: "lightbox-pdf",
            centeredWhenClosed: true,
            hardcovers: true,
            curl: false,
            toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails",
            thumbnailsPosition: 'bottom',
            responsiveHandleWidth: 50,
            onFullscreenError: fullscreenErrorHandler
        };
        var books = {
            "#book1": optionsBook1,
            "#book2": optionsBook2,
            "#book3": optionsBook3
        };
        $("#book1-trigger, #book2-trigger, #book3-trigger").on("click", function() {
            buildBook("#" + this.id.replace("-trigger", ""));
        })

        function buildBook(elem) {
            var book = $.wowBook(elem);
            if(!book) {
                $(elem).wowBook(books[elem]);
                book = $.wowBook(elem);
            }
            book.showLightbox();
        }
    });
    </script>
    <script>
    mobileOnlySlider(".autoplay3", true, false, 767);

    function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
        var slider = $($slidername);
        var settings = {
            mobileFirst: true,
            dots: false,
            slidesToShow: 1,
            autoplay: true,
            arrows: $arrows,
            responsive: [{
                breakpoint: $breakpoint,
                settings: "unslick"
            }, ]
        };
        slider.slick(settings);
        $(window).on("resize", function() {
            if($(window).width() > $breakpoint) {
                return;
            }
            if(!slider.hasClass("slick-initialized")) {
                return slider.slick(settings);
            }
        });
    }
    </script>
    <script>
    mobileOnlySlider(".autoplay4", true, false, 767);

    function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
        var slider = $($slidername);
        var settings = {
            mobileFirst: true,
            dots: true,
            slidesToShow: 1,
            autoplay: true,
            arrows: $arrows,
            responsive: [{
                breakpoint: $breakpoint,
                settings: "unslick"
            }, ]
        };
        slider.slick(settings);
        $(window).on("resize", function() {
            if($(window).width() > $breakpoint) {
                return;
            }
            if(!slider.hasClass("slick-initialized")) {
                return slider.slick(settings);
            }
        });
    }
    </script>
    <script type="text/javascript">
        // redirecting to a new page after 4 seconds
        setTimeout(function () { window.location = "/illustration-services"; }, 4000); 
    </script>
</body>

</html>