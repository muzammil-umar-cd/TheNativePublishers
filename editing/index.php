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
                    Looking for Editing
                    Services? Choose <span><?php echo WEBSITE_NAME; ?>!</span>
                </h1>
                <p>
                    At <?php  echo WEBSITE_NAME; ?>, we understand the importance of creating impactful and compelling content that captures the essence of your ideas. Our editing services are designed to refine your written material, ensuring clarity, coherence, and consistency. Whether you're an aspiring author, a business professional, or a student, our expert editors are here to help you polish your work to perfection.
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
                    <img src="../assets/images/editing.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="audiobook">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Our
            </h3>
            <h2>
                Editing <span>Process</span>
            </h2>
            <p>
                Our clear and easy-to-understand editing process gives you an overview of our work.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <img src="../assets/images/edit-1.png" alt="">
                            <h4>
                                Thorough <br>
                                Review
                            </h4>
                            <p>
                                Our experienced editors pay attention to the overall structure, style, and coherence of your writing.
                            </p>
                            <h6>01</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box" style="background: #f5f6ed">
                            <img src="../assets/images/edit-2.png" alt="">
                            <h4>
                                Language <br>
                                Enhancement
                            </h4>
                            <p>
                                Our editors will refine your sentences to improve clarity, flow, impact, vocabulary, and grammar.
                            </p>
                            <h6>02</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box mt-2" style="background: #f2eff2">
                            <img src="../assets/images/edit-3.png" alt="">
                            <h4>
                                Clarity and Conciseness
                            </h4>
                            <p>
                                Our editors will eliminate unnecessary jargon, repetitive phrases, and ambiguous statements, making your content concise, engaging, and easily understandable.
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
                            <img src="../assets/images/edit-4.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Structural Refinement
                                </h4>
                                <p>
                                    We focus on the organization and structure of your content.
                                </p>
                                <h6>04</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box media mt-2" style="background: #edeef6">
                            <img src="../assets/images/edit-5.png" alt="" class="mr-3">
                            <div class="media-body">
                                <h4>
                                    Coherence and Consistency
                                </h4>
                                <p>
                                    Our editors will ensure that your content maintains a consistent tone, style, and voice. They will also check for any factual, reference-based, or terminology-related inconsistency.
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
<section class="edit-type">
    <div class="container">
        <div class="heading text-center text-white">
            <h3>
                Types Of
            </h3>
            <h2>
                Editorial Services We Offer
            </h2>
            <p>
                Here are some types of editorial services we offer;
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/images/edit-type.png" alt="">
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Content Editing</span>
                        Our Editors will assess the organization, clarity, and logical progression of ideas to ensure your content is engaging and impactful.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Copyediting</span>
                        We will address grammar, punctuation, spelling, and syntax errors, & improve sentence structure, clarity, & consistency to enhance readability.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Line Editing</span>
                        Where we refine sentences, improve word choice, and enhance the overall writing style.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Proofreading</span>
                        Our editors will meticulously check for typos, & spelling mistakes when the entire manuscript is complete.
                    </li>
                    <li>
                        <span><img src="../assets/images/edit-check.png" alt=""> Developmental Editing</span>
                        We’ll assess plot development, character arcs, pacing, & overall story structure in fiction writing. In non-fiction, we’ll evaluate the organization of ideas, argument strength, & clarity of concepts.
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
<section class="audio-cta edit-cta">
    <div class="container-fluid">
        <div class="container">
            <h3>
                Let our <span>Book Video Trailer</span> <br>
                Services bring your book to <br>
                life on the screen,
            </h3>
            <p>
                Contact us today to get started on refining your written masterpiece.
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