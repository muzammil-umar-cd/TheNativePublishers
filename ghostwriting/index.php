<?php
include('../includes/inner-header.php')
?>
<section class="inner-banner ghost-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    Welcome to <span><?php echo WEBSITE_NAME; ?>:</span> Your Partner in Extraordinary Writing Processes
                </h1>
                <p>
                    With our expert team of talented writers, we are committed to delivering exceptional literary works.
                </p>
                <div class="btn-block">
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
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
            <div class="col-md-7">
                <div class="form-wrapper">
                    <div class="sale-offer">
                        <h3>
                            Contact The Right Team
                        </h3>
                        <h4>
                            Get Started Before it’s too late!
                        </h4>
                        <p>
                            It’s a limited time offer so <strong>hurry up!</strong> Don’t Wait!
                            Get Yourself a Ghostwriter Today!
                        </p>
                        <form action="/sendmail/sendmail.php" class="banner-form" method="post" novalidate="novalidate">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                            <input type="text" name="name" id="cn" placeholder="Name" class="required form-control" required="" aria-required="true">
                            <input type="text" name="email" id="em" placeholder="Email Address" class="required email form-control" required="" aria-required="true">
                            <input type="text" name="phone" minlength="10" maxlength="10" placeholder="Phone Number" class="required phone number form-control" required="" aria-required="true">
                            <textarea name="message" id="msg" class="form-control" placeholder="Brief discription"></textarea>
                            <button type="submit" class="btn btn-yellow">
                                <span>
                                    Submit
                                    <i class="fas fa-long-arrow-right" aria-hidden="true"></i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="agenda">
    <div class="container">
        <div class="heading text-center">
            <h3>Our agenda</h3>
            <h2> At <?php echo WEBSITE_NAME; ?> <span> We Believe </span></h2>
            <p>
                that every story deserves to be told. Whether you're an aspiring author, a busy professional, or a visionary entrepreneur, our ghostwriting services are designed to bring your unique ideas and visions to life.
            </p>
        </div>
        <ul>
            <li style="background: #eff2ef">
                <img src="../assets/images/agenda1.png" alt="">
                <h4>
                    Ghostwriting
                </h4>
            </li>
            <li style="background: #f2eff2">
                <img src="../assets/images/agenda2.png" alt="">
                <h4>
                    Proofreading <br>
                    /Editing
                </h4>
            </li>
            <li style="background: #f2efef">
                <img src="../assets/images/agenda3.png" alt="">
                <h4>
                    Cover <br>
                    Design
                </h4>
            </li>
            <li style="background: #eff0f2">
                <img src="../assets/images/agenda4.png" alt="">
                <h4>
                    Publishing <br>
                    Services
                </h4>
            </li>
            <li style="background: #f2f1ef">
                <img src="../assets/images/agenda5.png" alt="">
                <h4>
                    Marketing <br>
                    Services
                </h4>
            </li>
            <li style="background: #eff2f2">
                <img src="../assets/images/agenda6.png" alt="">
                <h4>
                    Audiobooks
                </h4>
            </li>
        </ul>
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
<section class="ghost-await">
    <div class="container">
        <div class="heading text-center">
            <h3>More On</h3>
            <h2>Our <span>Services</span></h2>
            <p>
                We offer a range of services – from Ghostwriting, Proofreading and Editing, to Marketing and Audiobooks!
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/await1.png" alt="">
                    <h4>
                        Ghostwriting
                    </h4>
                    <p>
                        Unlock the power of storytelling with our expert ghostwriters, who possess the artistry and creativity to breathe life into your ideas. We'll collaborate closely with you, meticulously capturing your voice, vision, and narrative style, ensuring that your story authentically resonates with your target audience and engages readers from start to finish.
                    </p>
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/await2.png" alt="">
                    <h4>
                        Proofreading and Editing
                    </h4>
                    <p>
                        Our meticulous proofreaders and editors have a keen eye for detail, ensuring your manuscript is perfectly polished. We'll refine your prose, correct grammar and punctuation, and enhance the overall readability of your work, ensuring that every page shines.
                    </p>
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/await3.png" alt="">
                    <h4>
                        Cover Design
                    </h4>
                    <p>
                        A captivating book cover is a gateway to your story. Our talented designers will collaborate with you to create visually stunning and compelling covers that grab attention, convey the essence of your book, and entice readers to explore further.
                    </p>
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/await4.png" alt="">
                    <h4>
                        Publishing Services
                    </h4>
                    <p>
                        Let us guide you through the intricacies of the publishing process. From formatting and typesetting to securing ISBNs and barcodes, we'll handle the technical aspects, ensuring your book is professionally presented and ready for distribution across various platforms.
                    </p>
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/await5.png" alt="">
                    <h4>
                        Marketing
                    </h4>
                    <p>
                        Maximizing the reach and impact of your book is our priority. Our marketing experts will develop strategic campaigns tailored to your target audience, utilizing digital and traditional channels to generate a buzz, increase visibility, and drive book sales.
                    </p>
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="../assets/images/await6.png" alt="">
                    <h4>
                        Audiobooks
                    </h4>
                    <p>
                        Tap into the growing market of audiobook enthusiasts. Our professional voice actors and audio engineers will bring your story to life, delivering a captivating listening experience that immerses audiences in your narrative world.
                    </p>
                    <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                        <span>
                            Let’s Get Started
                            <i class="fas fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-cta">
    <div class="container">
        <h3>
            Ready To Embark on This <br>
            Extraordinary Adventure with Us?
        </h3>
        <h2>
            Let's Weave Some Magic Together
        </h2>
        <div class="btn-block">
            <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-src="#popupform">
                <span>
                    Hire Author
                    <i class="fas fa-long-arrow-right"></i>
                </span>
            </a>
            <a href="javascript:" class="btn btn-white-brd chat">
                <span>
                    View Pricing
                    <i class="fas fa-long-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>
