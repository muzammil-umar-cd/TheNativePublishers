<?php
include('config.php');
?>

<!doctype php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style-web.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Welcome to <?php echo WEBSITE_NAME; ?> - Get To Know Us!</title>
        <meta name="description"
            content="We welcome you to <?php echo WEBSITE_NAME; ?>, where your dream of writing a book comes true!">
    </head>

    <body>
        <header style="background: url('../assets/images/header-bg.jpg') no-repeat !important;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/" class="logo">
                            <img src="../assets/images/logo.png" alt>
                        </a>
                    </div>
                    <div class="col-md-9">

                        <nav class="navbar-expand-md main-menu">
                            <ul class="cinfo">
                                <li class="info ml-3">
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><?php echo ADMIN_EMAIL; ?></a>
                                </li>
                                <li class="info">
                                    <i class="fas fa-phone-volume"></i>
                                    <a href="<?php echo PHONE_HREF; ?>"><?php echo PHONE; ?></a>
                                </li>
                            </ul>
                            <ul class="menu" data-aos="fade" data-aos-duration="1000">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/editing/">Editing</a></li>
                                <li><a href="/book-publishing.php">Publishing</a></li>
                                <li><a href="/ghostwriting/">Ghostwriting</a></li>
                                <li><a href="/cover-design/">Book
                                        Cover</a></li>
                                <li><a href="/proofreading/">Proofreading
                                    </a></li>
                                <li><a href="/book-marketing/">Marketing
                                    </a></li>
                                <li><a href="/packages/">Packages
                                    </a></li>
                                <li><a href="/genre/">Genre</a></li>
                                <!--<li class="btn-li">
                        <a href="javascript:" class="btn btn-yellow" data-fancybox="" data-src="#popupform">
                            <span>Let’s Get Started <i class="fas fa-long-arrow-right"></i></span>
                        </a>
                    </li>-->
                            </ul>
                        </nav>
                        <a href="javascript:;" class="menu-bottom">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        