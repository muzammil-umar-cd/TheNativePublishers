<?php
include('includes/header.php')
?>

<style>
    header{
        background: url('assets/images/header-bg.jpg') no-repeat !important;
    }
</style>

<section class="inner-banner ghost-banner creative-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    Where Storytelling Takes Center Stage, and Imagination Runs Wild!
                </h1>
                <p>
                    Are you itching to bring your story to life, and do you need some magical assistance? Look no further! At <?php echo WEBSITE_NAME; ?>, we're passionate about transforming your ideas into captivating tales that will leave readers spellbound.
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
<section class="who-are-we">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>
                    Who Are We?
                </h2>
                <p>
                    We're a team of imaginative word wizards whose work is fueled by a love for storytelling and a touch of enchantment. We aim to help aspiring authors like you unleash your creativity and craft literary masterpieces that will transport readers to extraordinary realms.
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
                <img src="assets/images/who-we-are.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="creative-service">
    <div class="container">
        <div class="heading text-center text-white">
            <h3>Our</h3>
            <h2>Book Writing Services</h2>
            <p>
                Whether you have a brilliant concept that needs fleshing out or a blank canvas waiting to be painted with words, our ghostwriters are here to weave their literary magic. From captivating novels to engaging short stories, we cover various genres, ensuring your unique voice and vision shine through every page.
            </p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <ul>
                    <li>Fiction</li>
                    <li class="blue">Non-Fiction</li>
                    <li class="blue">Romance Novel</li>
                    <li>Horror</li>
                    <li>Science Fiction</li>
                    <li class="blue">Dictionary</li>
                    <li class="blue">Comics</li>
                    <li>Drama</li>
                    <li>Action & Adventure</li>
                    <li class="blue">Travel</li>
                    <li class="blue">Crime Fiction</li>
                    <li>Fantasy Fiction</li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="img">
                    <h5>
                        Romance Novel
                    </h5>
                    <p>
                        A romance novel is a work of fiction with a theme of love. Our ghost writers have a central focus on the development of a romantic relationship between two people. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vision">
    <div class="container">
        <div class="heading text-center">
            <h3>
                Collaboration
            </h3>
            <h2>
                And Your Vision
            </h2>
            <p>
                We believe in collaboration and honoring your vision. Our ghostwriters will work closely with you, embracing your ideas and preferences to craft a story that resonates with readers. Your story is our priority, and we'll ensure that your characters leap off the page and your plot twists keep readers on the edge of their seats. </p>
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
        <img src="assets/images/globaly.jpg" alt="">
    </div>
</section>
<section class="audio-cta pack-cta creative-cta">
    <div class="container-fluid">
        <div class="container">
            <h4>
                Grab your quill (or keyboard), and embark
            </h4>
            <h3>
                on this extraordinary <br>
                adventure with us!
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
include('includes/footer.php')
?>