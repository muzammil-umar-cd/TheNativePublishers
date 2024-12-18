<?php
include "marketing_lp/include/header.php";
?>

<?php 

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
<!-- banner-start -->
<section id="banner" class="banneroad01 bms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="bnr-txt btn-tx-cp">
                            <h4>Making your Words Available everywhere</h4>
                            <h2>Avail Economical Book Marketing Services for self-published authors.</h2>
                            <p>Still stuck on getting your book published. We got your back. We make sure that your
                                piece of art reaches the targeted audience with full zeal and commitment. The publishing
                                team at The Native Publishers provides a robust, fast, and smooth way of publishing your
                                customized book.</p>

                        </div>
                        <div class="cta-btn btnres">

                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"
                                class="btn btnres1">Get A Quote</a>

                            <a href="javascript:;$zopim.livechat.window.toggle()" class="btn btnres2 chatt">Get Started</a>


                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-box">
                            <img src="marketing_lp/images/blacklogo.png" class="img-fluid logoimg">
                            <h2 style="color:#000;font-size:40px;">Create account</h2>
                            <div class="default-form">
                                <form class="form-get-quote" id="template-contactform" name="template-contactform"
                                    action="" method="post">
                                    <!--hidden required values-->
                                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                    <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <label>Your name</label>
                                                <input type="text" name="name" value=""
                                                    placeholder="First and last name"
                                                    onkeydown="return /^[A-Za-z\s]+$/.test(event.key)" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <label>Email</label>
                                                <input type="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <label>Phone</label>
                                                <input type="text" class="phone" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <label>Services</label>
                                                <select class="form-control" name="service"
                                                    id="exampleFormControlSelect1" required>
                                                    <option value="">Services</option>
                                                    <!-- <option value="Book Writing">Book Writing </option>
                 <option value=" E-book Writing & Publishing"> E-book Writing & Publishing</option>
                  <option value="Book Editing & Proofreading">Book Editing & Proofreading</option>
                   <option value=" Book Cover Design"> Book Cover Design </option>
                    <option value="  Book Illustrations">Book Illustrations  </option>
                    <option value="  Book Publishing ">Book Publishing  </option>
                    <option value="Book Printing">Book Printing </option> -->
                                                    <option value="Book Marketing">Book Marketing</option>
                                                    <!-- <option value="Author Website">Author Website</option>
                        <option value=" Amazon Publishing ">Amazon Publishing </option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button class="accountbtn" type="submit" id="template-contactform-submit"
                                                name="send_reserve_req" value="submit">GET A QUOTE</button>
                                        </div>
                                        <div class="form-group accountpara col-lg-12 col-md-12 col-sm-12">
                                            <p>By creating an account, you agree to Amazon's Conditions
                                                    of Use. You can find the privacy notice that applies to you
                                                here.</p></p>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->

<!-- form-sec -->
<!-- form-sec -->

<div class="bottomSec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="top-slider">
                    <li>

                        <img src="marketing_lp/images/cl-1.png" alt="">
                    </li>
                    <li>

                        <img src="marketing_lp/images/cl-2.png" alt="">
                    </li>
                    <li>

                        <img src="marketing_lp/images/cl-3.png" alt="">
                    </li>
                    <li>
                        <img src="marketing_lp/images/cl-4.png" alt="">
                    </li>
                    <li>

                        <img src="marketing_lp/images/cl-5.png" alt="">
                    </li>

                    <li>

                        <img src="marketing_lp/images/cl-6.png" alt="">
                    </li>
                    <li>

                        <img src="marketing_lp/images/cl-7.png" alt="">
                    </li>

                    <li>
                        <img src="marketing_lp/images/cl-9.png" alt="">
                    </li>
                    <li>

                        <img src="marketing_lp/images/cl-10.png" alt="">
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>


