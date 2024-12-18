<?php
include "include/header-lp2.php";


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
<section class="our-banner">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-7">
                    <div class="info-banner">
                        <h1><span>Best Book Publishing Services</span>
                            <strong>AT AFFORDABLE PRICES! </strong>
                        </h1>
                        <ul>
                            <li>Professional book publishers, writers, editors and proofreaders</li>
                            <li>Publish a book on Amazon, Kindle, Barnes & Noble, Google Books, and More</li>
                            <li>Premium Book Cover Design</li>
                            <li>Effective Book Marketing Strategies</li>
                            <li>Self-Publish Your Book on Amazon</li>
                        </ul>

                        <div class="btn-block">
                            <a href="javascript:$zopim.livechat.window.show();" class="btn btn-light chat">
                                Live Chat
                            </a>
                            <a href="javascript:.html" name="0" data-fancybox="" data-src="#popupform"
                                class="btn btn-dark open-popup various">
                                Get Started
                            </a>
                            <img src="assets/publishing-new/images/images-bn-logs.png"
                                style="background: #fff;padding: 0 17px;margin-top: 33px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="info-contact-banner">
                        <div class="head-cb">
                            <h6>Done writing your book?</h6>
                            <h4>
                                LET'S PUBLISH IT NOW!
                                <!-- <strong>---For As Low As $399---</strong> -->
                            </h4>
                            <div class="seal">
                                <img src="assets/publishing-new/images/images-form-seal.png" alt="">
                            </div>
                        </div>
                        <div class="info-form" data-form-type="signup_form">
                            <form action="sendmail/send_mail_lp.php" class="validate-banner leadForm" method="post">
                                <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="required form-control" name="name"
                                            placeholder="Full Name">
                                            <input type="email" class="required form-control email" name="email"
                                            placeholder="Email Address">
                                        <input type="tel" class="required form-control  number ftpn" name="pnumber"
                                            placeholder="Phone No">
                                        <textarea autocomplete="nope" name="message"
                                            class="form-control"
                                            placeholder="To help us understand better, enter a brief description about your project."></textarea>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="btnsub show-s">
                                            <div id="formResult"></div>
                                            <button type="submit" name="send_reserve_req" class="btn btn-dark">Activate Your
                                                Coupon Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-btm">
            <div class="container">
                <h5>KEEP ALL THE RIGHTS &amp; REVENUES OF YOUR BOOK. GET PUBLISHED TODAY!</h5>
            </div>
        </div>
    </section>
    <section class="our-allow">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-3">
                    <h2>We Publish <br>
                        Your Book <br>
                        On All Leading <br>
                        Platforms!
                    </h2>
                </div>
                <div class="col-md-9">
                    <img src="assets/publishing-new/images/images-our-allow.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="our-publishing">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-center zila">
                BOOK PUBLISHING SERVICES <br>
                Trouble-Free & Budget-Friendly <br>
                Get your book published now with <br> The Native Publishers! 
            </h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="txt">
                        <ul>
                            <li><img src="assets/publishing-new/images/images-our-pub-ul.png" alt=""> A
                                premium cover to get your book noticed.</li>
                            <li><img src="assets/publishing-new/images/images-our-pub-ul.png" alt="">
                                EBook conversion to any format including HTML.</li>
                            <li><img src="assets/publishing-new/images/images-our-pub-ul.png" alt="">
                                Keep all revenues from your eBooks with our suggested price.</li>
                            <li><img src="assets/publishing-new/images/images-our-pub-ul.png" alt=""> The
                                final step to get your eBook selling is publishing.</li>
                            <li><img src="assets/publishing-new/images/images-our-pub-ul.png" alt="">
                                Marketplace integration by having accounts on all platforms.</li>
                            <li><img src="assets/publishing-new/images/images-our-pub-ul.png" alt="">
                                Free setup for those new to the ghostwriting industry.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <p>There has been a tremendous change in the publishing industry over the past decade as a result of
                        digital disruption, the rise of audiobooks, unrelenting competition, production problems, and
                        excessive promotion. Traditional publishers are extremely difficult to approach, let alone offer
                        you a contract. Publishing a book is no joke. Authors spend a lot of energy in writing a book.
                        By the time the draft is complete, they’re drained. Choosing The Native Publishers to get your book
                        published is the way to go for new and established writers!</p>
                    <div class="btn-block">
                        <a href="javascript:$zopim.livechat.window.show();" class="btn btn-light chat">
                            Live Chat
                        </a>
                        <a href="javascript:.html" name="0" data-fancybox="" data-src="#popupform"
                            class="btn btn-dark open-popup various">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-author">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="zila">
                        Get your book published by The Native Publishers without <br>the stress of any hidden cost!
                    </h2>
                    <p>We will edit, format, publish, print and distribute your book worldwide at Amazon, Kindle, Apple
                        Books and Barnes & Noble. We also offer best self-publishing service.</p>
                    <div class="seal">
                        <img src="assets/publishing-new/images/images-form-seal.png" alt="">
                    </div>
                    <div class="btn-block">
                        <a href="javascript:$zopim.livechat.window.show();" class="btn btn-light chat">
                            Live Chat
                        </a>
                        <a href="javascript:.html" name="0" data-fancybox="" data-src="#popupform"
                            class="btn btn-dark open-popup various">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-process">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-center zila">
                The Native Publishers Book <br>
                Publishing Process
            </h2>
            <h3>The Native Publishers book publishing process is a simple six-step process that has
                been streamlined over the years to make the entire experience smooth, functional, and easy to understand
                for our clients. Check out our publishing process down below.</h3>
            <div class="owl-process owl-carousel owl-theme">
                <div class="item">
                    <div class="process">
                        <h5>step 01</h5>
                        <h4>Connect <br> with Us</h4>
                        <p>The first step of the process is for you to leave us a message online with details of your
                            project. We will then get back to you and answer any questions you may have.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="process">
                        <h5>step 02</h5>
                        <h4>Draft <br> Review</h4>
                        <p>The second step is when you submit to us your book’s final and complete draft and our experts
                            will review it to see how they can market it after publishing.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="process">
                        <h5>step 03</h5>
                        <h4>Editing, Proofreading, <br> &amp; Formatting</h4>
                        <p>The third step is when your book’s final draft is handed over to our team of editors and
                            formatters wherein they check for any errors and format the book to industry standard.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="process">
                        <h5>step 04</h5>
                        <h4>Book Cover Design</h4>
                        <p>The fourth step is when our creative team of designers get to work on designing your book’s
                            front and back covers to make it worthy of being picked up from a shelf.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="process">
                        <h5>step 05</h5>
                        <h4>Book <br> Publishing</h4>
                        <p>The fifth step is when we finally publish your book! We’ll publish your book in print,
                            digitally (on all platforms), and even offer print-on-demand services.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="process">
                        <h5>step 06</h5>
                        <h4>Profit!</h4>
                        <p>The sixth step is quite simple: you sit back and enjoy the revenue generated by your
                            published book after we’re done distributing and promoting it to maximize sales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-amazon">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="zila">Getting a Book Published Has Never Been This Easy</h2>
            <h3>Let us take away the hassle and publish your book.</h3>
            <div class="btn-block">
                <a href="javascript:$zopim.livechat.window.show();" class="btn btn-light chat">
                    Live Chat
                </a>
                <a href="javascript:.html" name="0" data-fancybox="" data-src="#popupform"
                    class="btn btn-dark open-popup various">
                    Get Started
                </a>
            </div>
            <a class="tel" href="tel:+1(628) 256-4002">
                <img src="assets/publishing-new/images/images-amazon-tel.png" alt="">
                 +1(628) 256-4002
            </a>
        </div>
    </section>
    <section class="our-testimonial">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="zila">
                REVIEWS FROM OUR CLIENTS <br>
                See what our clients have to say about us!
            </h2>
            <div class="owl-testimonial owl-carousel owl-theme">
                <div class="item">
                    <div class="info-testi">
                        <p>“I’ve had several of my books ghostwritten, edited, formatted, designed, and published
                            through The Native Publishers! They’ve taken my dreams of becoming a
                            writer by profession and made it a reality and now all I have to do is come up with new book
                            ideas.”</p>
                        <h4>Arnold Moss</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="info-testi">
                        <p>“As a writer who writes a lot of books every month, I never have the time to edit my book let
                            alone go after publishing agencies to notice my manuscript.
                            The Native Publishers has taken a load off my back with their editing and
                            publishing services!”</p>
                        <h4>Lindsey Page</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="info-testi">
                        <p>“It’s not easy keeping up with readers’ demands for sequels to a book series you start.
                            That’s why I outsource some of my writing projects to
                            The Native Publishers! Their team is excellent with both the writing and
                            the editing and they publish my work for me too!”</p>
                        <h4>Gabriel Watts</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-counter">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-8 offset-4">
                    <div class="row">
                        <div class="col-md-3">
                            <h6>10k+</h6>
                            <p>Books Published</p>
                        </div>
                        <div class="col-md-3">
                            <h6>#1
                            </h6>
                            <p>times NYT <br> Bestsellers</p>
                        </div>
                        <div class="col-md-3">
                            <h6>8k+ </h6>
                            <p>Bestsellers</p>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "include/footer-lp2.php";
?>