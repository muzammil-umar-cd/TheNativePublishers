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
                        Welcome to <span><?php echo WEBSITE_NAME; ?></span> Professional
                        Proofreading Services
                    </h1>
                    <p>
                        Our proofreading services are designed to give your work that final polish, ensuring it is error-free, consistent, and ready for publication.
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
                        <img src="../assets/images/preefreading-banner.png" alt="">
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
                    Proofreading <span>Process</span>
                </h2>
                <p>
                    An author website serves as your online identity and provides a <br> platform for you to connect with your readership.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <img src="../assets/images/proof-1.png" alt="">
                                <h4>
                                    Thorough <br>
                                    Proofreading
                                </h4>
                                <p>
                                    Our experienced proofreaders meticulously review your document, line by line, word by word.
                                </p>
                                <h6>01</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box" style="background: #f5f6ed">
                                <img src="../assets/images/proof-2.png" alt="">
                                <h4>
                                    Grammar <br>
                                    and Spelling
                                </h4>
                                <p>
                                    Our proofreaders ensure that your content adheres to the highest linguistic standards and is free from typos, inconsistencies, and grammatical mistakes.
                                </p>
                                <h6>02</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box mt-2" style="background: #f2eff2">
                                <img src="../assets/images/proof-3.png" alt="">
                                <h4>
                                    Citations and References
                                </h4>
                                <p>
                                    If your manuscript includes citations and references, our proofreaders verify their accuracy and adherence to the specified citation style (such as APA, MLA, or Chicago).
                                </p>
                                <h6>03</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box media" style="background: #f2f2f2">
                                <img src="../assets/images/proof-4.png" alt="" class="mr-3">
                                <div class="media-body">
                                    <h4>
                                        Punctuation and Sentence Structure
                                    </h4>
                                    <p>
                                        Our proofreaders fine-tune your sentences, ensuring that they are clear, concise, and correctly punctuated.
                                    </p>
                                    <h6>04</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box media mt-2" style="background: #edeef6">
                                <img src="../assets/images/proof-5.png" alt="" class="mr-3">
                                <div class="media-body">
                                    <h4>
                                        Consistency and Clarity
                                    </h4>
                                    <p>
                                        Our proofreaders ensure your content maintains a consistent style, tone, and voice.
                                    </p>
                                    <h6>05</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="edit-type proof-type">
        <div class="container">
            <div class="heading text-center text-white">
                <h3>
                    Why Choose
                </h3>
                <h2>
                    <?php echo WEBSITE_NAME; ?> for Proofreading?
                </h2>
                <p>
                    Proofreading is carefully checking for errors in a text before it is published. Our proofreading team fixes spelling and punctuation mistakes, typos, formatting issues and inconsistencies. Once approved by you, it is forwarded for publishing.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="../assets/images/proof-type.png" alt="">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>
                            <span><img src="../assets/images/edit-check.png" alt=""> Skilled Proofreaders</span>
                            Our team of professional proofreaders has extensive experience and a meticulous eye for detail.
                        </li>
                        <li>
                            <span><img src="../assets/images/edit-check.png" alt=""> Fast and Reliable Service</span>
                            Our proofreaders work efficiently to deliver your proofread documents within the agreed-upon timeframe without compromising on quality.
                        </li>
                        <li>
                            <span><img src="../assets/images/edit-check.png" alt=""> Confidentiality and Privacy</span>
                            Your documents will be treated with utmost care and remain secure throughout proofreading.
                        </li>
                        <li>
                            <span><img src="../assets/images/edit-check.png" alt=""> Affordable Pricing</span>
                            We aim to make professional proofreading accessible to writers and individuals who value the quality of their written content.
                        </li>
                        <li>
                            <span><img src="../assets/images/edit-check.png" alt=""> Satisfaction Guarantee</span>
                            If you are not completely satisfied with our proofreading services, we offer revisions and modifications to ensure your content meets your expectations.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="global">
        <div class="container">
            <div class="heading text-center">
                <h2>
                    Publish Through Us Globally
                </h2>
            </div>
            <img src="../assets/images/globaly.jpg" alt="">
        </div>
    </section>
    <section class="audio-cta pack-cta proof-cta">
        <div class="container-fluid">
            <div class="container">
                <h4>
                    Give your written work an essential final polish with
                </h4>
                <h3>
                    <?php echo WEBSITE_NAME; ?>'s Professional <br>
                    <span> proofreading services</span>.
                </h3>
                <div class="btn-block">
                    <a href="javascript:" class="btn btn-yellow various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                    <a href="javascript:" class="btn btn-white-brd chat">
                        <span>
                            Live Chat
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h5>
                70
                <span>%off</span>
            </h5>
        </div>
    </section>

    <?php include('../includes/inner-footer.php'); ?>