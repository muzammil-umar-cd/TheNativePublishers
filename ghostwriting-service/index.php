<?php
session_start();

// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="images/thenativepublishers-dark.png" type="image/x-icon" />
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="fontawesome5/css/all.min.css" rel="stylesheet">
    <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="slick/slick.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/slicknav.css" rel="stylesheet" type="text/css"> -->
    <link href="css/fancybox.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <title>Book Writing Services - Get Your Book Written by Expert Ghostwriters - Free Consultation </title>
</head>

<body>

    <!-- header start -->
    <header>
        <div class="menuSec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-3 col-sm-6 col-12">
                        <div class="header-logo">
                            <a href=""><img src="images/thenativepublishers-dark.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 col-sm-6 col-12 text-right">
                        <div class="header_btns">
                            <ul>
                                <li>
                                    <a href="mailto:info@thenativepublishers.com">

                                        <img src="images/env.png" alt="Call Icon" />

                                        <h5>Email Info: <span>info@thenativepublishers.com</span></h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:(628) 256-4002">

                                        <img src="images/headphones.png" alt="Call Icon" />

                                        <h5>Call Now! <span>(628) 256-4002</span></h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" onclick="onclickpopup()" class="btn-theme">Live Chat
                                        <img class="normal-icon" src="images/comment.png" alt="img" />
                                        <img class="hover-icon" src="images/comment-orange.png" alt="img" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- banner -->
    <section class="banner">
        <img src="images/banner.jpg" alt="" class="banner_img">
        <img src="images/vec1.png" alt="" class="vec1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-7 m-auto">
                    <div class="banner-textt">
                        <h1>Unlock Your Bestseller Potential <span>with Our Ghostwriting Services!</span></h1>
                        <p>Longing to share your life's extraordinary journey? Do you wish to shed light on a captivating topic but lack the time to write it yourself? Want your audiences to explore worlds beyond everything?</p>
                        <p><strong>Allow our team of legendary ghostwriters at The Native Publishers to breathe
                                life into your ideas.</strong></p>
                        <ul class="d-flex gap-3">
                            <li>
                                <a href="javascript:;" class="btn-theme" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    SCHEDULE A CALL
                                    <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                    <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                                </a>
                            </li>
                            <li>
                                <a class="btn-ban" href="tel:(628) 256-4002">
                                    <span><img src="images/headphones.png" alt="Call Icon"></span> (628) 256-4002
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-5">
                    <div class="banner-form">
                        <img src="images/banner-form.png" alt="">
                        <div class="ban-form-inner">
                            <h2>Get an Instant Quote Now</h2>
                            <form method="post" class="form-get-quote" action="sendmail/sendmail.php">
                                <!--hidden required values-->
                                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                                <input type="hidden" name="Form" value="Banner Form (https://thenativepublishers.com/ghostwriting-service/)">
                                <input type="text" name="name" placeholder="Enter Your Name" required>
                                <input type="email" placeholder="Enter Your Email" name="email" required>
                                <input type="tel" placeholder="Contact Number" name="phone" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" minlength="10" required>
                                <textarea name="message" placeholder="Type Your Message Here"></textarea>
                                <button type="submit" class="btn-theme"  name="send_reserve_req">SUBMIT Now
                                    <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                    <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->
    <!-- client logos -->
    <section class="client_logos slider_icons">
        <img src="images/vec2.png" alt="" class="vec2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Clients Have Appeared in</h2>
                    <div class="client-logo-slider">
                        <div>
                            <img src="images/logo/c1.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c2.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c3.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c4.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c5.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c6.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c1.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c2.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c3.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c4.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c5.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/c6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client logos -->
    <!-- story's potential -->
    <section class="storys_potential_secc all-sec pt-0">
        <img src="images/vec3.png" alt="" class="vec3">
        <img src="images/vec4.png" alt="" class="vec4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6 m-auto">
                    <img src="images/img1.png" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-6 m-auto">
                    <div class="theme-textt">
                        <span>Ghostwriting beyond the ordinary!</span>
                        <h2>Unleash your story's potential with <span>The Native Publishers,</span><i>where words come
                                alive!</i></h2>
                        <div class="paragraph_boxx">
                            <p class="mb-4">The Native Publishers is a ghostwriting company that offers a comprehensive range of professional ghostwriting services that bring your stories to life. Our team of experienced ghostwriters is dedicated to crafting exceptional
                                books that resonate with readers, whether an engaging novel, an insightful non-fiction work, or a captivating eBook. Our expertise and commitment to excellence ensure that your ideas are expertly transformed into beautiful
                                literary masterpieces.</p>

                            <p>From concept to completion, we'll craft your story with expertise and precision, ensuring your vision is beautifully transformed into captivating text. With our dedication and literary prowess, we'll turn your aspirations into
                                a remarkable book that resonates with readers and makes an indelible mark on the literary world. Let The Native Publishers be the conduit that brings your words to life.</p>
                        </div>
                        <a href="javascript:;" class="read_more_btnn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="note_textt">
                        <!--<span>Note:</span>-->
                        <!--<p>Every book deserves a meticulous final edit to ensure perfection. Typically, a 200-page-->
                        <!--    book-->
                        <!--    takes approximately 90 natural days to complete. However, if you have a specific deadline,-->
                        <!--    our-->
                        <!--    dedicated ghostwriting and marketing team can assist you in meeting your time constraints.-->
                        <!--</p>-->
                        <ul class="two_btns">
                            <li>
                                <a class="btn-theme" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">SCHEDULE A CALL
                                    <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                    <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" onclick="onclickpopup()" class="btn-theme">Live Chat
                                    <img class="normal-icon" src="images/comment-orange.png" alt="Comment Icon">
                                    <img class="hover-icon" src="images/comment.png" alt="Comment Icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- story's potential -->
    <!-- notch Genres -->
    <section class="notch_genres_secc slider_icons pb-5 pt-0">
        <img src="images/vec5.png" alt="" class="vec5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Top-notch Genres Services</h2>
                    <div class="genre-slider">
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon1.png" alt=""></span>
                                <h3>Fiction</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon2.png" alt=""></span>
                                <h3>Biography/Memoirs</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon3.png" alt=""></span>
                                <h3>Non-Fiction</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon4.png" alt=""></span>
                                <h3>Children Books</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon5.png" alt=""></span>
                                <h3>Comic Books</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon1.png" alt=""></span>
                                <h3>Fiction</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon2.png" alt=""></span>
                                <h3>Biography/Memoirs</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon3.png" alt=""></span>
                                <h3>Non-Fiction</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon4.png" alt=""></span>
                                <h3>Children Books</h3>
                            </div>
                        </div>
                        <div>
                            <div class="genre_boxx">
                                <span><img src="images/icon5.png" alt=""></span>
                                <h3>Comic Books</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- notch Genres -->
    <!-- personification -->
    <section class="personification_secc all-sec position-relative">
        <img src="images/vec6.png" alt="" class="vec6">
        <img src="images/vec7.png" alt="" class="vec7">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-7 m-auto">
                    <div class="personification_textt">
                        <h2>Your path to literary <br>personification begins here.
                            <span>Book Ghostwriting & beyond.</span>
                        </h2>
                        <div class="paragraph_box_two">
                            <p>The Native Publishers is your gateway to realizing your dream of becoming a successful writer. We are not just a book ghostwriting company but your literary partners in crafting best-selling eBooks that echo deeply with readers.
                                With our exceptional eBook writing g services, we'll infuse your stories with the power to touch hearts, capture imaginations, and leave an ineradicable mark on the literary world.</p>
                            <span>We turn your words into books and your imaginings into realities.</span>
                            <p>Our literary and marketing virtuosi understand that writing an eBook is not just about putting words on a page; it's about creating an emotional and personal connection with readers. After all, books are about making connections,
                                forming worlds, and transcending realities. We believe that the best stories are those that immunize themselves firmly into the hearts of readers, compelling them to embark on transformative journeys within the pages of
                                your book.</p>
                            <p>From talented ghostwriting maestros to boundary-breaking book-writing gurus and unparalleled narratives – The Native Publishers creates best-selling authors with a reach beyond anything.
                            </p>

                        </div>
                        <a href="javascript:;" class="readmore_btnn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-5">
                    <img src="images/img2.png" alt="" class="main-imgg">
                </div>
            </div>
        </div>
    </section>
    <!-- personification -->
    <!-- our ghostwriters -->
    <section class="our_ghostwriters_secc all-sec">
        <img src="images/vec2.png" alt="" class="vec2">
        <img src="images/vec8.png" alt="" class="vec8">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-5 m-auto">
                    <img src="images/img3.png" alt="" class="main-img">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-7">
                    <div class="our_ghostwriters_textt">
                        <h2>Our Ghostwriters will Give Words <span>To Your Thoughts, Making It Easy For</span> You To Narrate The Story.</h2>
                        <p>Having trouble putting your ideas into words? Allow our professional ghostwriters to give your story a fresh chapter in life. We'll expertly and swiftly turn your ideas into enticing narratives, ensuring your message reaches your
                            target audience.</p>
                        <ul>
                            <li><span>01</span></li>
                            <li>
                                <h3>Sign Up</h3>
                                <p>Sign up to start effortless storytelling today. Our ghostwriters turn your thoughts into fascinating stories, making narrating them easier.</p>
                            </li>
                        </ul>
                        <ul>
                            <li><span>02</span></li>
                            <li>
                                <h3>Research & Draft</h3>
                                <p>Our process starts with thorough research and precise drafting, assuring each tale element draws the reader's attention.</p>
                            </li>
                        </ul>
                        <ul>
                            <li><span>03</span></li>
                            <li>
                                <h3>First Chapter</h3>
                                <p>The first chapter sets your story's tone. Our ghostwriters craft an engaging opening to hook your readers from page one.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our ghostwriters -->
    <!-- writing experts -->
    <section class="writing_experts_secc all-sec">
        <img src="images/vec9.png" alt="" class="vec9">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <h2>Creating Masterpieces Behind the <span>Scenes – We are your writing experts!</span></h2>
                    <p>At The Native Publishers, we work tirelessly behind the scenes to bring your book to life. Although we may not be seen with bare eyes, our wordsmiths are committed to fulfilling all your bookwriting needs from start to finish. You
                        can rely on our expertise and unwavering support throughout the entire process.</p>
                    <p>Our skilled team of ghostwriters for hire delves into the depths of your concept, meticulously perfecting the plot, fine-tuning the structure of your book, and ensuring that character arcs align seamlessly with the overall concept.
                        With our guidance and expertise, your book will captivate readers and leave a lasting impact. Collaborating with The Native Publishers means gaining access to a team of book-writing experts passionate about storytelling and dedicated
                        to your success.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-6 m-auto">
                    <img src="images/img4.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- writing experts -->
    <!-- packages -->
    <section class="packages_secc slider_icons all-sec">
        <img src="images/vec7.png" alt="" class="vec7">
        <img src="images/vec3.png" alt="" class="vec3">
        <img src="images/vec10.png" alt="" class="vec10">
        <img src="images/vec11.png" alt="" class="vec11">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tiers_textt">
                        <h2>Tiers</h2>
                        <p>Explore our various dynamic services, from simple editing to constructing a whole manuscript. All of them are geared to meet your specific writing needs.</p>
                    </div>
                    <div class="package_slider">
                        <div>
                            <div class="tiers_boxx">
                                <h3>Tier 01</h3>
                                <span>Ghostwriter ( 1-3 YEARS OF EXPERIENCE )</span>
                                <!--<p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip.</p>-->
                                <ul>
                                    <li><i class="fas fa-check-circle"></i>Book-planning sessions</li>
                                    <li><i class="fas fa-check-circle"></i>Complete Ghost-writing and revisions (up to 300 pages)</li>
                                    <li><i class="fas fa-check-circle"></i>Editing and review by a former Big-5 acquisitions editor.</li>
                                    <li><i class="fas fa-check-circle"></i>Bestseller list targeting strategy</li>
                                    <li><i class="fas fa-check-circle"></i>Outline and Story Graph Creation (subject to approval)</li>
                                    <li><i class="fas fa-check-circle"></i>Copyright, Author Page, Dedications Page</li>
                                    <li><i class="fas fa-check-circle"></i>Layout and Formatting</li>
                                    <li><i class="fas fa-check-circle"></i>Typesetting</li>
                                    <li><i class="fas fa-check-circle"></i>Internal Book Design</li>
                                    <li><i class="fas fa-check-circle"></i>Cover Design (Back, Front and Spine)</li>
                                    <li><i class="fas fa-check-circle"></i>1 Print Proof</li>
                                    <li><i class="fas fa-check-circle"></i>Beta Reader testing and revisions based on data</li>
                                    <li><i class="fas fa-check-circle"></i>Reading for cultural accuracy</li>

                                </ul>
                                <a href="javascript:;" class="btn-theme" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Get A Quote
                                    <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                    <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="tiers_boxx">
                                <h3>Tier 02</h3>
                                <span>Ghostwriter ( 5-7 YEARS OF EXPERIENCE )</span>
                                <!--<p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip.</p>-->
                                <ul>
                                    <li><i class="fas fa-check-circle"></i>Book-planning sessions</li>
                                    <li><i class="fas fa-check-circle"></i>Complete Ghost-writing and revisions (up to 300 pages)</li>
                                    <li><i class="fas fa-check-circle"></i>Editing and review by a former Big-5 acquisitions editor.</li>
                                    <li><i class="fas fa-check-circle"></i>Bestseller list targeting strategy</li>
                                    <li><i class="fas fa-check-circle"></i>Outline and Story Graph Creation (subject to approval)</li>
                                    <li><i class="fas fa-check-circle"></i>Copyright, Author Page, Dedications Page</li>
                                    <li><i class="fas fa-check-circle"></i>Layout and Formatting</li>
                                    <li><i class="fas fa-check-circle"></i>Typesetting</li>
                                    <li><i class="fas fa-check-circle"></i>Internal Book Design</li>
                                    <li><i class="fas fa-check-circle"></i>Cover Design (Back, Front and Spine)</li>
                                    <li><i class="fas fa-check-circle"></i>1 Print Proof</li>
                                    <li><i class="fas fa-check-circle"></i>Beta Reader testing and revisions based on data</li>
                                    <li><i class="fas fa-check-circle"></i>Reading for cultural accuracy</li>

                                </ul>
                                <a href="javascript:;" class="btn-theme" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Get A Quote
                                    <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                    <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="tiers_boxx">
                                <h3>Tier 03</h3>
                                <span>Ghostwriter ( 10+ YEARS OF EXPERIENCE )</span>
                                <!--<p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip.</p>-->
                                <ul>
                                    <li><i class="fas fa-check-circle"></i>Book-planning sessions</li>
                                    <li><i class="fas fa-check-circle"></i>Complete Ghost-writing and revisions (up to 300 pages)</li>
                                    <li><i class="fas fa-check-circle"></i>Editing and review by a former Big-5 acquisitions editor.</li>
                                    <li><i class="fas fa-check-circle"></i>Bestseller list targeting strategy</li>
                                    <li><i class="fas fa-check-circle"></i>Outline and Story Graph Creation (subject to approval)</li>
                                    <li><i class="fas fa-check-circle"></i>Copyright, Author Page, Dedications Page</li>
                                    <li><i class="fas fa-check-circle"></i>Layout and Formatting</li>
                                    <li><i class="fas fa-check-circle"></i>Typesetting</li>
                                    <li><i class="fas fa-check-circle"></i>Internal Book Design</li>
                                    <li><i class="fas fa-check-circle"></i>Cover Design (Back, Front and Spine)</li>
                                    <li><i class="fas fa-check-circle"></i>1 Print Proof</li>
                                    <li><i class="fas fa-check-circle"></i>Beta Reader testing and revisions based on data</li>
                                    <li><i class="fas fa-check-circle"></i>Reading for cultural accuracy</li>

                                </ul>
                                <a href="javascript:;" class="btn-theme" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Get A Quote
                                    <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                    <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                                </a>
                            </div>
                        </div>
                        <!--<div>-->
                        <!--    <div class="tiers_boxx">-->
                        <!--        <h3>Tier 01</h3>-->
                        <!--        <span>Per Month</span>-->
                        <!--        <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip.</p>-->
                        <!--        <ul>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Consectetur adipisicing elit</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Consectetur adipisicing elit</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--        </ul>-->
                        <!--        <a href="javascript:;" class="btn-theme" data-bs-toggle="modal"-->
                        <!--            data-bs-target="#exampleModal">-->
                        <!--            SUBMIT YOUR MANUSCRIPT-->
                        <!--            <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">-->
                        <!--            <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--    <div class="tiers_boxx">-->
                        <!--        <h3>Tier 02</h3>-->
                        <!--        <span>Per Month</span>-->
                        <!--        <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip.</p>-->
                        <!--        <ul>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Consectetur adipisicing elit</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Consectetur adipisicing elit</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--        </ul>-->
                        <!--        <a href="javascript:;" class="btn-theme" data-bs-toggle="modal"-->
                        <!--            data-bs-target="#exampleModal">-->
                        <!--            SUBMIT YOUR MANUSCRIPT-->
                        <!--            <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">-->
                        <!--            <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--    <div class="tiers_boxx">-->
                        <!--        <h3>Tier 03</h3>-->
                        <!--        <span>Per Month</span>-->
                        <!--        <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip.</p>-->
                        <!--        <ul>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Consectetur adipisicing elit</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Consectetur adipisicing elit</li>-->
                        <!--            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>-->
                        <!--        </ul>-->
                        <!--        <a href="javascript:;" class="btn-theme" data-bs-toggle="modal"-->
                        <!--            data-bs-target="#exampleModal">-->
                        <!--            SUBMIT YOUR MANUSCRIPT-->
                        <!--            <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">-->
                        <!--            <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- packages -->
    <!-- FAQS START -->
    <section class="faq-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="faq-txt">
                        <h2>Frequently <span>Asked Questions</span></h2>
                        <div class="faq-accordiance">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            What things to consider before choosing a ghostwriter?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">

                                            <p>The internet is crowded with online editing and writing services, so it is really tricky to find out the best ghostwriter that do the job perfectly. Finding a loyal and genuine writing service looks like nearly
                                                impossible. Here are some things that you should consider before choosing a ghostwriter:

                                            </p>
                                            <ul class="faqwrp">
                                                <li>
                                                    <p>
                                                        <span>Price factor: </span> To be very honest, developing a good book is not an easy task as it takes several days and a lot of hard work. So, keep in mind that it also needs a good sum of money.
                                                        Don’t be coaxed by affordable or third-rate ghostwriters.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span>Who owns the rights? </span>It’s your idea and your book, so don’t give your rights to ghostwriters because some of the writers ask for partial rights. Be aware of these kinds of writers and
                                                        don’t give your rights to anyone else.


                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span>Payment Arrangement: </span> Pay ghostwriters in installments. Pay only initial payment and pay the remaining amount if you feel satisfied with their work. So, contract a deal with the ghostwriter
                                                        because it is the best possible option to reduce the risk of scams or fraud.


                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span>Who is In-Charge? </span> If you are working with a ghostwriter, it is called as a collaborative work. However, make sure that he write content according to your requirement and you are the
                                                        boss for adding or removing content from the manuscript or book.


                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span>Should I opt a firm or freelancer? </span>We advise you to choose a firm because they are slightly trustworthy than freelancers. But, don’t forget that there are several qualified and reputable
                                                        freelancers. Most of these freelancers are overbooked so check their availability before hiring in order to decrease the future nuisance. With a firm such as ours, we ensure efficiency and deliver
                                                        your project within the given time period.


                                                    </p>
                                                </li>

                                                <li>
                                                    <p>
                                                        <span>Reputation: </span>Check the reputation of the writing service by evaluating their writers, editors, and connections. Make sure that they have already worked on this kind of matter in the past
                                                        or not. Always protect yourself and make sure that you are working with a renowned freelancer or firm. WHAT TO DO IF I DON’T NEED YOUR COMPLETE GHOSTWRITING PACKAGE?
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            What to do if I don’t need your complete ghostwriting package?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Our company provides ultimate convenience to our users and clients. Feel safe and free to choose our services because we accommodate our clients. We also reduce the rate if you only need fewer services. We will
                                                love to fulfill all your requirements to achieve your goals.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Do I have to grant the credit to the ghostwriter?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>No! That’s why it is named as ghostwriting. No one will ever know that you got help in the writing process. Our firm provides 100 % privacy and completely confidential. We don’t demand any ownership rights of
                                                your content. Even if you earn millions or billions with the help of your book, we are not related to any kind of rights or extra credit. Be aware of some ghostwriters that require extra compensation if
                                                your book earns huge sum.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            Are your services 100 % private?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Yes. We offer complete privacy to our clients and our services are 100 percent secret. We will never exploit your data or information for any other purpose. Our privacy policy is very reliable and comprehensive.
                                                We can also provide a non-disclosure agreement to our clients.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            Is ghostwriting process time-consuming?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Well, it depends on the amount of your content and requirement. It is obvious a high-quality book takes hundreds of hours and several weeks. There are plenty of processes such as gathering of material, planning,
                                                writing sessions, and editing. It is necessary for the uniqueness of the book. A 200-page book will take 5-8 months to complete. However, we can do this quickly for you on your requirement if you pay a handsome
                                                amount.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            Can I add my own writing? Will this help me save money?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Of course, yes. We will happily include and edit the content that you give. It needs little creativity, so if you are creative then you can write too and this thing also helps to save your money.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            What if I only need consultation and feedback on my manuscript?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If you are searching for someone to improve and provide feedback on your work, then our firm also provides these services. We have a qualified team of editors and senior editors who specialized in this work
                                                and give their precious opinion about your work. We can also fix certain problems in our review on your request.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingeight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                                            Do you offer research services?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Yes, we also offer research services to our clients. Our ghostwriting packages include this service. We have a team of scholars and internet researchers that will review your work and synthesize it.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingnine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
                                            Can I choose my preferred ghostwriter? Can I check the sample of their writing?
                                        </button>
                                    </h2>
                                    <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Generally, we are highly qualified and expert at matching users with the best writers. We can provide samples of our best ghostwriters for client satisfaction. We will make sure that you are completely satisfied
                                                with our ghostwriting services.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="faq-img">
                        <img src="images/faq.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQS END -->
    <!-- client secc -->
    <section class="client_secc slider_icons all-sec">
        <img src="images/vec7.png" alt="" class="vec7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>See Why 1,000's Of People <span>Trust Us</span></h2>
                    <p>Read why our customers consistently rate us five stars for our unparalleled quality, support, and dedication to satisfaction.</p>
                    <div class="client-slider">
                        <div>
                            <div class="client_boxx">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>The Native Publishers made my fragmented ideas into a thrilling story. Their book-writing service brought my ideal novel's characters to life. Strongly advise!</p>
                                <ul>
                                    <li><img src="images/r1.jpg" alt=""></li>
                                    <li>
                                        <h3>Sarah Reynolds </h3>
                                        <span>Marketing Manager</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="client_boxx">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>As someone who wants to be an author, I gave The Native Publishers my work. Their editing service enhanced my work for a smooth read. Happy with the outcome!</p>
                                <ul>
                                    <li><img src="images/r2.jpg" alt=""></li>
                                    <li>
                                        <h3>Michael Bennett </h3>
                                        <span>Author</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="client_boxx">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>The Native Publishers's book cover design dazzled me. It beautifully conveyed my story and grabbed readers' interest immediately. Impressive!"</p>
                                <ul>
                                    <li><img src="images/r1.jpg" alt=""></li>
                                    <li>
                                        <h3>Ava Larson </h3>
                                        <span>Storyteller</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="client_boxx">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>We received good publication support from The Native Publishers. Excellent publishing and promotion helped my book prosper. Many thanks for their work!</p>
                                <ul>
                                    <li><img src="images/r1.jpg" alt=""></li>
                                    <li>
                                        <h3>James Donovan </h3>
                                        <span>Publisher</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="client_boxx">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>I received The Native Publishers's fictional storytelling service, which brought my imagination to life. With their help, my story flourished into an amazing adventure.</p>
                                <ul>
                                    <li><img src="images/r2.jpg" alt=""></li>
                                    <li>
                                        <h3>David Mitchell </h3>
                                        <span>Content Writer</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="client_boxx">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>The Native Publishers's audiobook service boosted my novel. We're thrilled with the outcome! Audience expansion increased sales and visibility. Happy with the outcome!</p>
                                <ul>
                                    <li><img src="images/r1.jpg" alt=""></li>
                                    <li>
                                        <h3>Emily Roberts </h3>
                                        <span>Graphic Designer</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client secc -->
    <!-- logo sec -->
    <section class="logo-secc all-sec slider_icons pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Platform We Love Working With</h2>
                    <div class="logo-box_wrppr">
                        <div>
                            <img src="images/logo/1.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/2.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/3.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/4.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/5.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/6.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/7.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/8.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/9.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/10.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/11.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/12.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/1.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/2.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/3.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/4.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/5.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/6.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/7.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/8.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/9.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/10.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/11.png" alt="">
                        </div>
                        <div>
                            <img src="images/logo/12.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- logo sec -->
    <!-- ready to -->
    <section class="ready_to_secc">
        <img src="images/cta.jpg" alt="" class="bg_cta">
        <img src="images/vec12.png" alt="" class="vec12">
        <img src="images/vec13.png" alt="" class="vec13">
        <img src="images/vec14.png" alt="" class="vec14">
        <img src="images/vec15.png" alt="" class="vec15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ready_to_textt">
                        <h2>An Evolving Legacy <br> in Ghostwriting Services</h2>
                        <p>The Native Publishers – we are a dedicated ghostwriting company that delivers excellence and ensures an exceptional customer experience. Check out our extensive portfolio that spans diverse literary genres, encompassing <br> journals,
                            cookbooks, memoirs, and captivating fiction. Through our unwavering commitment, we endeavor to craft timeless content that resonates with readers and makes a lasting impression.
                        </p>
                        <ul>
                            <li>
                                <a href="javascript:;" onclick="onclickpopup()" class="btn-theme1">Live Chat
                                    <img src="images/comment-orange.png" alt="img" />
                                </a>
                            </li>
                            <li>
                                <a href="tel:(628) 256-4002" class="btn-theme1">(628) 256-4002
                                    <img src="images/headphones.png" alt="img" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ready to -->
    <!-- contact start -->
    <section class="contact-sec">
        <img src="images/vec17.png" alt="" class="vec17">
        <img src="images/vec18.png" alt="" class="vec18">
        <img src="images/vec3.png" alt="" class="contact-vec3 book-icon">
        <img src="images/vec16.png" alt="" class="contact-vec10">
        <div class="container">
            <div class="row cntct-outer align-items-center">
                <div class="col-lg-7">
                    <div class="contact-info">
                        <h2><span>Need Assistance?</span>Get in Touch with Us!
                        </h2>
                        <p>While we're good with smoke signals, there are simpler ways for us to get in touch and answer your questions.</p>

                        <div class="contact-actbtn">
                            <a href="" class="btn-theme" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                SCHEDULE A CALL
                                <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                            </a>
                            <a href="tel:(628) 256-4002">
                                <img src="images/headphn-white.png" alt="">
                                (628) 256-4002</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-form theme-heading">
                        <h2><span>Contact</span> Us</h2>
                        <form method="post" class="form-get-quote" action="sendmail/sendmail.php">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                            <input type="hidden" name="Form" value="Contact Form (https://thenativepublishers.com/ghostwriting-service/)">
                            <input type="text" placeholder="Enter Your Name" name="name" required>
                            <input type="email" placeholder="Enter Your Email" name="email" required>
                            <input type="tel" placeholder="Enter Your Phone" name="phone" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" minlength="10" required>
                            <textarea name="message" placeholder="Type Your Message Here"></textarea>
                            <button class="btn-theme" type="submit" name="send_reserve_req">Submit Now
                                <img src="images/menuscript-icon.png" class="normal-icon" alt="">
                                <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->
    <!-- get in touch -->
    <section class="get_in_touch">
        <img src="images/vec7.png" alt="" class="vec7">
        <img src="images/vec10.png" alt="" class="vec10">
        <img src="images/vec19.png" alt="" class="vec19">
        <img src="images/vec20.png" alt="" class="vec20">
        <img src="images/vec11.png" alt="" class="vec11">
        <img src="images/bg1.png" alt="" class="main_imgg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-7 m-auto">
                    <div class="get_textt">
                        <h2>Get In Touch with <br> a Ghostwriter Today!</h2>
                        <p>Unlock your literary dreams with our professional ghostwriting services. Our talented ghostwriters for hire are ready to breathe life into your vision. Trust the leading ghostwriting company – The Native Publishers, to transform
                            your thoughts into captivating narratives. Contact us today and let your story take flight!</p>
                        <div class="contact-actbtn">
                            <a href="" class="btn-theme" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                GET A QUOTE
                                <img src="images/menuscript-icon.png" class="normal-icon" alt="Icon">
                                <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon">
                            </a>
                            <a href="tel:(628) 256-4002">
                                <img src="images/headphn-white.png" alt="">
                                (628) 256-4002</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-5">
                    <div class="get_imgg">
                        <img src="images/mobl1.png" alt="">
                        <img src="images/mbl-shadow.png" alt="" class="mbl-shadow">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="get2_img">
                        <img src="images/laptop-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-6 m-auto">
                    <div class="get_textt">
                        <h2>An Evolving Legacy <br> in Ghostwriting Services</h2>
                        <p>The Native Publishers – we are a dedicated ghostwriting company that delivers excellence and ensures an exceptional customer experience. Check out our extensive portfolio that spans diverse literary genres, encompassing journals,
                            cookbooks, memoirs, and captivating fiction. Through our unwavering commitment, we endeavor to craft timeless content that resonates with readers and makes a lasting impression.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch -->
    <!-- footer -->
    <footer>
        <img src="images/footer-img.jpg" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-3">
                    <div class="footer_info">
                        <img src="images/thenativepublishers-dark.png" alt="img" style="max-width: 86%;">
                        <p>We offer comprehensive publishing solutions to help you bring your literary masterpiece to the world.</p>
                        <!--<img src="images/ft-img.png" alt="img">-->
                        <!--<span>See our 24 reviews on <i class="fas fa-star"></i>-->
                        <!--    <p>Trustpilot</p>-->
                        <!--</span>-->
                        <ul class="logsthird">
                            <li><img src="images/dmca.png" alt="img"></li>
                            <li><a href="https://www.trustpilot.com/review/thenativepublishers.com?stars=4&stars=5" target="_blank"><img src="images/trust-logo.svg" alt="img" class="trist"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-3">
                    <div class="footer_links contctftr">
                        <h3>Contact</h3>
                        <ul class="sfd">
                            <li><a href="tel:(628) 256-4002"><i class="fas fa-phone"></i>(628) 256-4002</a></li>
                            <li><a href="mailto:info@thenativepublishers.com"><i class="fas fa-envelope"></i>info@thenativepublishers.com</a></li>
                            <li><a href="javascript:;"><i class="fas fa-map-marker-alt" aria-hidden="true"></i><b>Mailing Address:</b>100 Pine St Suite 1150-1151 , <br> San Francisco, CA 94111 </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-3 offrftr">
                    <div class="footer_links">
                        <h3>We Offer</h3>
                        <ul>
                            <li><a href="https://thenativepublishers.com/book-writing.php" data-tbb="edit1">Writing</a></li>
                            <li><a href="https://thenativepublishers.com/book-publishing.php" data-tbb="edit4">Publishing</a></li>
                            <li><a href="https://thenativepublishers.com/book-marketing.php" data-tbb="edit4">Marketing</a></li>
                            <li><a href="https://thenativepublishers.com/proofreading.php" data-tbb="edit2">Proofreading</a></li>
                            <li><a href="https://thenativepublishers.com/cover-design.php" data-tbb="edit3">Cover Design</a></li>
                            <li><a href="https://thenativepublishers.com/formatting.php" data-tbb="edit4">Formatting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-3 scilftr">
                    <div class="footer_links line_codee">
                        <h3>Social Links</h3>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/people/The-Native-Publishers/100090333660341/" target="_blank">
                                    <span>
                                        <i class="fab fa-facebook-f"></i>
                                    </span>Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/thenativepublishers/" target="_blank">
                                    <span><i class="fab fa-instagram"></i></span>Instagram</a>
                            </li>
                            <li><a href="http://www.linkedin.com/company/the-native-publishers/" target="_blank"><span><i class="fab fa-linkedin-in"></i></span>Linkedin</a>
                            </li>
                            <li><a href="https://twitter.com/NativePub" target="_blank"><span><i class="fab fa-twitter"></i></span>Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><a href="/terms-conditions">Terms &
                                    Conditions</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p>©2024 The Native Publishers, All Rights Reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- Popupform -->
    <div class="modal fade p-0" tabindex="-1" id="exampleModal">
        <div class="modal-md modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close btn-close-ctm" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="logo-pop text-center mb-2 mt-3">
                        <img src="images/thenativepublishers-dark.png" alt="The Native Publishers" style="max-width: 56%;">
                    </div>
                    <form method="post" class="form-get-quote" action="sendmail/sendmail.php">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                        <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                        <input type="hidden" name="Form" value="POPUP Form (https://thenativepublishers.com/ghostwriting-service/)">
                        <div class="header-form">
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <div class="form-group">
                                        <input type="text" required="" name="name" placeholder="Enter your Name" required>
                                        <input type="email" required="" name="email" placeholder="Enter your Email" required>
                                        <input class="phone" required="" type="tel" name="phone" placeholder="Phone Number" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" minlength="10" required>
                                        <textarea rows="4" placeholder="Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mt-2 text-center">
                                        <button class="btn-theme" name="send_reserve_req" type="submit">SUBMIT NOW<img src="images/menuscript-icon.png" class="normal-icon" alt="Icon"> <img src="images/menuscript-icon-orange.png" class="hover-icon" alt="Icon"></button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Popupform -->

    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="js/wow.js"></script> -->
    <script src="slick/slick.js"></script>
    <script src="slick/slick.min.js"></script>
    <!-- <script src="js/jquery.slicknav.js"></script> -->
    <script src="js/fancybox.js"></script>
    <script src="js/font-awesome.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/font.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
        const phoneInputField = document.querySelectorAll(".phone");
        phoneInputField.forEach((item) => {
            window.intlTelInput(item, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
        })
    </script>
    <script>
        setTimeout(function() {

            var s = document.createElement("script");
            s.type = "text/javascript";
            s.src = "https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132";
            s.id = "ze-snippet";
            $("html").append(s);


        }, 5000);


        function onclickpopup() {
            $zopim.livechat.window.toggle();
        }
    </script>
</body>

</html>