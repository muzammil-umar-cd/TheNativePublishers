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
                    Welcome to <span><?php echo WEBSITE_NAME; ?>'s</span> Author
                    Website Services
                </h1>
                <p>
                    Your author website is the central hub for showcasing your work, connecting with readers, and establishing your brand as a writer.
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
                    <img src="../assets/images/author-banner.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="audiobook">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Why You
            </h3>
            <h2>
                Need an <span>Author Website?</span>
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
                            <img src="../assets/images/aw1.png" alt="">
                            <h4>
                                Central Hub <br>
                                for Your Work
                            </h4>
                            <p>
                                Your author website serves as a central hub for all your books, author bio, news, events, and contact information. It allows readers to easily access information about your work, browse your book catalog, and stay up-to-date with your latest releases and events.
                            </p>
                            <h6>01</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box" style="background: #f5f6ed">
                            <img src="../assets/images/aw2.png" alt="">
                            <h4>
                                Establish <br>
                                Your Brand
                            </h4>
                            <p>
                                An author website enables you to establish and reinforce your personal brand. It provides a space to showcase your writing style, voice, and themes, allowing readers to connect with your unique author persona and artistic vision.
                            </p>
                            <h6>02</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box mt-2" style="background: #f2eff2">
                            <img src="../assets/images/aw3.png" alt="">
                            <h4>
                                Professional Image
                            </h4>
                            <p>
                                A well-designed and professionally executed author website enhances your credibility as a writer. It demonstrates your commitment to your craft and provides a polished and professional platform for showcasing your literary achievements.
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
                            <img src="../assets/images/aw4.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Connect with Readers:
                                </h4>
                                <p>
                                    Your website allows you to build a direct relationship with your readership. Through features such as blog posts, newsletters, and interactive elements, you can engage with your audience, share behind-the-scenes insights, and cultivate a loyal reader community.
                                </p>
                                <h6>04</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box media mt-2" style="background: #edeef6">
                            <img src="../assets/images/aw5.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Promote Your Books
                                </h4>
                                <p>
                                    An author website is an effective platform for promoting your books. You can feature book summaries, excerpts, reviews, and purchase links, making it easy for readers to discover and purchase your work.
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
                Our
            </h3>
            <h2>
                Author Website Services
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, por incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam.
            </p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="../assets/images/author-service.png" alt="">
            </div>
            <div class="col-md-7">
                <ul>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Custom Website Design</span>
                        Our team of web designers will work closely with you to create a visually stunning and user-friendly author website that reflects your unique style and brand. We design websites that are modern, responsive, and optimized for both desktop and mobile devices.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Author Bio and Profile</span>
                        We help you craft a compelling author bio and profile that effectively highlights your background, writing accomplishments, and areas of expertise. We ensure that your author bio resonates with your target audience and captures your author persona.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Book Catalog and Showcase</span>
                        We create dedicated pages to showcase your books, including cover images, book summaries, and purchase links. We help you present your books in an enticing and visually appealing manner that encourages readers to explore and purchase your work.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Contact and SMI</span>
                        We integrate contact forms, email sign-up forms, and social media buttons, allowing readers to easily connect with you and follow your social media channels. This encourages engagement and helps grow your online presence.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Optimization for <br> Search Engines (SEO)</span>
                        We optimize your author website for search engines, ensuring that it ranks well in search results. This helps potential readers discover your website and books when searching for relevant keywords and topics.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Responsive and <br> User-Friendly Design</span>
                        Our team of web designers will work closely with you to create a visually stunning and user-friendly author website that reflects your unique style and brand. We design websites that are modern, responsive, and optimized for both desktop and mobile devices.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="why-choose">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Why Choose
            </h3>
            <h2>
                <span><?php  echo WEBSITE_NAME; ?></span> <br> for Audiobooks?
            </h2>
        </div>
        <div class="owl-choose owl-carousel owl-theme">
            <div class="item">
                <img src="../assets/images/vt1.png" alt="">
                <h4>
                    Experience in <br>
                    Author Branding
                </h4>
                <p>
                    We have extensive experience in helping authors build their online presence and develop a cohesive author brand. We understand the specific needs of authors and tailor our services to effectively showcase your unique voice and style.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/vt2.png" alt="">
                <h4>
                    Creative <br>
                    Expertise
                </h4>
                <p>
                    Our team of web designers, copywriters, and branding specialists are highly skilled and experienced in creating visually appealing and engaging author websites. We combine our creative expertise with a deep understanding of the publishing industry to deliver outstanding results.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/vt3.png" alt="">
                <h4>
                    Customization <br>
                    and Personalization
                </h4>
                <p>
                    We believe in creating websites that reflect your individuality and literary brand. We work closely with you to understand your vision and preferences, ensuring that your author website is customized to align with your unique style and goals.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/vt4.png" alt="">
                <h4>
                    Attention <br>
                    to Detail
                </h4>
                <p>
                    We pay meticulous attention to every aspect of your author website, from design elements to content structure. Our goal is to create a website that not only looks stunning but also functions smoothly and provides an exceptional user experience.
                </p>
            </div>
            <div class="item">
                <img src="../assets/images/vt5.png" alt="">
                <h4>
                    Timely <br>
                    Delivery
                </h4>
                <p>
                    We understand the importance of timely delivery. Our efficient workflow and project management ensure that your author website is completed within agreed-upon timelines, allowing you to launch your online presence promptly.
                </p>
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
<section class="audio-cta pack-cta author-cta">
    <div class="container-fluid">
        <div class="container">
            <h4>
                Elevate your online presence as an author with
            </h4>
            <h3>
                <?php  echo WEBSITE_NAME; ?>'s <br>
                <span>Author Website Services</span>
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

<?php
include('../includes/inner-footer.php')
?>