<!-- landing-page-inner -->
<section id="lp-writing">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Sales-Centric Digital Content Marketing for all your Published Books</h2>
                <br>
                <div class="inner-txt-p">
                    <p>Be it Search Engine Optimization (SEO), Social Media Marketing, or any other services, we got you
                        covered. Our job is to make sure your published book in any format gets maximum customer
                        interest. Our tech-Ny digital marketers are always looking forward to gaining significant
                        attention from the targeted audience. The Native Publishers.com provides a secret strategy
                        related to book marketing for self-published authors.</p>
                </div>
                <br>
                <div class="cta-btn">

                    <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn">Get A Quote</a>

                    <a href="javascript:;$zopim.livechat.window.toggle()" class="btn liveChat chatt">Live Chat</a>


                </div>


            </div>
            <div class=" col-md-6 inner-tx-p">
                <div class="inner-img-lp">
                    <img class="img-sec7" src="marketing_lp/images/bookmarketing.png">
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<section id="writing-ser">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="write-txt">
                    <h2>Our approaching method is concentric and revealing.</h2>

                </div>
            </div>
            <div class="col-md-12 write-main-div">
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser1">
                        <div class="img-box img-ser1"></div>
                        <div class="ser-box-txt">
                            <h3>Far-Reaching Expertise</h3>
                            <p class="text-center">Our limits are to the skies and beyond—our team, which specializes in
                                multiple genres, be it a piece of history or autobiography, exceptional quality of
                                content with unrivaled support is ensured.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser4">
                        <div class="img-box img-ser2"></div>
                        <div class="ser-box-txt">
                            <h3>Individually Customized Services</h3>
                            <p>The purpose of this type of service is to provide you with the correct expert based upon
                                the genre you desire. After a careful hearing of your instructions, we prepare a
                                hierarchal outline and complete it within the guaranteed time.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser2">
                        <div class="img-box img-ser3"></div>
                        <div class="ser-box-txt">
                            <h3>Flawless Client Communication</h3>
                            <p>We never consider two different projects and clients the same. Our goal is to offer
                                honest service and, subsequently, empathy to all the convincing clients.</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<section id="cta-sec">

    <div class="container">

        <div class="row">

            <div class="col-md-12 cta-box">

                <div class="cta-txt">

                    <h2>Let us take your book to the next level</h2>

                    <p>We help bring your ideas to life in the form of a sedulously written and published book</p>

                </div>

                <div class="cta-btn">

                    <a href="tel:+1(628) 256 4002" class="cta-btn-1">Call Us (628) 256-4002</a>

                    <a href="javascript:;"  class="cta-btn-2 liveChat chatt">Live Chat</a>

                    <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="cta-btn-3 order_button2 btnres1">Get A Quote</a>

                </div>

            </div>

        </div>

    </div>



</section>
<section id="sample">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="sample-txt">
                        <h2><b>Our Recent Portfolio</b></h2>
                        <p>Our work speaks for itself. We believe in offering the best value and most personalised
                            service to you.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- portfolio -->
        <div class="sample-tab">
            <div allign="center">

            </div>
            <br>

            <div id="tab1" class="tab-pane active show">
                <div class="book-covers">



                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/01.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/02.jpg">
                            <div class="badge rounded bg-body color-blue"></div>
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/03.jpg">
                            <div class="badge rounded bg-body color-blue"></div>
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/04.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/05.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/06.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/07.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/08.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/09.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/10.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/11.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/12.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/13.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/14.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/15.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/16.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/17.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/18.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/19.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/20.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/21.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/22.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/23.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/24.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/25.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/26.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/27.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/28.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/29.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/32.jpg">

                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/33.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/34.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/35.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/36.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/37.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/38.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/39.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/40.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/41.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/42.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/43.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/44.jpg">
                        </div>
                    </div>



                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/48.jpg">
                        </div>
                    </div>


                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/49.jpg">
                        </div>
                    </div>


                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/50.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/51.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/52.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/53.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/54.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/55.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/56.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/57.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/58.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/59.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/60.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/61.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/62.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/63.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/64.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/65.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/66.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/67.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/68.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/69.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/70.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/71.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/72.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/73.jpg">
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/74.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/75.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/76.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/77.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/78.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/79.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/80.jpg">
                        </div>
                    </div>


                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/81.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/82.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/83.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/84.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/85.jpg">
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/86.jpg">
                        </div>
                    </div>


                    <div class="body-content">
                        <div class="cover">
                            <img class="" src="marketing_lp/images/new-port/88.jpg">
                        </div>
                    </div>

                </div>
            </div>

            <!-- portfolio -->
        </div>
    </div>
    </div>

