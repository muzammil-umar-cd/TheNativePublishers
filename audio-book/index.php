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
                    Welcome to <?php echo WEBSITE_NAME; ?> – Where
                    Your Stories Come to Life!
                </h1>
                <p>
                    Hey there, fellow storytellers! We're <?php  echo WEBSITE_NAME; ?>, the coolest crew in the world of ghostwriting. If you've got a story burning inside you but need a little help bringing it to life, you've come to the right place.
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
                    <img src="../assets/images/audiobook-banner.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="audiobook">
    <div class="container">
        <div class="heading text-center">
            <h2>
                Why Choose <span>Audiobooks?</span>
            </h2>
            <p>
                Audiobooks have become increasingly popular in today's fast-paced world. <br> With audiobooks, you can:
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <img src="../assets/images/audio1.png" alt="">
                            <h4>
                                Reach a <br>
                                Wider Audience
                            </h4>
                            <p>
                                Audiobooks appeal to a
                                broad range of listeners, including those who prefer audio over print or digital reading.
                            </p>
                            <h6>01</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box" style="background: #f5f6ed">
                            <img src="../assets/images/audio2.png" alt="">
                            <h4>
                                Enhance the <br>
                                Reading Experience
                            </h4>
                            <p>
                                They create a multisensory experience that captivates listeners & deepens their emotional connection to the material.
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
                            <img src="../assets/images/audio3.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Maximize <br>
                                    Accessibility
                                </h4>
                                <p>
                                    By offering your content in audio, you make it
                                    accessible to a wider range of people.
                                </p>
                                <h6>03</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box media mt-2" style="background: #edeef6">
                            <img src="../assets/images/audio4.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Multitask and <br>
                                    On-the-Go Listening
                                </h4>
                                <p>
                                    Audiobooks allow listeners to enjoy your content
                                    while engaged in other activities such as
                                    commuting, exercising, or relaxing.
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
<section class="personal-book">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Our 5 Steps Process For
            </h3>
            <h2>
                Our <span>Audiobook</span> Production Process
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, por incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/ap1.png" alt="">
                    <p>
                        <span>
                            Professional Narration
                        </span>
                        We collaborate with experienced and talented narrators who bring your story to life. They carefully interpret your text, capturing the essence of your characters and delivering a captivating performance.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/ap2.png" alt="">
                    <p>
                        <span>
                            Post-Production and Editing
                        </span>
                        Our skilled audio engineers meticulously edit and enhance the recorded narration. They remove any background noise, ensure consistent audio levels, and apply sound effects or music to enhance the listening experience.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/ap3.png" alt="">
                    <p>
                        <span>
                            Studio-Quality Recording
                        </span>
                        Our state-of-the-art recording studios ensure high-quality sound production. We use top-notch equipment and techniques to deliver crystal-clear audio with excellent sound balance and clarity.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/ap4.png" alt="">
                    <p>
                        <span>
                            Customization and Branding
                        </span>
                        We offer options for customizing your audiobook to align with your brand. This includes incorporating your branding elements into the cover art, audio introductions, or outros, creating a cohesive and recognizable brand identity.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/ap5.png" alt="">
                    <p>
                        <span>
                            Quality Assurance
                        </span>
                        Our rigorous quality assurance process ensures that the final audiobook meets the highest standards. We conduct thorough reviews and inspections to guarantee accurate narration, clear audio, and a seamless listening experience.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/images/ap-printer.png" alt="" class="printer">
            </div>
        </div>
    </div>
</section>
<section class="transform">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="heading">
                    <h3>
                        Our 6 Steps Process For
                    </h3>
                    <h2>
                        Creating A <span>Personal Book</span>
                    </h2>
                    <p>
                        Keeping your busy schedule in mind, we’ve broken <br> down the process into six digestible steps.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="book">
                            <img src="../assets/images/tranform1.png" alt="">
                            <div class="txt">
                                <h5>01</h5>
                                <h4>
                                    Fiction Books
                                </h4>
                                <p>
                                    Whether you've written a captivating novel, a thrilling mystery, or a heartwarming romance, our audiobook services can bring your characters and stories to life, immersing listeners in your imaginative world.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="book">
                            <img src="../assets/images/tranform2.png" alt="">
                            <div class="txt">
                                <h5>02</h5>
                                <h4>
                                    Non-Fiction Books
                                </h4>
                                <p>
                                    From self-help and business books to educational and motivational content, we can transform your non-fiction written material into engaging and informative audiobooks that educate and inspire listeners.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="book">
                            <img src="../assets/images/tranform3.png" alt="">
                            <div class="txt">
                                <h5>03</h5>
                                <h4>
                                    Articles and Blog Posts
                                </h4>
                                <p>
                                    Do you have a collection of insightful articles or blog posts? Convert them into compelling audiobooks, making your valuable content accessible to a wider audience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="book">
                            <img src="../assets/images/tranform4.png" alt="">
                            <div class="txt">
                                <h5>04</h5>
                                <h4>
                                    Educational Material
                                </h4>
                                <p>
                                    If you've created educational content such as courses, training material, or textbooks, our audiobook services can help you deliver the information in an engaging and memorable way.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/images/transform.png" alt="" class="trans-img">
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
<section class="why-choose">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Why Choose
            </h3>
            <h2>
                <span><?php  echo WEBSITE_NAME; ?></span>
            </h2>
            <p>
                Quality Assurance: We promise to deliver meticulously crafted content that captures the essence of your story.
            </p>
        </div>
        <div class="owl-choose owl-carousel owl-theme">
            <div class="item">
                <img src="../assets/images/choose-1.png" alt="">
                <h4>
                    Authenticity
                </h4>
                <p>
                    Our writers will honor your unique voice and vision throughout the ghostwriting process. By working closely with you to reflect your individuality and stay true to your story.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/choose-2.png" alt="">
                <h4>
                    Timely Delivery
                </h4>
                <p>
                    Our efficient workflow & dedicated team will respect your deadlines and provide regular updates on the progress of your project.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/choose-3.png" alt="">
                <h4>
                    Professionalism
                </h4>
                <p>
                    We maintain the highest level of professionalism and confidentiality.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/choose-4.png" alt="">
                <h4>
                    Collaboration
                </h4>
                <p>
                    We will involve you in the creative process, valuing your input and feedback at every stage.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/choose-5.png" alt="">
                <h4>
                    Customization
                </h4>
                <p>
                    We tailor our services to meet your specific needs and goals.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="audio-cta">
    <div class="container-fluid">
        <div class="container">
            <h3>
                Are you ready to take the next step <br> in your publishing journey?
            </h3>
            <p>
                Let's make your book a reality! Publish Your Masterpiece Now.
            </p>
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

<?php
include('../includes/inner-footer.php')
?>