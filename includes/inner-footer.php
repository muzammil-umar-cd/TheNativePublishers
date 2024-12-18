<section class="frequently">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Frequently Asked Questions
            </h3>
            <h2>
                Answering your <span>Common Questions</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="faqs-wrapper">
                    <div class="accordion" id="faq">
                        <div class="card">
                            <div class="card-header" id="faqhead1">
                                <a href="/#" class="btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">
                                    How much would it cost to hire <?php echo WEBSITE_NAME; ?> Services?
                                </a>
                            </div>

                            <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                <div class="card-body">
                                    <p>
                                        The cost depends on several
                                        factors, like the book size,
                                        type of book, format, number of
                                        pages, and other services you
                                        wish to utilize. You may contact
                                        us for a free estimate!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead2">
                                <a href="/#" class="btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq2" aria-expanded="true" aria-controls="faq2">Who will own
                                    the rights to my book?</a>
                            </div>

                            <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                <div class="card-body">
                                    <p>
                                        You will! We may do all the
                                        work, but it was 100% your idea,
                                        and thus you get full ownership
                                        of your entire book!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead3">
                                <a href="/#" class="btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq3" aria-expanded="true" aria-controls="faq3">Can I trust you
                                    guys with my personal
                                    information?</a>
                            </div>
                            <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                    <p>
                                        We have worked with thousands of
                                        amazing aspiring authors like
                                        you, and we have gained their
                                        trust, and we’re confident that
                                        we’ll achieve yours, too!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead4">
                                <a href="/#" class="btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq4" aria-expanded="true" aria-controls="faq4">Do you have
                                    customer support available?</a>
                            </div>
                            <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                <div class="card-body">
                                    <p>
                                        Without customer support and
                                        constant communication, we won’t
                                        be able to write your book the
                                        way you want it. Our support
                                        team is available at your beck
                                        and call!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead5">
                                <a href="/#" class="btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq5" aria-expanded="true" aria-controls="faq5">How long will
                                    this project take?</a>
                            </div>

                            <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                <div class="card-body">
                                    <p>
                                        The book writing process
                                        typically depends on the length
                                        of the book and the frequency of
                                        modifications; however, a
                                        200-page book takes about 2-3
                                        months.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqhead6">
                                <a href="/#" class="btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq6" aria-expanded="true" aria-controls="faq6">Can I get my
                                    money back if I don’t like what I
                                    see?</a>
                            </div>

                            <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                <div class="card-body">
                                    <p>
                                        You’re subject to 100%
                                        refundability if unsatisfied
                                        with the first chapter!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="all-genres">
    <div class="container">
        <div class="heading text-white text-center">
            <h3>
                We Write
            </h3>
            <h2>
                All <span>Genres</span> - What’s Yours?
            </h2>
        </div>
        <div class="row">
            <div class="col-md-10 offset-1">
                <ul>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Autobiography
                    </li>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Fiction
                    </li>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Non-Fiction
                    </li>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Children’s Book
                    </li>

                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Self-Help Book
                    </li>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Travelogue
                    </li>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Photobook
                    </li>
                    <li>
                        <img src="../assets/images/genres-check.png" alt>
                        Other
                    </li>
                </ul>
                <form action="/sendmail/sendmail.php" method="POST" class="footer-form">
                    <!--hidden required values-->
                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                    <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="required form-control" required name="name"
                                placeholder="Full Name*">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="required form-control" required name="email"
                                placeholder="Email Address*">
                        </div>
                        <div class="col-md-4">
                            <input type="tel" class="required form-control ftpn" required name="phone" minlength="10" maxlength="10" minlength="7"
                                maxlength="14" placeholder="Phone Number*">
                        </div>
                        <div class="col-md-12">
                            <textarea autocomplete="nope" name="message" class="form-control" placeholder="Enter Brief"></textarea>
                            <button type="submit" class="btn btn-yellow">
                                <span>
                                    Submit
                                    <i class="fas fa-long-arrow-right"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="our-hear text-center">
    <div class="container-fluid">
        <div class="container">
            <h3>
                We’d love to hear what your book is all about! Pick a
                genre, and reach out to us to discuss more.
            </h3>
            <a href="/javascript:" class="btn btn-blue various" data-fancybox data-src="#popupform">
                <span>
                    Let’s Get Started
                    <i class="fas fa-long-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="ftr-logo pt-3">
                    <img src="../assets/images/footer-logo.png" alt>
                </a>
                <p class="pt-3 text-light">
                    We here at <?php echo WEBSITE_NAME; ?> value your
                    ambition and time hence we treat every project
                    diligently. Your vision is important for
                    us.
                </p>

                <ul class="social_link">
                    <li style="margin: 0 10px;"><a style="font-size: 22px;" target="_blank" href="https://www.facebook.com/people/The-Native-Publishers/100090333660341/"><i class="fa fa-facebook"></i></a></li>
                    <li style="margin: 0 10px;"><a style="font-size: 22px;" target="_blank" href="https://twitter.com/NativePub"><i class="fa fa-twitter"></i></a></li>
                    <li style="margin: 0 10px;"><a style="font-size: 22px;" target="_blank" href="https://www.instagram.com/thenativepublishers/"><i class="fa fa-instagram"></i></a></li>
                    <li style="margin: 0 10px;"><a style="font-size: 22px;" target="_blank" href="http://www.linkedin.com/company/the-native-publishers/" class="fa fa-linkedin"></a></li>
                    <li style="margin: 0 10px;"><a style="font-size: 22px;" target="_blank" href="https://www.trustpilot.com/review/thenativepublishers.com"><img src="../assets/images/tt-custom.png" style="margin-top: 3px !important;display: block;" /></a></li>
                    <li style="margin: 0 10px;"><a style="font-size: 22px;" target="_blank" href="https://www.sitejabber.com/reviews/thenativepublishers.com"><img src="../assets/images/tt-custom2.png" style="margin-top: 3px !important;display: block;" /></a></li>
                </ul>
            </div>
            <div class="col-md-3 p-5">
                <h3 class="text-light">Quick Links</h3>
                <ul>
                    <li><a href="/about"><i style="color: #f27842;" class="fas fa-angle-right"></i> About Us</a></li>
                    <li><a href="/contact.php"><i style="color: #f27842;" class="fas fa-angle-right"></i> Contact Us</a></li>
                    <li><a href="/book-publishing.php"><i style="color: #f27842;" class="fas fa-angle-right"></i> Publishing</a></li>
                    <li><a href="/book-marketing/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Marketing
                        </a></li>
                    <li><a href="/packages/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Packages</a></li>
                    <li><a href="/faq/"><i style="color: #f27842;" class="fas fa-angle-right"></i> FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-3 p-5">
                <h3 class="text-light">Services</h3>
                <ul>
                <li><a href="/editing/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Editing</a></li>
                    <li><a href="/ghostwriting/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Ghostwriting</a></li>
                    <li><a href="/cover-design/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Book
                            Cover</a></li>
                    <li><a href="/audio-book/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Audio Book</a></li>
                    <li><a href="/author/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Author</a></li>
                    <li><a href="/book-writing.php"><i style="color: #f27842;" class="fas fa-angle-right"></i> Book
                            Writing</a></li>
                    <li><a href="/proofreading/"><i style="color: #f27842;" class="fas fa-angle-right"></i> Proofreading</a></li>
                </ul>
            </div>
            <div class="col-md-3 p-2">
            <h3 class="text-light">Contact</h3>
                <ul>
                    <li class="pt-2">
                        <a style="font-size: 14px;" href="<?php echo PHONE_HREF; ?>"><i class="fas fa-phone" style="color: #f27842;"></i> <?php echo PHONE; ?></a>
                    </li>
                    <li class="pt-2">
                        <a style="font-size: 14px;" href="mailto:<?php echo ADMIN_EMAIL; ?>"><i class="fas fa-envelope" style="color: #f27842;"></i> <?php echo ADMIN_EMAIL; ?></a>
                    </li>
                    <li class="pt-2">
                        <p style="font-size: 14px;" class="text-light"><i class="fas fa-map-marker-alt" style="color: #f27842;"></i> <?php echo ADDRESS; ?></p>
                    </li>
                    <li>
                        <img src="../assets/images/payment-image.png" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<section class="copy">
    <hr class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>© 2024 <?php echo WEBSITE_NAME; ?>. All Rights Reserved.</p>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <ul>
                    <li>
                        <a href="/terms-and-conditions/">Terms
                            &amp; Conditions</a>
                    </li>
                    <li>
                        <a href="/privacy-policy/">Privacy
                            Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div style="display: none;" class="popupform" id="popupform">
    <h2>Get a Free Quote!</h2>
    <p>Discuss your book idea with our consultants and we'll help you
        transform them to multi-million dollar reality. <span>It's
            Free!</span></p>
    <form action="/sendmail/sendmail.php" method="post" class="validate-popupform"
        novalidate="novalidate">
        <!--hidden required values-->
        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
        <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
        <ul>
            <li class="first">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" class="required" required placeholder="Full Name *" name="name"
                    aria-required="true">
            </li>

            <li>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" class="required email" required placeholder="Email Address *" name="email"
                    aria-required="true">
            </li>

            <li>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="text" class="required number" minlength="10" required placeholder="Phone No. *"
                    name="phone" minlength="10" maxlength="10" aria-required="true">
            </li>

            <li>
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                <textarea name="message" class="" placeholder="Enter a  description "></textarea>
            </li>

            <li>
                <input type="submit" value="Submit">
            </li>
        </ul>
    </form>
</div>
<!-- Start of designneshelp Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
<!-- End of designneshelp Zendesk Widget script -->
<script type="text/javascript" src="../assets/js/libs.js"></script>
<script type="text/javascript" src="../assets/js/functions.js"></script>
</body>

</html>