</section>
<section id="creative-tab2" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="creative-txt">
                    <h2 class="text-center">Our Process</h2>

                </div>
            </div>
        </div>
        <div class="row faq-tab-div2">
            <!-- Nav tabs -->

            <div class="col-md-6">
                <div id="crtab2-1" class="tabcontent2" style="display: block;">
                    <div class="ctr-tavb-img">
                        <img class="img-fluid" src="marketing_lp/images/publishing/1.png">
                    </div>
                </div>
                <div id="crtab2-2" class="tabcontent2" style="display: none;">
                    <div class="ctr-tavb-img">
                        <img class="img-fluid" src="marketing_lp/images/publishing/2.png">
                    </div>
                </div>
                <div id="crtab2-3" class="tabcontent2" style="display: none;">
                    <div class="ctr-tavb-img">
                        <img class="img-fluid" src="marketing_lp/images/publishing/3.png">
                    </div>
                </div>
                <div id="crtab2-4" class="tabcontent2" style="display: none;">
                    <div class="ctr-tavb-img">
                        <img class="img-fluid" src="marketing_lp/images/publishing/4.png">
                    </div>
                </div>
            </div>

            <!-- ul -->
            <div class="col-md-6">
                <div class="tab crt-tab-menu">
                    <div class="border-lt">
                        <button class="tablinks2 btn-one-cr active" data-toggle="modal" data-target="#Mymodal"
                            onclick="openCity2(event, 'crtab2-1')" id="defaultOpen2">
                            <div class="tab-txt-2 tab-txt-img1">
                                <h3>Draft Submission</h3>
                                <p>Our clients submit the draft along with a project brief, a set of instructions
                                    about editing, proofing, and let us know their expectations for improvement.</p>
                            </div>
                        </button>
                        <button class="tablinks2" onclick="openCity2(event, 'crtab2-2')">
                            <div class="tab-txt-2 tab-txt-img2">
                                <h3>Thorough Editing And Proofreading</h3>
                                <p>We assign a dedicated copyeditor to every project whose job is to churn coffee
                                    and thoroughly read and review the client submitted drafts with a keen eye for
                                    mistakes.</p>
                            </div>
                        </button>
                        <button class="tablinks2" onclick="openCity2(event, 'crtab2-3')">
                            <div class="tab-txt-2 tab-txt-img3">
                                <h3>Perfecting Each And Every Sentence</h3>
                                <p>Our proofreaders have an eye for teeny-tiny mistakes and are obsessed with
                                    correcting them at full-blown perfectionism. We fix all typos and errors and
                                    peruses the manuscript one more time to make sure there is no lacking remained
                                    in the final draft.</p>
                            </div>
                        </button>
                        <button class="tablinks2" onclick="openCity2(event, 'crtab2-4')">
                            <div class="tab-txt-2 tab-txt-img4">
                                <h3>Software Scanning</h3>
                                <p>The human-edited draft is run on standard digital writing software such as
                                    Grammarly, Copyscape, and Hemingway for 100% error-free results.</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sample-txt contact-txt-sec">
                    <h2>Drop Us A Line</h2>
                    <p>Fill out your details below and we’ll get back to you shortly.</p>
                </div>
                <div class="contact-box col-md-8">
                    <form class="cmxform form-get-quote" action="" method="POST">
                    <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                        <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                        <div class="col-md-12 c-b-div contactbox p0">
                            <div class="col-md-6">
                                <div class="clearfix"></div>
                                <div class="col-md-12 p0">
                                    <input name="name" class="form-control" type="text" placeholder="Name"
                                        onkeydown="return /[a-z]/i.test(event.key)" required="">

                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 p0">
                                    <input name="email" class="form-control" type="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 p0">
                                    <select class="classic" name="service">
                                        <optgroup label="&nbsp; Select Services">
                                            <!-- <option value="Book Writing " data-amt="16" data-deadline="1">Book Writing </option> -->
                                            <option value="Book Marketing " data-amt="16" data-deadline="1">Book
                                                Marketing</option>
                                            <!-- <option value="Book Cover Design" data-amt="50" data-deadline="1">Book Cover Design</option>
                                            <option value="Book Proof Reading & Editing" data-amt="50" data-deadline="1">Book Proof Reading & Editing</option>
                                            <option value="Book Publishing" data-amt="50" data-deadline="1">Book Publishing</option>
                                            <option value="E-Book Writing & Publishing" data-amt="50" data-deadline="1">E-Book Writing & Publishing</option> -->
                                        </optgroup>

                                    </select>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <div class="col-md-12 p0">
                                    <input name="phone" class="form-control phoneNum" type="text"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="col-md-12 p0">
                                    <textarea class="form-control" name="messsage" id="exampleFormControlTextarea1"
                                        rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-12" style="margin-top: 25px;">
                            <input type="submit" name="send_reserve_req" class="btn form-btn" value="Submit">




                        </div>
                    </form>

                </div>
                <div class="col-md-8 cta-b-div p0">
                    <div class="con-cta-btn-div">
                        <div class="col-lg p0 col-b-1">
                            <p>Discuss Your Project</p>
                            <a href="javascript:;"  class="con-cta-btn ct-b1 liveChat chatt">Live
                                Chat</a>
                        </div>
                        <div class="col-lg col-b-2">
                            <p>Make a Call</p>
                            <a href="tel:+1(628) 256-4002" class="con-cta-btn ct-b2">(628) 256-4002</a>
                        </div>
                        <div class="col-lg p0 col-b-3">
                            <p>Send us Email</p>
                            <a href="mailto:support@thenativepublishers.com"
                                class="con-cta-btn ct-b3">info@thenativepublishers.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</div>



<?php
include "marketing_lp/include/footer.php";
?>