<section class="about-purpose ghost-purpose">
    <div class="container">
        <div class="heading text-center">
            <h2>
                Your Journey to Becoming an Author: <br>
                <span>Our Seamless Process</span>
            </h2>
        </div>
        <div class="box">
            <div class="row">
                <div class="col-md-5 offset-1">
                    <h3>
                        Phone Interview: Let's Chat <br> About Your Vision!
                    </h3>
                    <p>
                        We kickstart the process with an exciting phone interview where we dive deep into your ideas, aspirations, and the story you want to tell.
                    </p>
                </div>
                <div class="col-md-5 offset-1 ft">
                    <img src="../assets/images/sp1.png" alt="">
                </div>
            </div>
        </div>
        <div class="box right">
            <div class="row">
                <div class="col-md-5 offset-1 ft">
                    <img src="../assets/images/sp2.png" alt="">
                </div>
                <div class="col-md-5 offset-1">
                    <h3>
                        Book Outline Creation & Finalization: Plotting Your <br>Path to Success
                    </h3>
                    <p>
                        Next, our team of experienced writers and editors will work closely with you to craft a compelling book outline that serves as the roadmap for your story.
                    </p>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="row">
                <div class="col-md-5 offset-1">
                    <h3>
                        Chapter Writing: Crafting Your Narrative Masterpiece
                    </h3>
                    <p>
                        Once the outline is finalized, our talented writers roll up their sleeves and start working on weaving together the chapters of your book.
                    </p>
                </div>
                <div class="col-md-5 offset-1 ft">
                    <img src="../assets/images/sp3.png" alt="">
                </div>
            </div>
        </div>
        <div class="box right">
            <div class="row">
                <div class="col-md-5 offset-1 ft">
                    <img src="../assets/images/sp4.png" alt="">
                </div>
                <div class="col-md-5 offset-1">
                    <h3>
                        Publishing: Making Your <br> Book Dreams a Reality
                    </h3>
                    <p>
                        Our publishing experts will handle all relevant details, from formatting and typesetting to cover design and proofreading.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="row">
                <div class="col-md-5 offset-1">
                    <h3>
                        Your Book Hits the Shelves: <br> Ready to Make an Impact
                    </h3>
                    <p>
                        Congratulations! Your book is now ready to take the literary world by storm. We'll guide you through the book launching and marketing process to generate buzz and attract readers.
                    </p>
                </div>
                <div class="col-md-5 offset-1 ft">
                    <img src="../assets/images/sp5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="time-offer">
    <div class="container-fluid">
        <div class="container">
            <h6>
                70
                <span>%off</span>
            </h6>
            <div class="row">
                <div class="col-md-7 offset-5">
                    <h2>
                        Times a Ticking, and the
                        <span>Discount Offer</span> May End Soon
                    </h2>
                    <p>
                        Grab a special discount on our services today by contacting us,
                        and let’s make you the star of the show!
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
            </div>
        </div>
    </div>
</section>

<?php
include('../includes/inner-footer.php')
?>