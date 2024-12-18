<?php
include('includes/header.php')
?>

<style>
    header {
        background: url('assets/images/header-bg.jpg') no-repeat !important;
    }
</style>

<section class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    Let’s Spark a Conversation
                    About Your Book
                </h1>
                <p>
                    We would love to know more about you and your book. Start a chat with us, or call us on our toll-free number now!
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
                    <img src="assets/images/contact-banner.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us mb-5 pt-5" style="margin-bottom: 6rem !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info-form">
                    <form action="/sendmail/sendmail.php" class="app_contact_form" method="post">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                        <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="name" id="cn" placeholder="Name" class="required form-control" required="" aria-required="true">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" id="em" placeholder="Email Address" class="required email form-control" required="" aria-required="true">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" minlength="10" maxlength="10" placeholder="Phone Number" class="required phone number form-control" required="" aria-required="true">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="msg" class="form-control" placeholder="Brief discription" aria-required="true"></textarea>
                                <button type="submit" class="btn btn-yellow">
                                    <span>
                                        Submit
                                        <i class="fas fa-long-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="txt">
                    <div class="heading">
                        <h2>
                            Contact Us Today <br>
                            to Get Started
                        </h2>
                        <p>
                            Connect with us via phone, email, or fill out the form to discuss further.
                        </p>
                    </div>
                    <ul>
                        <li><img src="assets/images/ct.png" alt=""> <a href="<?php echo PHONE_HREF; ?>" style="color: #000"><?php echo PHONE; ?></a></li>
                        <li><img src="assets/images/cm.png" alt=""> <a href="<?php echo ADMIN_EMAIL; ?>" style="color: #000"><?php echo ADMIN_EMAIL; ?></a></li>
                        <li><img src="assets/images/cl.png" alt=""> <?php echo ADDRESS; ?></li>
                    </ul>
                    <ul class="fsocial_link">
                        <li><a target="_blank" href="https://www.facebook.com/people/The-Native-Publishers/100090333660341/"><i class="fa text-dark fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/NativePub"><i class="fa text-dark fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/thenativepublishers/"><i class="fa text-dark fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('includes/footer.php')
?>