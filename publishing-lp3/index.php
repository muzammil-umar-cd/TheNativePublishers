<?php
session_start();

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

<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge" />
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <meta name=description content="">
    <title>Hire Professional Book Writers | The Native Publishers</title>
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel=stylesheet>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel=stylesheet>
     <!-- Start of designneshelp Zendesk Widget script -->
     <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"></script>
    <!-- End of designneshelp Zendesk Widget script -->
</head>

<body>
    <header>
        <div class=main-header>
            <div class=container-fluid>
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-2 text-left">
                        <a href=./ class=logo>
                            <img src=assets/images/logo.png alt="..." loading="lazy">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-10 text-right mob-btnn">
                        <a class="btn btn-1 ms-3 popup-btn" href="tel:(628) 256 4002">
                            <span>(628) 256 4002</span>
                            <span>Call Now!</span>
                        </a>
                        <a href=javascript: class=btn-a onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class=mainBanner style=background-image:url(assets/images/main-banner.webp)>
        <div class=container-fluid>
            <div class="row align-items-center">
                <div class="col-md-7 wow fadeInDown">
                    <div class=ban-txt>
                        <h1><span class=big>Most </span><span>Trusted</span> Self-Publishing Agency <br>in
                            <span>USA</span> & <span>CANADA</span>
                        </h1>
                        <p>Unlock your book's potential with our comprehensive book publishing services. From manuscript
                            evaluation to meticulous proofreading, our expert team ensures your voice resonates with
                            readers globally. Publish with confidence and make your words heard worldwide.</p>
                        <ul class=shape-list>
                            <li>
                                <p><i class="fa-solid fa-check"></i>Trusted By 300+ Authors</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-check"></i>60+ Genre Dedicated Writers</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-check"></i>10+ Years of Experience</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-check"></i>250+ International Published Books</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-check"></i>100% Satisfaction Guaranteed</p>
                            </li>
                        </ul>
                        <ul class="sellbook-pic index-slider22">
                            <li><img src=assets/images/bb1.webp alt="..." loading="lazy"></li>
                            <li><img src=assets/images/bb2.webp alt="..." loading="lazy"></li>
                            <li><img src=assets/images/bb3.webp alt="..." loading="lazy"></li>
                            <li><img src=assets/images/bb4.webp alt="..." loading="lazy"></li>
                            <li><img src=assets/images/bb5.webp alt="..." loading="lazy"></li>
                            <li><img src=assets/images/bb6.webp alt="..." loading="lazy"></li>
                        </ul>
                    </div>
                    <div class=top-field></div>
                </div>
                <div class=col-md-5>
                    <div class=banner_form>
                        <h4>Big Savings: Exclusive 50% Discount <br> <span>last 7 coupons left!</span></h4>
                        <form action="../sendmail/sendmail_lp3.php" method="Post">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                            <input type="hidden" name="city"
                                value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                            <input type="hidden" name="country"
                                value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                            <input type="hidden" name="internet_connection"
                                value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                            <input type="hidden" name="zipcode"
                                value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                            <input type="hidden" name="region"
                                value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                            <input type="hidden" name="url"
                                value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                            <ul>
                                <li>
                                    <input type=text name="name" required placeholder=Name>
                                </li>
                                <li>
                                    <input type=email name="email" required placeholder="Email Address">
                                </li>
                                <li>
                                    <input type=tel name="phone" required placeholder="Phone No.">
                                </li>
                                <li>
                                    <textarea rows=5 type=text name="message" required placeholder=Messages.></textarea>
                                </li>
                                <button class="btn-b btn-1" name="send_reserve_req" type="submit">
                                    <span>Activate Your Coupon Now!</span>
                                </button>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sell-book wow fadeInUp">
        <div class=container-fluid>
            <div class="row book-box align-items-center">
                <div class=col-md-2>
                    <div class=sell-h>
                        <h2>Sell Your <br><span>Book With</span></h2>
                    </div>
                </div>
                <div class=col-md-10>
                    <ul class="sellbook-pic index-slider">
                        <li><img src=assets/images/s1.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s2.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s3.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s4.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s5.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s7.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s8.webp alt="..." loading="lazy"></li>
                        <li><img src=assets/images/s9.webp alt="..." loading="lazy"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="shape pad-tb" style=background-image:url(assets/images/service-banner.webp)>
        <div class=container>
            <div class=row>
                <div class="col-md-6 wow fadeInRight">
                    <div class="shape-h m1-h p1 p5">
                        <h2>Kickstart Your Publishing Journey!</h2>
                        <p>Starting your journey of publishing a book on platforms like Amazon and Barnes & Noble can be
                            a challenging path, especially for those who are new to this ground. After investing your
                            time and effort into writing a book, it's disheartening to see it gather dust or, even
                            worse, be mishandled due to a lack of knowledge about the complexities of the
                            self-publishing industry.
                            <br><br>
                            Why not let the experienced professional handle this complicated process? You can relax
                            while we ensure your manuscript transforms into a beautifully designed book available at the
                            Amazon KDP store, complete with an enticing cover and a cohesive theme throughout its pages.
                            Let's collaborate to turn your dream into a reality today.
                        </p>
                        <a href=# class="btn-b popup-open-layout4">Get a Quote</a>
                        <a href=# onclick=$zopim.livechat.window.toggle() class=btn-c>Live Chat</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInLeft text-center">
                    <ul class=counter>
                        <li>
                            <img src=assets/images/cc1.webp alt="..." loading="lazy">
                            <span class=count>60</span><span>+</span>
                            <h3>American Writers</h3>
                        </li>
                        <li>
                            <img src=assets/images/cc2.webp alt="..." loading="lazy">
                            <span class=count>10</span><span>+</span>
                            <h3>YEARS OF EXPERIENCE</h3>
                        </li>
                        <li>
                            <img src=assets/images/cc3.webp alt="..." loading="lazy" g>
                            <span class=count>250</span><span>+</span>
                            <h3>INTERNATIONALLY PUBLISHED BOOKS</h3>
                        </li>
                        <li>
                            <img src=assets/images/cc4.webp alt="..." loading="lazy">
                            <span class=count>300</span><span>+</span>
                            <h3>BOOKS WRITTEN</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="testttt home-cta" style=background-image:url(assets/images/banner/cta-banner.webp)>
        <div class=container>
            <div class="row align-items-center">
                <div class=col-md-12>
                    <div class=testttt-22>
                        <div class="cta-h m1-h p1 text-center">
                            <h5>LEADING PROVIDER OF THE COMPREHENSIVE BOOK PUBLISHING SERVICES</h5>
                            <p>With a team of experienced professionals, we take pride in offering a wide range of
                                solutions tailored to meet your unique needs.</p>
                        </div>
                    </div>
                </div>
                <div class=col-md-5>
                    <div class=cta-h-img>
                        <img src=assets/images/img-2.webp alt="..." loading="lazy">
                    </div>
                </div>
                <div class=col-md-7>
                    <div>
                        <div class="cta-h m1-h p1">
                            <h5>Why Needing Professional Publishing Services?</h5>
                            <p>The Native Publishers specialize in turning your manuscript into a compelling book that
                                resonates with readers. Our expert editors refine your content, ensuring it's polished
                                to perfection. With visually stunning layouts and custom-designed covers, your book will
                                stand out. We handle distribution across diverse markets and implement targeted
                                marketing strategies to boost visibility. Trust us to bring your literary vision to
                                life. Focus on your writing while our dedicated team takes care of the rest. </p>
                            <a href=# class="btn-d popup-open-layout4">Get a Quote</a>
                            <a href=# onclick=$zopim.livechat.window.toggle() class=btn-c>Live Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="package pad-tb" style=background-image:url(assets/images/service-banner.webp)>
        <div class=container>
            <div class=row>
                <div class="col-md-12 wow fadeInDown">
                    <div class="package-h m1-h text-center pad-btm">
                        <h5>Publishing Bundles</h5>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInLeft">
                    <div class=pack-box>
                        <div class=pack-name>
                            <h3>Basic Package</h3>
                        </div>
                        <div class=main-price>
                            <span class=dollar-s>$</span>
                            <h5>499</h5>
                            <h4 class=cut-price><span class=dollar-ss>$</span>999</h4>
                        </div>
                        <a href=# class="pack-btn popup-open-layout4">GET <span class="key-second off">50% OFF</span>
                            NOW! </a>
                        <div class=pack-list>
                            <ul class=pack-full>
                                <li><i class="fa-solid fa-check"></i> Editing & Proofreading</li>
                                <li><i class="fa-solid fa-check"></i> Typesetting & Layout Adjustment</li>
                                <li><i class="fa-solid fa-check"></i> Formatting (for 50+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> Multiple Revisions</li>
                                <li><i class="fa-solid fa-check"></i> 100% Royalties & Ownership Rights</li>
                                <li><i class="fa-solid fa-check"></i> Publishing on Kindle</li>
                                <li><i class="fa-solid fa-check"></i> eBook Format</li>
                            </ul>
                        </div>
                        <div class="ep_btns text-center">
                            <a class=btn-d href="tel:(628) 256 4002" title>Call Us</a>
                            <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class=pack-box>
                        <div class=pack-name>
                            <h3>Start Up Package </h3>
                        </div>
                        <div class=main-price>
                            <span class=dollar-s>$</span>
                            <h5>999</h5>
                            <h4 class=cut-price><span class=dollar-ss>$</span>1,999</h4>
                        </div>
                        <a href=# class="pack-btn popup-open-layout4">GET <span class="key-second off">50% OFF</span>
                            NOW! </a>
                        <div class=pack-list>
                            <ul class=pack-full>
                                <li><i class="fa-solid fa-check"></i> Editing & Proofreading</li>
                                <li><i class="fa-solid fa-check"></i> Typesetting & Layout Adjustment</li>
                                <li><i class="fa-solid fa-check"></i> Formatting (for 50+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> Multiple Revisions</li>
                                <li><i class="fa-solid fa-check"></i> 100% Royalties & Ownership Rights</li>
                                <li><i class="fa-solid fa-check"></i> Creative Cover Art</li>
                                <li><i class="fa-solid fa-check"></i> Publishing on Amazon and Kindle (with
                                    Optimization)</li>
                                <li><i class="fa-solid fa-check"></i> eBook and Paperback Format</li>
                            </ul>
                        </div>
                        <div class="ep_btns text-center">
                            <a class=btn-d href="tel:(628) 256 4002" title>Call Us</a>
                            <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <div class=pack-box>
                        <div class=pack-name>
                            <img class=best-sell src=assets/images/best.webp alt="..." loading="lazy">
                            <h3>Standard Package</h3>
                        </div>
                        <div class=main-price>
                            <span class=dollar-s>$</span>
                            <h5>1,499</h5>
                            <h4 class=cut-price><span class=dollar-ss>$</span>2,999</h4>
                        </div>
                        <a href=# class="pack-btn popup-open-layout4">GET <span class="key-second off">50% OFF</span>
                            NOW! </a>
                        <div class=pack-list>
                            <ul class=pack-full>
                                <li><i class="fa-solid fa-check"></i> Editing & Proofreading</li>
                                <li><i class="fa-solid fa-check"></i> Typesetting & Layout Adjustment</li>
                                <li><i class="fa-solid fa-check"></i> Formatting (for 50+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> Multiple Revisions</li>
                                <li><i class="fa-solid fa-check"></i> 100% Royalties & Ownership Rights</li>
                                <li><i class="fa-solid fa-check"></i> Creative Cover Art</li>
                                <li><i class="fa-solid fa-check"></i> Price Encrypted Barcode</li>
                                <li><i class="fa-solid fa-check"></i> ISBN (International Standard Book Number)</li>
                                <li><i class="fa-solid fa-check"></i> Publishing on Amazon, Kindle and Barnes & Noble
                                    (with Optimization)</li>
                                <li><i class="fa-solid fa-check"></i> eBook, Paperback & Hardcover Format</li>
                            </ul>
                        </div>
                        <div class="ep_btns text-center">
                            <a class=btn-d href="tel:(628) 256 4002" title>Call Us</a>
                            <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInLeft">
                    <div class=pack-box>
                        <div class=pack-name>
                            <h3>Expert Package</h3>
                        </div>
                        <div class=main-price>
                            <span class=dollar-s>$</span>
                            <h5>3,499</h5>
                            <h4 class=cut-price><span class=dollar-ss>$</span>6,999</h4>
                        </div>
                        <a href=# class="pack-btn popup-open-layout4">GET <span class="key-second off">50% OFF</span>
                            NOW! </a>
                        <div class=pack-list>
                            <h2>
                                EASY PAYMENT PLAN
                                <div class=tooltipw><i class="fa fa-question"></i>
                                    <span class=tooltipwtext><i class="fa-solid fa-caret-right"></i> 50% payment
                                        upfront.<br>
                                        <i class="fa-solid fa-caret-right"></i> Remaining 50% can be paid in 2-3 months
                                        Installments <br>OR<br> <i class="fa-solid fa-caret-right"></i> after the
                                        delivery of 3 chapters.</span>
                                </div>
                            </h2>
                            <ul class=pack-full>
                                <li><i class="fa-solid fa-check"></i> Editing & Proofreading</li>
                                <li><i class="fa-solid fa-check"></i> Typesetting & Layout Adjustment</li>
                                <li><i class="fa-solid fa-check"></i> Formatting (for 50+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> Multiple Revisions</li>
                                <li><i class="fa-solid fa-check"></i> 100% Royalties & Ownership Rights</li>
                                <li><i class="fa-solid fa-check"></i> Creative Cover Art</li>
                                <li><i class="fa-solid fa-check"></i> Price Encrypted Barcode</li>
                                <li><i class="fa-solid fa-check"></i> ISBN (International Standard Book Number)</li>
                                <li><i class="fa-solid fa-check"></i> Publishing on Amazon, Kindle, Barnes & Noble and
                                    Google Books (with Optimization)</li>
                                <li><i class="fa-solid fa-check"></i> 4 pages Authors Dynamic Website</li>
                                <li><i class="fa-solid fa-check"></i> 1 Year Domain & Hosting</li>
                                <li><i class="fa-solid fa-check"></i> 30 - 60 Seconds Video Trailer</li>
                                <li><i class="fa-solid fa-check"></i> eBook, Paperback & Hardcover Format</li>
                            </ul>
                        </div>
                        <div class="ep_btns text-center">
                            <a class=btn-d href="tel:(628) 256 4002" title>Call Us</a>
                            <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class=pack-box>
                        <div class=pack-name>
                            <img class=best-sell src=assets/images/best.webp alt="..." loading="lazy">
                            <h3>Premium Package</h3>
                        </div>
                        <div class=main-price>
                            <span class=dollar-s>$</span>
                            <h5>7,499</h5>
                            <h4 class=cut-price><span class=dollar-ss>$</span>14,999</h4>
                        </div>
                        <a href=# class="pack-btn popup-open-layout4">GET <span class="key-second off">50% OFF</span>
                            NOW! </a>
                        <div class=pack-list>
                            <h2>
                                EASY PAYMENT PLAN
                                <div class=tooltipw><i class="fa fa-question"></i>
                                    <span class=tooltipwtext><i class="fa-solid fa-caret-right"></i> 50% payment
                                        upfront.<br>
                                        <i class="fa-solid fa-caret-right"></i> Remaining 50% can be paid in 2-3 months
                                        Installments <br>OR<br> <i class="fa-solid fa-caret-right"></i> after the
                                        delivery of 3 chapters.</span>
                                </div>
                            </h2>
                            <ul class=pack-full>
                                <li><i class="fa-solid fa-check"></i> Editing & Proofreading</li>
                                <li><i class="fa-solid fa-check"></i> Typesetting & Layout Adjustment</li>
                                <li><i class="fa-solid fa-check"></i> Formatting (for 50+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> Multiple Revisions</li>
                                <li><i class="fa-solid fa-check"></i> 100% Royalties & Ownership Rights</li>
                                <li><i class="fa-solid fa-check"></i> Creative Cover Art</li>
                                <li><i class="fa-solid fa-check"></i> Price Encrypted Barcode</li>
                                <li><i class="fa-solid fa-check"></i> 60 - 90 Seconds Video Trailer</li>
                                <li><i class="fa-solid fa-check"></i> ISBN (International Standard Book Number)</li>
                                <li><i class="fa-solid fa-check"></i> Publishing on Amazon, Kindle, Barnes & Noble,
                                    Google Books and Smashwords (with Optimization)</li>
                                <li><i class="fa-solid fa-check"></i> 4 Pages Authors Dynamic Website</li>
                                <li><i class="fa-solid fa-check"></i> 1 Years Free Domain and Hosting</li>
                                <li><i class="fa-solid fa-check"></i> 12 Months Brand Marketing & Advertising (SEO +
                                    Google Marketing)</li>
                                <li><i class="fa-solid fa-check"></i> 12 Months Social Media Advertising (Facebook,
                                    Instagram & Linkedin)</li>
                                <li><i class="fa-solid fa-check"></i>eBook, Paperback & Hardcover Format</li>
                            </ul>
                        </div>
                        <div class="ep_btns text-center">
                            <a class=btn-d href="tel:(628) 256 4002" title>Call Us</a>
                            <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <div class=pack-box>
                        <div class=pack-name>
                            <h3>Enterprise Package</h3>
                        </div>
                        <div class=main-price>
                            <span class=dollar-s>$</span>
                            <h5>12,499</h5>
                            <h4 class=cut-price><span class=dollar-ss>$</span>24,999</h4>
                        </div>
                        <a href=# class="pack-btn popup-open-layout4">GET <span class="key-second off">50% OFF</span>
                            NOW! </a>
                        <div class=pack-list>
                            <h2>
                                EASY PAYMENT PLAN
                                <div class=tooltipw><i class="fa fa-question"></i>
                                    <span class=tooltipwtext><i class="fa-solid fa-caret-right"></i> 50% payment
                                        upfront.<br>
                                        <i class="fa-solid fa-caret-right"></i> Remaining 50% can be paid in 2-3 months
                                        Installments <br>OR<br> <i class="fa-solid fa-caret-right"></i> after the
                                        delivery of 3 chapters.</span>
                                </div>
                            </h2>
                            <ul class=pack-full>
                                <li><i class="fa-solid fa-check"></i> Editing & Proofreading</li>
                                <li><i class="fa-solid fa-check"></i> Typesetting & Layout Adjustment</li>
                                <li><i class="fa-solid fa-check"></i> Formatting (for 50+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> Multiple Revisions</li>
                                <li><i class="fa-solid fa-check"></i> 100% Royalties & Ownership Rights</li>
                                <li><i class="fa-solid fa-check"></i> Creative Cover Art</li>
                                <li><i class="fa-solid fa-check"></i> Price Encrypted Barcode</li>
                                <li><i class="fa-solid fa-check"></i> ISBN (International Standard Book Number)</li>
                                <li><i class="fa-solid fa-check"></i> Publishing on Amazon, Kindle, Barnes & Noble,
                                    Google Books and Smashwords (with Optimization)</li>
                                <li><i class="fa-solid fa-check"></i> 4 Pages Authors Dynamic Website</li>
                                <li><i class="fa-solid fa-check"></i> 2 Years Free Domain and Hosting</li>
                                <li><i class="fa-solid fa-check"></i> 60 - 90 Seconds Video Trailer</li>
                                <li><i class="fa-solid fa-check"></i> 24 Months NYT Bestseller Advance Marketing &
                                    Advertising (SEO + Google Marketing)</li>
                                <li><i class="fa-solid fa-check"></i> 24 Months Social Media Advertising (Facebook,
                                    Instagram, Twitter, Pinterest, Youtube & Linkedin)</li>
                                <li><i class="fa-solid fa-check"></i> Blogs & Article Postings</li>
                                <li><i class="fa-solid fa-check"></i> Press Releases (100+ Platforms)</li>
                                <li><i class="fa-solid fa-check"></i> eBook, Paperback & Hardcover Format Audio book
                                </li>
                            </ul>
                        </div>
                        <div class="ep_btns text-center">
                            <a class=btn-d href="tel:(628) 256 4002" title>Call Us</a>
                            <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="testttt home-cta" style=background-image:url(assets/images/banner/cta-banner.webp)>
        <div class=container>
            <div class="row align-items-center">
                <div class=col-md-7>
                    <div>
                        <div class="cta-h m1-h p1">
                            <h5>OUR BOOK PUBLISHING PROCESS</h5>
                            <p>At The Native Publishers, we begin by carefully evaluating your manuscript, ensuring your
                                story is refined to perfection. Our skilled editors collaborate closely with you, making
                                your writing clear, engaging, and error-free – a must in today's competitive publishing
                                arena. Once your manuscript shines, our talented designers craft a visually captivating
                                book cover that truly embodies your tale. We also handle the technicalities, ensuring
                                your book is properly formatted for effortless reading.<br><br>
                                But we don't stop there! We understand that marketing is key. That's why we provide
                                expert assistance to help you build a strong author platform and reach your intended
                                audience effectively. Our comprehensive services are tailored to your success and are
                                designed to help you achieve your publishing dreams and leave a lasting impression in
                                the literary world. Trust us to make your journey from manuscript to masterpiece as
                                smooth and successful as possible.
                            </p>
                            <a href=# class="btn-d popup-open-layout4">Get a Quote</a>
                            <a href=# onclick=$zopim.livechat.window.toggle() class=btn-c>Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class=col-md-5>
                    <div class=cta-h-img>
                        <img src=assets/images/img-1.webp alt="..." loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-portfolio pad-tb" style=background-image:url(assets/images/portfolio-banner.webp)>
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class="brand-txt ser-h m1-h m2-h p2 p5 text-center">
                        <h5>The Native Publisher's collection of meticulously crafted and successfully published books
                            will take you on a literary journey unlike any other.</h5>
                    </div>
                    <div class="portfolio-h m1-h text-center">
                        <img src=assets/images/banner1.webp alt="..." loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=home-cta style=background-image:url(assets/images/banner/cta-banner.webp)>
        <div class=container>
            <div class=row>
                <div class="col-md-9 wow fadeInDown">
                    <div class="cta-h m1-h p1">
                        <h5>Diverse Self-Publishing Choices for You</h5>
                        <p>Explore our diverse self-publishing services tailored just for you. With multiple options,
                            you can craft your dream book within your desired timeline and at budget-friendly rates.</p>
                        <a href=# class=btn-d onclick=$zopim.livechat.window.toggle()>Live Chat</a>
                        <a href="tel:(628) 256 4002" class="btn-c popup-open-layout4">Free Consultation</a>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp">
                    <div class=cta-book>
                        <img src=assets/images/cta-book.webp alt="..." loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="test-sec pad-tb" style=background-image:url(assets/images/service-banner.webp)>
        <div class=container>
            <div class="row align-items-center">
                <div class=col-12>
                    <div class="brand-txt ser-h m1-h m2-h p2 p5 text-center">
                        <h5>Client Testimonials </h5>
                        <h2>Discover why our clients love us! Read our testimonials showcasing our top-notch services,
                            exceptional quality, and affordable rates. Join the ranks of satisfied authors who turned
                            their literary dreams into reality with us. </h2>
                    </div>
                </div>
                <div class="col-md-6 pt-2">
                    <div class="ser-h m1-h p1 p5 pt-3">
                        <h2>Reverend Anthony Leonard - Fiona Leonard, Author of "Poetry"</h2>
                        <p style="padding: 0px 0 25px 0;">Hello, I'm Reverend Anthony Leonard, and alongside my daughter, Fiona Leonard, I want to express our deep gratitude to Rick Chapman and The Native Book Publishers for bringing Fiona's poetic dream to life. From meticulous attention to detail to a genuine passion for literary talent, The Native Book Publishers proved to be the perfect publishing partner. Fiona's journey, from penning down her thoughts to holding the final book, was incredible, and we highly recommend The Native Book Publishers to aspiring authors. Thank you for making Fiona's dream a reality!
</p>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class=test-vid>
                        <video width="520" height="315" controls >
                          <source src="assets/videos/lp-vid-2 .mp4">
                        </video>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class=test-vid>
                        <video width="520" height="315" controls >
                          <source src="assets/videos/lp-vid-1.mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-6 pt-2">
                    <div class="ser-h m1-h p1 p5 pt-3">
                        <h2>Rick Smith</h2>
                        <p style="padding: 0px 0 25px 0;">Rick Smith discusses his experience with The Native Book Publishers. He has published two books with them and is currently working on a third. The publisher offers a variety of services including editing, cover design, marketing assistance, and website development. Rick speaks highly of their professionalism and meticulousness.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-2">
                    <div class="ser-h m1-h p1 p5 pt-3">
                        <h2>Kimberly Waters!</h2>
                        <p style="padding: 0px 0 25px 0;">Hi, I'm Kimberly Waters, a children's book author, and I can't express enough gratitude to The Native Book Publishers. Over the past year, they've been incredible to work with, turning my ideas into beautifully illustrated and impactful books. From "Who Says It's Too Hard" to "Who Says Life Isn't Fair," each project has been a joy. They even helped me compile the "Who Says" series. Special thanks for the recent award for "Who Says We Can't Be Friends Again." If you're looking for a publishing partner, give Native Book Publishers a try – they've been fantastic for me. </p>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class=test-vid>
                        <video width="520" height="315" controls >
                          <source src="assets/videos/lp-vid-3 .mp4">
                        </video>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <section class="home-form form-wrap">
        <div class=container>
            <div class=form-wrapss>
                <div class=row>
                    <div class="col-md-5 wow fadeInUp">
                        <div class="form-h m1-h p1 form.form-home p">
                            <h5>CHOOSE OUR BOOK PUBLISHING COMPANY AND EXPAND YOUR REACH IN THE BOOK REALM!</h5>
                            <p>Ready to turn the page on your publishing dreams? Let us write your success story
                                together! Choose our book publishing company and let your words come to life. Start your
                                literary journey now!</p>
                        </div>
                    </div>
                    <div class="col-md-7 wow fadeInDown">
                        <form action="../sendmail/sendmail_lp3.php" class="form-home p1" method="Post">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                            <input type="hidden" name="city"
                                value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                            <input type="hidden" name="country"
                                value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                            <input type="hidden" name="internet_connection"
                                value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                            <input type="hidden" name="zipcode"
                                value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                            <input type="hidden" name="region"
                                value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                            <input type="hidden" name="url"
                                value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                            <input type=name name="name" class="form-control2 form-control" placeholder=NAME required>
                            <input type=lname name=Lname class="form-control2 form-control" placeholder="LAST NAME"
                                required>
                            <input type=email name="email" class="form-control2 form-control" placeholder=EMAIL>
                            <input type=tel name="phone" class="form-control2 form-control" placeholder="PHONE NUMBER"
                                required>
                            <textarea type=text name="message" class="form-control form-control2" rows=5
                                placeholder=MESSAGE required></textarea>
                            <button name="send_reserve_req" class=btn-d type=submit>SUBMIT</button>
                            <style>
                                form.form-home p {
                                    color: #fff
                                }
                            </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer pad-tb" style=background-image:url(assets/images/banner/footer-banner.webp)>
        <div class=container>
            <div class=row>
                <div class=col-md-4>
                    <div class="widget widget-2 p1">
                        <h5>Disclaimer</h5>
                        <p>Any and all information displayed on this website is meant to cater to a wide range of
                            viewers, and so presents generalized information. The Native Publishers is not subject to be
                            held accountable, or provide assurance about the contextual entirety of information, its
                            reliability, or its preciseness in factuality, as perceived by any viewer.</p>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="widget widget-3 m1-h p1">
                        <h5>Contact Info</h5>
                        <a href=mailto:info@thenativepublishers.com><span><i class="fa fa-envelope"
                                    aria-hidden=true></i></span> info@thenativepublishers.com</a><br><br>
                        <a href="tel:(628) 256 4002"><i class="fa fa-phone"></i> (628) 256 4002</a><br><br>
                        <a href=#><i class="fa fa-location-arrow"></i>

                            100 Pine St Suite 1150-1151 , San Francisco,
                            CA 94111 </a><br><br>
                        <ul class="top-social bottom-social ">
                            <li>
                                <a href="https://www.facebook.com/people/The-Native-Publishers/100090333660341/"><span><i
                                            class="fa-brands fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/NativePub"><span><i
                                            class="fa-brands fa-x-twitter"></i></span></a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/company/the-native-publishers/"><span><i
                                            class="fa-brands fa-linkedin"></i></span></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/thenativepublishers/"><span><i
                                            class="fa-brands fa-instagram"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="widget widget-3 m1-h p1">
                        <h5>Accepted Payment Methods</h5>
                        <img src=assets/images/visa.webp alt="..." loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright p1">
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class="des-p text-center">
                        <p><span>Copyright © 2023 <a href= />The Native Publishers </a> | All Rights Reserved.</span>
                            <!-- <a href=term-and-condition.php>Term & Condition </a>
                            <a href=privacy-policy.php>| Privacy Policy </a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
   
    <div class="popup-layout popup-layout4" id=popup-layout4
        style=display:none;background-image:url(assets/images/banner/footer-banner.webp)>
        <div class=popup-inner>
            <div class=row>
                <div class="col-md-6 p-0">
                    <div class=ovrflw-hdden><img alt src=assets/images/popup-img.webp alt="..." loading="lazy"></div>
                </div>
                <div class="col-md-6 p-0">
                    <div class=form-wrap-pop>
                        <form action="../sendmail/sendmail_lp3.php" method="Post">
                            hidden required values
                            <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                            <input type="hidden" name="city"
                                value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                            <input type="hidden" name="country"
                                value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                            <input type="hidden" name="internet_connection"
                                value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                            <input type="hidden" name="zipcode"
                                value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                            <input type="hidden" name="region"
                                value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                            <input type="hidden" name="url"
                                value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                            <a class=popup-close href=javascript:><i aria-hidden=true class="fa fa-times"></i></a>
                            <div class=popup-bdy>
                                <div class=frmicon-box>
                                    <label for>Full Name</label>
                                    <input id name="name" placeholder="Enter Your Full Name" required type=text>
                                </div>
                                <div class=frmicon-box>
                                    <label for>Email</label>
                                    <input id=email name="email" placeholder="Enter Your Email" required type=email>
                                </div>
                                <div class="frmicon-box phonecode">
                                    <label for=number>Phone Number</label>
                                    <input id=phoneNum3 name="phone" placeholder="Enter Your Number" type=phone required
                                        style=width:100%!important>
                                </div>
                                <div class=frmicon-box style=padding-top:40px>
                                    <label for>Project Discription</label>
                                    <input class type=textarea id=projectDiscription name="message"
                                        placeholder="Project Discription">
                                </div>
                                <div class=text-right>
                                    <button class=btn-b name="send_reserve_req" type=submit>SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <script type=text/javascript src="" async></script>
    <script type=text/javascript src="" async></script>
    <script id=ze-snippet src=""></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>new WOW().init();</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
   
   
    <script>
    $('input[name="phone"]').on('keypress', function(event) {
        var keyCode = event.keyCode || event.which;
        var keyValue = String.fromCharCode(keyCode);
        var isValid = /^\d+$/.test(keyValue);
        
        if (!isValid) {
            $('#phone-error').show();
            event.preventDefault();
        } else {
            $('#phone-error').hide();
        }
    });
            $('.livechat, .live_chatt, .chatt').click(function () {
                $zopim.livechat.window.toggle();
                return false;
            }
            );
            $(window).on('load', function() {
                $zopim.livechat.window.toggle();
                // $zopim.livechat.window.show();
            });
            zE(function () {
                zE.activate();
            });
            zE(function () {
                $zopim(function () {
                    $zopim.livechat.setOnUnreadMsgs(unread);
                    function unread(number) {
                        if (number >= 1) {
                            $zopim.livechat.window.toggle();
                            $zopim.livechat.window.show();
                        }
                    }
                });
            });
    
    </script>
</body>

</html>