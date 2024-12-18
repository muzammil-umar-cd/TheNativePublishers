<?php
include('../includes/config.php');
?>

<!doctype html>
<html lang="en">

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
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="../index.html" class="logo">
                        <img src="../assets/images/logo.png" alt="">
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
                            <li><a href="/about.php">About</a></li>
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
<section class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    Eye-Catching Book Covers: Captivating Designs by <?php  echo WEBSITE_NAME; ?>
                </h1>
                <p>
                    At <?php  echo WEBSITE_NAME; ?>, we understand the significance of a captivating book cover in capturing readers' attention and conveying the essence of your story.
                </p>
                <div class="btn-block">
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                    <a href="javascript:" class="btn btn-blue-brd chat">
                        <span>
                            Live Chat
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="image">
                    <img src="../assets/images/cover-design.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="audiobook">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Why
            </h3>
            <h2>
                Choose Our Book <br> Cover Services?
            </h2>
            <p>
                At <?php  echo WEBSITE_NAME; ?>, we understand the significance of a captivating book cover in capturing readers' attention and conveying the essence of your story.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <img src="../assets/images/buetiful.png" alt="">
                            <h4>
                                Customized Solutions
                            </h4>
                            <p>
                                Our book cover services are tailored to your specific needs, preferences, and genre.
                            </p>
                            <h6>01</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box" style="background: #f5f6ed">
                            <img src="../assets/images/buetiful.png" alt="">
                            <h4>
                                Creative Expertise
                            </h4>
                            <p>
                                Our team of designers possesses a deep understanding of visual storytelling & design principles.
                            </p>
                            <h6>02</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box media" style="background: #f2f2f2">
                            <img src="../assets/images/buetiful.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Collaborative Approach
                                </h4>
                                <p>
                                    We believe in collaboration and your satisfaction is our top priority.
                                </p>
                                <h6>03</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box media mt-2" style="background: #edeef6">
                            <img src="../assets/images/buetiful.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Professionalism and Timeliness
                                </h4>
                                <p>
                                    We are committed to delivering professional-quality book covers within agreed-upon timelines.
                                </p>
                                <h6>04</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="book-portfolio">
    <div class="container-fluid">
        <div class="heading text-center">
            <h3>book Portfolio</h3>
            <h2>
                Achieve the dream you crave <br>
                Envision your work <span>coming into reality</span>
            </h2>
            <p>
                Don’t just go by our words; look at the top best-sellers we have worked on!
            </p>
        </div>
        <div class="owl-portfolio owl-carousel owl-theme">
            <div class="item">
                <img src="../assets/images/sl1.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl2.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl3.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl4.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl5.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl6.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl7.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl8.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl9.png" alt="">
            </div>
            <div class="item">
                <img src="../assets/images/sl10.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="why-choose">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Leading
            </h3>
            <h2>
                Best-Sellers Are Known For <br>
                Their <span>Artistic Covers</span>
            </h2>
        </div>
        <div class="owl-choose owl-carousel owl-theme">
            <div class="item">
                <img src="../assets/images/artistic-1.png" alt="">
                <h4>
                    Customized <br> Designs
                </h4>
                <p>
                    From concept to execution, our designers work diligently to deliver a cover that exceeds your expectations.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/artistic-2.png" alt="">
                <h4>
                    Hard <br> Books
                </h4>
                <p>
                    These covers exude a sense of timeless elegance and durability.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/artistic-3.png" alt="">
                <h4>
                    Artistic <br>
                    Cover-Designs
                </h4>
                <p>
                    From mixed media collages to abstract paintings, our artistic covers are visually striking and reflect the creative essence of your writing.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/artistic-4.png" alt="">
                <h4>
                    In-Book <br>
                    Illustrations
                </h4>
                <p>
                    Our talented illustrators create beautiful artwork that brings key moments or characters from your book to life.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="widely">
    <div class="container">
        <div class="heading text-center text-white">
            <h3>
                Finding the
            </h3>
            <h2>
                Perfect Fit: Book Cover Sizes
            </h2>
            <p>
                Whether you're publishing in print or eBook format, choosing the appropriate cover size is crucial in capturing readers' attention and conveying the essence of your book.
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Pocket Book</h4>
                    <p>4.25 x 6.875 in 1108 x175 mm</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>A5
                    </h4>
                    <p>5.83 x 8.27 in 1148 x 210 mm</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Royal</h4>
                    <p>6.14 x 9.21 in 1156 x 234 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Comic Book</h4>
                    <p>6.63 x10.25 in 1168 x 260 mm </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Small Landscape</h4>
                    <p>9 x7 in1229 x178 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Digest</h4>
                    <p>5.5 x 8.5 in 1140 x 216 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Crown Quarto</h4>
                    <p>7.44 x 9.68 in 1189 x 246 mm</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>US Trade</h4>
                    <p>6 x 9 inI152 x 229 mm </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Executive</h4>
                    <p>7x10 in1178 x 254 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>A4</h4>
                    <p>8.27 x11.69 in 1 210 x 297 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>US Letter </h4>
                    <p>8.5x11 in 1216 x 279 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Square</h4>
                    <p>8.5 x 8.5 in 216 x 216 mm</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>Small Square</h4>
                    <p>7.5 x 7.5 in I 190 x190 mm </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>US Letter Landscape </h4>
                    <p>11 x 8.5 in | 279 x 216 mm</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <img src="../assets/images/red-box.png" alt="">
                    <h4>A4 Landscape</h4>
                    <p>11.69 x 8.27 in I 297 x 210 mm </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../includes/inner-footer.php')
?>