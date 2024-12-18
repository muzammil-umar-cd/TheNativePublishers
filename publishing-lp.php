<?php
include "include/header.php";
include 'sendmail/sendmail_publishing_lp.php';
?>

<section class="main-banner">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 over">
                    <div class="back-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-heading">
                        <h3>Comprehensive Publishing Solutions</h3>
                        <h1><span>Top-Notch </span>Book <br> Publishing Services For Talented, Independent Authors</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="images/banner-logo.png" alt class="img-fluid logo-img">
                </div>
            </div>
        </div>
    </section>
    <section class="main-slider-form aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="slider-form" data-form-type="signup_form">
                        <h3>Avail 50% Off On Our Publishing Services</h3>
                        <p>Fill in your details to reserve your discount</p>
                        <form class="offr-frm" method="post">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <div class="icon-bg">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <input type="text" name="name" placeholder="Full Name*" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <div class="icon-bg">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="email" name="email" placeholder="Email Address*" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <div class="icon-bg">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <input type="tel" name="phone" maxlength="10" minlength="10" class="form-control" placeholder="Phone*" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="form-group form-send-btn">
                                        <div id="formResult"></div>
                                        <button type="submit" name="send_reserve_req" class="btn send-btn">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best-seller">
        <div class="container">
            <div class="row back-seller">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="seller-heading">
                        <h2><span>READY TO LAUNCH</span></h2>
                        <h2 class="stres">YOUR BOOK WITH US</h2>
                        <p>At The Native Publishers , we provide all the services to help authors publish their books, from printing to distribution and marketing. Over the years, we have worked with many writing professionals and published books in different
                            genres. With top expertise in the book publishing profession, we have successfully transformed several writers into published book writers globally.
                        </p>
                        <a href="javascript:;" class="open-popup">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="seller-head">
                        <h2><span>AVAIL 50% OFF</span><br> ON ALL PACKAGES
                        </h2>
                        <div class="seller-list">
                            <div class="col-md-6">
                                <ul>
                                    <li class="first">Autobiography Writing</li>
                                    <li>Fiction Writing</li>
                                    <li>Non-Fiction Writing</li>
                                    <li>Business Book Writing</li>
                                    <li class="last">Editing Services</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="first">Proofreading Services</li>
                                    <li>Book Cover Designing</li>
                                    <li>Book Layout Designing</li>
                                    <li>Book Publishing</li>
                                    <li class="last">Book Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="seller-image">
                        <img src="images/seller-book.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="story-heading">
                        <h3>WE ASSISTED THOUSANDS OF WRITERS</h3>
                        <h1>TO GET THEIR WORK PUBLISHED.
                            <br>IT’S YOUR <span>TURN NOW!</span></h1>
                        <p>Have problems getting your masterpiece published the right way? Don’t worry, we are here to help! Our <br> publishing experts and professionals can provide the best publishing options to reach your audience in a <br> fast and easy
                            way.
                        </p>
                    </div>
                </div>
            </div>
            <ul class="tabs">
                <li data-tab-target="#fiction" class="active tab">Fiction</li>
                <li data-tab-target="#non-fiction" class="tab">Non-Fiction</li>
                <li data-tab-target="#memoir" class="tab">Memoir</li>
                <li data-tab-target="#biography" class="tab">Biography</li>
                <li data-tab-target="#info" class="tab">Informative</li>
                <li data-tab-target="#romance" class="tab">Romance</li>
            </ul>
            <div class="tab-content">
                <div id="fiction" class="active one" data-tab-content>
                    <div class="books">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/1.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/2.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/3.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                        <div class="row uper-space">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/4.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/5.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/6.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                    </div>
                    <button class="btn-portfolio open-popup">Activate Your Coupon</button>
                </div>
                <div id="non-fiction" class="one" data-tab-content>
                    <div class="books">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/1_2.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/2_1.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/3_1.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                        <div class="row uper-space">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/4_1.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/5_2.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/6_1.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                    </div>
                    <button class="btn-portfolio open-popup">Activate Your Coupon</button>
                </div>
                <div id="memoir" data-tab-content class="one">
                    <div class="books">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/1_1.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/2_2.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/3_2.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                        <div class="row uper-space">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/4_4.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/5_4.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/6_2.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                    </div>
                    <button class="btn-portfolio open-popup">Activate Your Coupon</button>
                </div>
                <div id="biography" class="one" data-tab-content>
                    <div class="books">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/1_3.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/2_3.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/3_3.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                        <div class="row uper-space">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/4_5.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/5_1.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/6_4.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                    </div>
                    <button class="btn-portfolio open-popup">Activate Your Coupon</button>
                </div>
                <div id="info" class="one" data-tab-content>
                    <div class="books">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/1_5.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/2_5.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/3_4.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                        <div class="row uper-space">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/4_3.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/5_3.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/6_3.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                    </div>
                    <button class="btn-portfolio open-popup">Activate Your Coupon</button>
                </div>
                <div id="romance" class="one" data-tab-content>
                    <div class="books">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/1_4.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/2_4.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/3_5.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                        <div class="row uper-space">
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/4_2.png">
                            </div>
                            <div class="col-md-4 col-6">
                                <img class="smooth" src="images/5_5.png">
                            </div>
                            <div class="col-md-4 col-6 skip">
                                <img class="smooth" src="images/6_5.png">
                            </div>
                        </div>
                        <div class="col-md-12"><img class="shelf" src="images/shelf.png">
                        </div>
                    </div>
                    <button class="btn-portfolio open-popup">Activate Your Coupon</button>
                </div>
            </div>
        </div>
        
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="services-head">
                        <h2>WE AIM TO PROVIDE YOU WITH OUR PREMIUM  AND</h2>
                        <h1><span class="text-white">PUBLISHING SERVICES </span>TO PROCURE YOUR TOP WATCH WRITING GOALS.</h1>
                        <div class="seller-list">
                            <div class="col-md-6">
                                <ul>
                                    <li class="first"><i class="fa fa-check"></i>Autobiography Writing</li>
                                    <li><i class="fas fa-check"></i>Fiction Writing</li>
                                    <li><i class="fas fa-check"></i>Non-Fiction Writing</li>
                                    <li><i class="fas fa-check"></i>Business Book Writing</li>
                                    <li class="last"><i class="fas fa-check"></i>Editing Services</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="first"><i class="fas fa-check"></i>Proofreading Services</li>
                                    <li><i class="fas fa-check"></i>Book Cover Designing</li>
                                    <li><i class="fas fa-check"></i>Book Layout Designing</li>
                                    <li><i class="fas fa-check"></i>Book Publishing</li>
                                    <li class="last"><i class="fas fa-check"></i>Book Marketing</li>
                                </ul>
                            </div>
                        </div>
                        <div class="service-btn">
                            <div class="left">
                                <a href="javascript:$zopim.livechat.window.show();" class="live_chatt">Consult With an Expert</a>
                            </div>
                            <div class="right">
                                <a href="javascript:;" class="open-popup">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/service-book.png">
                </div>
            </div>
        </div>
    </section>
    <section class="process">
        <div class="container">
            <div class="process-heading">
                <h1>FOLLOW OUR CREATIVE PUBLISHING PROCESS</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="process-step">
                            <img src="images/icon1.png">
                            <h2>01</h2>
                            <span>Draft Submission</span>
                            <p>
                                The writer submits the draft to us and discusses the details of the project, including printing and publishing.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-step">
                            <img src="images/icon2.png">
                            <h2>02</h2>
                            <span>Proofreading and Editing</span>
                            <p>
                                Once the draft is received, we assign an experienced editor to review, analyze, proofread, and edit the content thoroughly.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-step">
                            <img src="images/icon3.png">
                            <h2>03</h2>
                            <span>Designing the Book</span>
                            <p>
                                We design the book, keeping all important aspects in mind. All the books are designed with front and back covers, author bios, table of contents, etc.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-step">
                            <img src="images/icon4.png">
                            <h2>04</h2>
                            <span>Publishing and Promotion</span>
                            <p>
                                After getting the approval of the design, the manuscript is published in the clients’ required formats.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial text-center">
        <div class="container">
            <div class="slider" id="featured-content" data-slick-index="3">
                <div class="item">
                    <div class="item-back1">
                        <p>Great solutions in good discount. Proud of myself for choosing these services. Thanks to their tremendous writing team!
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-back2">
                        <p>They have helped me achieve my long lost dream to publish a book. They are market professionals who know how to create bespoke stories.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-back3">
                        <p>I needed assistance on my story and I must say, they really know how to create compelling books. Totally recommended!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer_client_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/logo1.png" class="img-fluid">
                    <img src="images/logo2.png" class="img-fluid">
                    <img src="images/book-logo.png" class="img-fluid apple-logo">
                    <img src="images/logo4.png" class="img-fluid">
                    <img src="images/logo5.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="footer-form">
        <div class="container">
            <div class="form-cont">
                <div class="form-head">
                    <form id="quoteForm" method="POST">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                        <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                        <h1>Connect with an Expert</h1>
                        <h2>We create content that converts every asset which aligns with your commercial goals, speaks directly to your audience and builds a conversation around your brand.
                        </h2>
                        <div class="row">
                            <div class=" col-md-12 form-group">
                                <input type="text" class="form-control" name="name" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6 form-group">
                                <input type="tel" class="form-control" name="phone" maxlength="10" minlength="10" placeholder="Phone" required>
                            </div>
                            <div class=" col-md-6 form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="main-message" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="fld-btn">
                            <button type="submit" name="send_reserve_req" class="btn-form">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    


    
    <div id="entry-popup" class="desktop-popup" style="display: none;">
    <div class="container">
        <div class="entry-box" data-form-type="popup_form">
			<form method="post" class="signupForm">
			    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
				<a href="javascript:;" id="entry-box_close" class="closed"><i class="fa fa-times"></i></a>
				<div class="col-sm-12 entry-right">
                    <div class="text-1">
                        <h1><span class="red"> </span>ACTIVATE THIS OFFER TO AVAIL <br>50% DISCOUNT! </h1>
                        <p>Last <b>9</b><strong> COUPONS LEFT</strong></p>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" data-validation="required" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" data-validation="required" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="tel" class="form-control" name="phone" maxlength="10" minlength="10" placeholder="Phone" data-validation="required" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 p-0">
                <textarea class="form-control message-field" name="message" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="form-group form-btn">
                        <div id="formResult"></div>
                        <div class="clearfix"></div>
                        <button type="submit" class="entery-submit desk-btn" id="send_reserve_req" name="send_reserve_req">
                            Reserve your discount
                        </button>
                    </div>
                </div>
            </form>

            <div class="right-img">
                <img src="images/popup-girl.png">
            </div>
        </div>
    </div>
</div>


<?php
include "include/footer.php";
?>