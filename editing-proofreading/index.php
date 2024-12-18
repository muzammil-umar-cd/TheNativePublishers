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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get The Best Book Editors | The Native Publishers </title>
    <meta name="robots" content="NOINDEX, NOFOLLOW" />
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" href="assets/img/thenativepublishers.png">
    <link rel="manifest" href="../site.webmanifest">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preload" fetchpriority="high" as="image" href="assets/img/logo-black.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="assets/img/bannerbg.webp" type="image/webp">
    <link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/S6uyw4BMUTPHjx4wXg.woff2" crossorigin="anonymous" media="all" />
    <link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/S6u9w4BMUTPHh6UVSwiPGQ.woff2" crossorigin="anonymous" media="all" />
    <link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/u-440qyriQwlOrhSvowK_l5-fCZM.woff2" crossorigin="anonymous" media="all" />
    <link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/u-4n0qyriQwlOrhSvowK_l52xwNZWMf6.woff2" crossorigin="anonymous" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css" integrity="sha512-s51TDsIcMqlh1YdQbF3Vj4StcU/5s97VyLEEpkPWwP0CJfjZ/C5zAaHnG+DZroGDn1UagQezDEy61jP4yoi4vQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" rel="preload" as="style" href="assets/css/vendor.css">
    <link rel="stylesheet" rel="preload" as="style" href="assets/css/style.css?07-05-24_01:40:03">
    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header class="py-2 ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-3 col-md-4 col-3 d-md-none"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> </a> </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-6"><a class="logo" href="/"><img class="lozad" data-src="assets/img/thenativepublishers.png"></a></div>
                <div class="col-xl-7 col-lg-8 col-md-9 col-3 ">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 col-md-3 col-6 align-self-center d-none d-md-block"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class=" me-2 icon" style="background: #67d503;height: 10px;width: 10px;padding:0"></span> <span class=""><span class="anim-clr fw-700">Chat Now<br> To Avail 50% off</span><br>
                                </span></a> </div>
                        <div class="col-xl-4 col-md-4 col-12 "> <a href="tel:(628) 256-4002" class="call d-flex align-items-center justify-content-end justify-content-md-start">
                                <span class="icon-phone me-2 icon"></span> <span class="d-none d-md-block"><span class="clr-1 fw-700">Call Now</span><br> <span class="fw-700">(628) 256-4002</span></span> </a> </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block"> <button class="w-100" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get Started</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner bg lozad" data-background-image="assets/img/bannerbg.webp">
        <div class="overlay pt-5 ">
            <div class="container-xl pt-5 mt-3">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 ">
                        <p class=" subhead">Turn Your Manuscript Into A Masterpiece</p>
                        <h1 class="f-50">Get The Best Book Editors</h1>
                        <p>At The Native Publishers, we pride ourselves on our team of seasoned book editing and
                            proofreading experts. They bring a wealth of experience from diverse literary backgrounds,
                            ensuring that your manuscript benefits from a broad
                            spectrum of expertise. </p>
                        <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1 text-md-start mb-0">
                            <li class="col mb-2"> Starts from $0.03 / word </li>
                            <li class="col mb-2">Industry Specific Editors </li>
                            <li class="col mb-2"> 10+ years of experience </li>
                            <li class="col mb-2">Trusted by 400+ authors</li>
                        </ul>
                        <form class="text-start mt-3 mb-4" action="sendmail/sendmail.php" method="post">
                            <div class="row justify-content-center">
                                <div class="form-group">
                                    <!--hidden required values-->
                                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                    <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                                    
                                <input type="hidden" name="Form" value="Banner Form (https://thenativepublishers.com/editing-proofreading/)">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 mb-3"><input class="form-control" type="text" name="name" placeholder="Your Name" required="" value=""> </div>
                                <div class="form-group col-lg-4 col-md-6 mb-3"><input class="form-control" type="email" name="email" placeholder="Your Email" value="" required="required"> </div>
                                <div class="form-group col-lg-4 col-md-6 mb-3"><input class="form-control" type="tel" name="phone" minlength="14" maxlength="14" placeholder="Your Phone" value="" required="required"> </div>
                                <div class="form-group col-lg-8 col-md-6 mb-3"><input class="form-control" autocomplete="nope" name="message" placeholder="Enter Brief" value=""> </div>
                                <div class="form-group col-lg-4 col-md-6"><button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="send_reserve_req" value="Submit Now">Discuss Your
                                        Project</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12"><img class="d-lg-block d-none right" src="assets/img/typewriter.webp"></div>
            <div class="container">
                <div class="cl-slider">
                    <div class="px-3">
                        <div class="cl-logo"><img data-lazy="assets/img/cl-1.webp"></div>
                    </div>
                    <div class="px-3">
                        <div class="cl-logo"><img data-lazy="assets/img/cl-2.webp"></div>
                    </div>
                    <div class="px-3">
                        <div class="cl-logo"><img data-lazy="assets/img/cl-3.webp"></div>
                    </div>
                    <div class="px-3">
                        <div class="cl-logo"><img data-lazy="assets/img/cl-4.webp"></div>
                    </div>
                    <div class="px-3">
                        <div class="cl-logo"><img data-lazy="assets/img/cl-5.webp"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 pt-md-0 mt-5 ">
        <div class="container-xl mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-4 align-self-end"><img class="lozad w-100" data-src="assets/img/profreading.webp" alt=""></div>
                <div class="col-lg-6 col-md-8 ">
                    <h3 class="f-40 fw-700">What makes our book editing better?</h3>
                    <p>What makes us great is that our book editors deal with the manuscript carefully that consumers
                        aim to acquire. Depending on the type of book and its editing needs, we fix each and every
                        mistake to polish the description. Hire experts!</p>
                    <ul class="list-unstyled row row-cols-1 row-cols-md-2 c-list">
                        <li>Basic editing</li>
                        <li>Line by line editing</li>
                        <li>Developmental editing</li>
                        <li>Premium editing</li>
                    </ul>
                    <div class="d-flex flex-wrap mt-5 align-items-center"><button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get Started</button>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid lozad bg cta" data-background-image="assets/img/Mask-Group.png">
            <div class="row justify-content-md-between">
                <div class="col-lg-4 col-md-7 mt-4 ps-md-5">
                    <h3 class="text-white mt-5 fw-700 "> We prepare your book for self-publishing journey! </h3>
                    <p class="text-white">Start now and avail up to 50% off on all of our packages.</p>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-5 position-relative col-5 d-none d-md-block"><img class="lozad w-100" data-src="assets/img/center-img.png"></div>
                <div class="col-lg-2 col-md-6 mt-md-5 pt-4"><a href="tel:(628) 256-4002" class="call d-flex align-items-center justify-content-md-start justify-content-center"> <span class="icon-phone me-2 icon"></span> <span class=""><span class="clr-1 fw-700">Call
                                Now</span><br> <span class="fw-700 text-white">(628) 256-4002</span></span> </a></div>
                <div class="col-lg-2 col-md-6 mt-md-5 pt-4 pe-md-5 mb-5 mb-md-0"><button class="w-100" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get Started</button></div>
            </div>
        </div>
    </section>
    <section class="py-5 pt-md-0 mt-5 ">
        <div class="container-xl mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                    <h3 class="fw-700 f-30">Polished Narration</h3>
                    <p>Select our skillful book editors who have proficiency in providing valuable book editing
                        services. Accomplish your desire to be a noteworthy and blockbuster writer.</p>
                </div>
                <div class="col-lg-3 col-md-4 ">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button one" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Proofreading & Editing</button></h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Example comment for Proofreading &amp; Editing service:</p>
                                    <p> <em> “Since you indicated that you’re allowed to use first-person pronouns,
                                            consider using the active voice here. This is a simple way to make your
                                            writing clearer and more compelling. </em> </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button two collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Clarity Check</button></h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Example comment for Clarity Check:</p>
                                    <p> <em> “The extent to which this is an obvious consequence of the information
                                            you’ve provided is not entirely clear. Try to make this relationship more
                                            apparent. Reviewing your linking word choices may help you here.” </em> </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button three collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Structure Check</button></h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Example comment for Structure Check:</p>
                                    <p> <em> “Make sure to include all the important elements of a discussion section.
                                            In particular, this section could be strengthened by discussing the
                                            limitations of the study in more detail. </em> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 ">
                    <div class="example-document p-3">
                        <p> <span class="highlight highlight-1 bg-1 position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><u title="">I observed a</u><del title="">A</del> striking
                                resemblance<span class="nr-icon-positioner"><span class="nr-icon nr-icon-1" id="nr-icon-doc-1" style="width: 36px; height: 36px; top: -8px; right: -21px; padding: 0px;">1</span></span>
                            </span>
                            <del title="">has been seen</del>between the success rate<u title="">s</u> of <u title="">the</u> Netherlands and <del title="">that of</del>the US. <del title="">In the
                                study by</del>Martynova and Renneboog (2010)<del title="">it already became clear</del>
                            <u title="">found</u> that shareholder protection was almost equal <del title="">between the
                                US and the Netherlands</del><u title="">in both countries</u>. This <del title="">corresponded</del><u title="">corresponds to</u> the fact that the<u title="">y
                                both have a</u> success rate<del title=""> is</del> <u title="">of</u> approximately
                            <del title="">the</del> 40%.
                        </p>
                        <p> <u title="">At least one</u><del title="">More than 1</del> hedge fund acquired a share in
                            <u title="">14</u><del title="">the company in fourteen</del> of the 36 listed companies in
                            my database. <u title="">Of these,</u> 10
                            <del title="">of those</del>were working together to achieve certain goals. The <u title="">hedge funds held a share in the company for an</u> average length of <del title="">hedge funds holding a share in the company is</del>531 days. Although
                            Brav et al. (2008) <u title="">considered</u><del title="">may find</del> this long-term
                            <del title="">period</del><u title="">,</u> I consider 531 days <del title="">is still to be
                                seen as</del> to be short-term.
                        </p>
                        <p>
                            The average percentage <u title="">of</u> voting power <del title="">is initial </del><u title="">ranges between</u> 8.06% and <del title="">the maximum voting power is</del>
                            10.10%. <span class="highlight highlight-2 bg-2 position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><u title="">From</u> <del title="">By looking at</del> this
                                data<u title="">,</u> it can be concluded that hedge funds are not generally involved in
                                acquiring controlling blocks of stock.<span class="nr-icon-positioner"><span class="nr-icon nr-icon-2" id="nr-icon-doc-2" style="width: 36px; height: 36px; top: -8px; right: -40px; padding: 0px;">2</span></span>
                            </span>
                        </p>
                        <p> <span class="highlight highlight-3 bg-d position-relative text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><strong>Discussion</strong><span class="nr-icon-positioner"><span class="nr-icon nr-icon-3" id="nr-icon-doc-3" style="width: 36px; height: 36px; top: -8px; right: -20px; padding: 0px;">3</span></span>
                            </span>
                        </p>
                        <p> <u title="">Conducting</u> <del title="">Doing</del> an extensive<del title="">ly</del>
                            study of the shareholder activism <u title="">undertaken</u> by hedge funds <u title="">in
                                the Netherlands over a</u> <del title="">for the past</del> decade required a great deal
                            of precise work. <del title="">But although</del> <u title="">Even though</u> I did<del title="">n’t</del> <u title="">not</u> use any private information<u title="">,</u> this
                            study <del title="">pretty nice gives a</del> <u title="">provides</u> insight in<u title="">to</u> hedge fund activism in the country.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 pb-5">
        <div class="container ">
            <div class="row text-center justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h2 class="f-40 fw-700">What is the method of our Book editing?</h2>
                    <p>Our group comprises qualified and scholarly members working on a manuscript & making it free from
                        writing faults and puny points. Contact the editing pundits!</p>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row justify-content-between ">
                <div class="p-3 col-lg col-md-4 col-sm-6 proces text-center"><img class="lozad" data-src="assets/img/research-development.png">
                    <h5>Order settlement</h5>
                    <p>As soon as the customer places the order, we initiate the project work.</p>
                </div>
                <div class=" p-3 col-lg col-md-4 col-sm-6 proces text-center"><img class="lozad" data-src="assets/img/7.png">
                    <h5>Project outlining</h5>
                    <p>Depending on the demands of the book, we design a project framework functioning as a blueprint.
                    </p>
                </div>
                <div class=" p-3 col-lg col-md-4 col-sm-6 proces text-center"><img class="lozad" data-src="assets/img/8.png">
                    <h5>Expert editing</h5>
                    <p>Professional editing take place following guidelines with a consultation to client and project
                        supervisors.</p>
                </div>
                <div class="p-3 col-lg col-md-4 col-sm-6 proces text-center"><img class="lozad" data-src="assets/img/9.png">
                    <h5>Task completion</h5>
                    <p>Editing executives and QA check the work to review it is following the instructions.</p>
                </div>
                <div class="p-3 col-lg col-md-4 col-sm-6 proces text-center"><img class="lozad" data-src="assets/img/10.png">
                    <h5>Project delivery</h5>
                    <p>After multiple checks by professionals, the project manager sends the work to the customer.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class=" py-5 mt-5">
            <div class="container-xl">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10 text-center mb-4">
                        <h2 class="fw-700 f-39">At your service 24/7</h2>
                        <p>Within our company, we deeply understand that writers, regardless of the genre they embrace,
                            are entitled to the support required to manifest their creative visions. </p>
                    </div>
                </div>
                <ul class="nav nav-tabs justify-content-between border-bottom-0" id="myTab" role="tablist">
                    <li class="nav-item mb-2" role="presentation"> <button class="nav-link active" id="Ghostwriting-tab" data-bs-toggle="tab" data-bs-target="#Ghostwriting" type="button" role="tab" aria-controls="Ghostwriting" aria-selected="true">Romance</button> </li>
                    <li class="nav-item mb-2" role="presentation">
                        <button class="nav-link" id="Editing-tab" data-bs-toggle="tab" data-bs-target="#Editing" type="button" role="tab" aria-controls="Editing" aria-selected="false">Science
                            Fiction</button>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <button class="nav-link" id="Publishing-tab" data-bs-toggle="tab" data-bs-target="#Publishing" type="button" role="tab" aria-controls="Publishing" aria-selected="false">Historical
                            Fiction</button>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">Mystery/Thriller</button>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <button class="nav-link" id="outluning-tab" data-bs-toggle="tab" data-bs-target="#outluning" type="button" role="tab" aria-controls="outluning" aria-selected="false">Self-Help</button>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <button class="nav-link" id="formating-tab" data-bs-toggle="tab" data-bs-target="#formating" type="button" role="tab" aria-controls="formating" aria-selected="false">Fantasy</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Ghostwriting" role="tabpanel" aria-labelledby="Ghostwriting-tab">
                        <div class="row py-4 align-items-center">
                            <div class="col-lg-6"><img class="lozad " data-src="assets/img/category/romance.png">
                                <h3 class="roma fw-700 f-20"> Romance </h3>
                                <p>A subgenre that consists of love, empathy, and unforgettable characters that the
                                    audience relates to, We write stories that are soul inspiring and heart touching,
                                    collaborate with our ghostwriters to make an unforgettable
                                    masterpiece.</p>
                                <div class="d-flex flex-wrap mt-3 align-items-center"> <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get
                                        Started</button>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="book-slider d-flex">
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/r-1.webp"></a></div>
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/r-2.webp"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Editing" role="tabpanel" aria-labelledby="Editing-tab">
                        <div class="row py-4 align-items-center">
                            <div class="col-lg-6"><img class="lozad " data-src="assets/img/category/scifi.png">
                                <h3 class="roma fw-700 f-20"> Science Fiction </h3>
                                <p>A subgenre that endeavors fantastical and future concepts often includes cutting-edge
                                    technology, space wars, time travel, parallel realities, and wild science fiction.
                                </p>
                                <div class="d-flex flex-wrap mt-3 align-items-center">
                                    <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get Started</button>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="book-slider d-flex">
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/scifi-1.webp"></a></div>
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/scifi-2.webp"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Publishing" role="tabpanel" aria-labelledby="Publishing-tab">
                        <div class="row py-4 align-items-center">
                            <div class="col-lg-6"><img class="lozad " data-src="assets/img/category/hifi.png">
                                <h3 class="roma fw-700 f-20"> Historical Fiction </h3>
                                <p>Historical Fiction is a literary style where fictitious stories are interweaved with
                                    historically accurate places, people, and events, helping bring the past to life and
                                    allowing us to see insights into various cultures
                                    and civilizations.</p>
                                <div class="d-flex flex-wrap mt-3 align-items-center"> <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get
                                        Started</button>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="book-slider d-flex">
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/hifi-1.webp"></a></div>
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/hifi-2.webp"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                        <div class="row py-4 align-items-center">
                            <div class="col-lg-6"><img class="lozad " data-src="assets/img/category/Mystery.png">
                                <h3 class="roma fw-700 f-20"> Mystery/Thriller </h3>
                                <p>The genre frequently includes High-Stakes Plots, Constant Pursuits, and unexpected
                                    twists and turns that keep readers glued to their seats. It is often distinguished
                                    by suspense, immense thrill, and a sense of danger.</p>
                                <div class="d-flex flex-wrap mt-3 align-items-center"> <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get
                                        Started</button>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="book-slider d-flex">
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/Mystery-1.webp"></a></div>
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/Mystery-2.webp"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="outluning" role="tabpanel" aria-labelledby="outluning-tab">
                        <div class="row py-4 align-items-center">
                            <div class="col-lg-6"><img class="lozad " data-src="assets/img/category/self-help.png">
                                <h3 class="roma fw-700 f-20"> Self-Help </h3>
                                <p>We create Self-Help concepts that assist the readers in overcoming all the obstacles
                                    and struggles of life to make the best versions of themselves.</p>
                                <div class="d-flex flex-wrap mt-3 align-items-center"> <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get
                                        Started</button>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="book-slider d-flex">
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/self-help-1.webp"></a></div>
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/self-help-2.webp"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="formating" role="tabpanel" aria-labelledby="formating-tab">
                        <div class="row py-4 align-items-center">
                            <div class="col-lg-6"><img class="lozad " data-src="assets/img/category/fantasy.png">
                                <h3 class="roma fw-700 f-20"> Fantasy </h3>
                                <p>It is a genre where fantasy leads the stage and mixes with real-world events and epic
                                    journeys, taking place in exotic realms, with magic and witchcraft, a mythic world,
                                    and epic quests that keep your audience glued to the
                                    pages.</p>
                                <div class="d-flex flex-wrap mt-3 align-items-center"> <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get
                                        Started</button>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="javascript:void(0)" class="chat d-flex align-items-center"> <span class="icon-chat me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span class="fw-700">Let's Talk</span> </span> </a> </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-2 col-6"> <a href="tel:(628) 256-4002" class="call d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="book-slider d-flex">
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/fantasy-1.webp"></a></div>
                                    <div class="item"><a href="javascript:void(0)" class="portfolio"><img class="lozad " data-src="assets/img/category/fantasy-2.webp"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <section class="py-5 pricing">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-4">
                    <h3 class="fw-700 f-40">Why Choose Us?</h3>
                    <p>The Native Publishers provides comprehensive ghostwriting services to aid authors in writing
                        their books and being one step closer to being an accomplished author. Our book writing experts
                        have in-depth experience of 10+ years and
                        are committed to meeting all your expectations and bringing your ghostwriting dream to life.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row mb-2">
                        <div class="col-md-2"><strong class="clr-1 f-70 subhead">01</strong></div>
                        <div class="col-md-10">
                            <h4 class="fw-700 f-24">Complete Ownership</h4>
                            <p>You retain full ownership. We put in all the hard work. You gain all the assets with our
                                skilled book writing assistance.</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><strong class="clr-1 f-70 subhead">02</strong></div>
                        <div class="col-md-10">
                            <h4 class="fw-700 f-24">Cost-Effectiveness</h4>
                            <p>We uphold high standards and firmly believe achieving perfection shouldn't drain your
                                financial resources. Our rates are reasonable, and our professional online ghostwriting
                                services are unparalleled.</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><strong class="clr-1 f-70 subhead">03</strong></div>
                        <div class="col-md-10">
                            <h4 class="fw-700 f-24">Swift Delivery</h4>
                            <p>Our exceptional work not only aligns with your requirements, but we also acknowledge the
                                value of time and consistently meet our deadlines with expert book writing support.</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><strong class="clr-1 f-70 subhead">04</strong></div>
                        <div class="col-md-10">
                            <h4 class="fw-700 f-24">Client Contentment</h4>
                            <p>Client contentment is our top priority, representing the most crucial aspect of any
                                business. We have consistently demonstrated our unwavering commitment to maintaining the
                                quality and standards of our work every time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row text-center">
                        <div class="col-6 ">
                            <div class="box mb-3">
                                <p class="fw-700 clr-1 f-40 mb-0 subhead">900+</p>
                                <p class="mb-0 ">Books Written</p>
                            </div>
                            <div class="box">
                                <p class="fw-700 clr-1 f-40 mb-0 subhead">50+</p>
                                <p class="mb-0 ">Book Experts</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box mb-3 mt-lg-3">
                                <p class="fw-700 clr-1 f-40 mb-0 subhead">7+</p>
                                <p class="mb-0 ">Year of Experience</p>
                            </div>
                            <div class="box ">
                                <p class="fw-700 clr-1 f-40 mb-0 subhead">100%</p>
                                <p class="mb-0 ">Satisfaction Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid lozad bg cta" data-background-image="assets/img/Mask-Group.png">
            <div class="row justify-content-md-between">
                <div class="col-lg-4 col-md-7 mt-1 ps-md-5 pb-3 ">
                    <h3 class="text-white mt-5 fw-700 "> Struggling with the tedious task of book editing? </h3>
                    <p class="text-white">The Native Publishers give the top book editing services, ensuring the work is
                        dealt with professionally.</p>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-5 position-relative col-5 d-none d-md-block"><img class="lozad w-100" data-src="assets/img/center-img.png"></div>
                <div class="col-lg-2 col-md-6 mt-md-5 pt-4"><a href="tel:(628) 256-4002" class="call d-flex align-items-center justify-content-md-start justify-content-center"> <span class="icon-phone me-2 icon"></span> <span class=""><span class="clr-1 fw-700">Call
                                Now</span><br> <span class="fw-700 text-white">(628) 256-4002</span></span> </a></div>
                <div class="col-lg-2 col-md-6 mt-md-5 pt-4 pe-md-5 mb-5 mb-md-0"><button class="w-100" type="button" data-bs-toggle="modal" data-bs-target="#getaquote">Get Started</button></div>
            </div>
        </div>
    </section>
    <section class="py-5 reviews">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-4">
                    <h3 class="fw-700 f-40">What Our Clients Say</h3>
                    <p>We have been in the industry for a long period, allowing us to gather a bunch of customers who
                        praise our work. Don’t just believe it, read it yourself.</p>
                </div>
            </div>
            <div class="slider">
                <div class="item px-3">
                    <div class="boxs review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-1.webp"></div>
                        <div class="discription"><strong>L. R Della </strong>
                            <p>I took the help of The Native Publishers for book editing of one of my famous clients.
                                She loved it, and the book is a best-seller these days.</p>
                        </div>
                    </div>
                </div>
                <div class="item px-3">
                    <div class="boxs review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-2.webp"></div>
                        <div class="discription"><strong>Wren McMillan</strong>
                            <p>I’ll extend the credit of my poem book to the extraordinary book editing of this place.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item px-3">
                    <div class="boxs review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-3.webp"></div>
                        <div class="discription"><strong>Ella Robinson</strong>
                            <p>I feel admiration for The Native Publishers' talented editors. Their task execution was
                                fabulous!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="lozad bg" data-background-image="assets/img/bannerbg.webp">
        <div class="overlay">
            <div class="container py-5">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <h3 class="f-30 fw-700 ">We Would Love To Hear From You</h3>
                        <form class="text-start mt-5 mb-4" action="sendmail/sendmail.php" method="post">
                            <div class="row justify-content-center">
                                <div class="form-group">
                                    <!--hidden required values-->
                                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                    <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                                    <input type="hidden" name="Form" value="Footer Form (https://thenativepublishers.com/editing-proofreading/)">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <div class="form-group mb-3"><input class="form-control " type="text" name="name" placeholder="Your Name" required="" value=""> </div>
                                    <div class="form-group mb-3"><input class="form-control " type="email" name="email" placeholder="Your Email" value="" required="required"> </div>
                                    <div class="form-group mb-3"><input class="form-control " type="tel" name="phone" minlength="14" maxlength="14" placeholder="Your Phone" value="" required="required"> </div>
                                </div>
                                <div class="form-group col-md-6 "><textarea class="form-control mb-3" autocomplete="nope" name="message" placeholder="Enter Brief" rows="3"></textarea> <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="send_reserve_req" value="Submit Now">Submit</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-5 col-lg-6 "> <a href="tel:(628) 256-4002" class="call mb-3	text-start d-flex align-items-center"> <span class="icon-phone me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Call
                                    Now</span> <br> <span class="fw-700">(628) 256-4002</span> </span> </a> <a href="mailto:info@thenativepublishers.com" class="call mb-3	text-start d-flex align-items-center"> <span class="icon-mail me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Mail
                                    Us</span> <br> <span class="fw-700">info@thenativepublishers.com</span> </span> </a>
                        <a href="javascript:void(0)" class="chat mb-4	text-start d-flex align-items-center"> <span class="icon-location me-2 icon"></span> <span class=""> <span class="clr-1 fw-700">Find
                                    Us</span> <br> <span class="fw-700">100 Pine St Suite 1150-1151 , San Francisco, CA
                                    94111</span> </span> </a>
                        <ul class="list-unstyled d-flex">
                            <li> <a href="https://www.facebook.com/people/The-Native-Publishers/100090333660341/" target="_blank"> <span class="icon-fb me-2 icon"></span> </a> </li>
                            <li> <a href="https://www.instagram.com/thenativepublishers/" target="_blank"> <span class="icon-insta me-2 icon"></span> </a> </li>
                            <li> <a href="http://www.linkedin.com/company/the-native-publishers/" target="_blank"> <span class="icon-linkedin me-2 icon"></span> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 ">
                        <p class="mb-0">© The Native Publishers 2024 | All Rights Reserved </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-2"><a href="https://thenativepublishers.com/assets/img/dmca-certificate.png" target="_blank"><img class="lozad" data-src="assets/img/dmca.webp"></a></div>
                            <div class="col-3"><a href="https://www.trustpilot.com/review/thenativepublishers.com?stars=4&stars=5" target="_blank"><img class="lozad" data-src="assets/img/trustpilot.webp"></a></div>
                            <div class="col-6"><img class="lozad" data-src="assets/img/pay.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="getaquote" tabindex="-1" aria-labelledby="getaquoteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body lozad bg-2 ">
                    <div class="row">
                        <div class="col-lg-6 align-self-center d-none d-lg-block"> <img class="lozad" data-src="assets/img/book.webp"></div>
                        <div class="col-lg-6">
                            <h4 class="f-18 mt-4">Professional Book Editing and Proofreading Services</h4> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            <form class="text-start mb-4" action="sendmail/sendmail.php" method="post">
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <!--hidden required values-->
                                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                        <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                                        <input type="hidden" name="Form" value="Popup Form (https://thenativepublishers.com/editing-proofreading/)">
                                    </div>
                                    <div class="form-group col-md-12 "><input class="form-control mb-3" type="text" name="name" placeholder="Your Name" required="" value=""> <input class="form-control mb-3" type="email" name="email" placeholder="Your Email" value="" required="required"> </div>
                                    <div class="form-group col-md-12 mb-3"><input class="form-control " type="tel" name="phone" minlength="14" maxlength="14" placeholder="Your Phone" value="" required="required"> </div>
                                    <div class="form-group col-md-12 "><textarea class="form-control mb-3" autocomplete="nope" name="message" placeholder="Enter Brief" rows="3"></textarea> <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="send_reserve_req" value="Submit Now">Submit</button></div>
                                </div>
                            </form>
                            <p class="c-claim">Signup Today to Claim Your Discount. Get<br> Started before it’s too
                                late!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content lozad " data-background-image="assets/img/bannerbg.webp" style="background-size: cover;background-position: top;">
                <div class="modal-body text-center py-5 overlay"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h1 class="f-40 fw-700">Signup Now To Avail</h1>
                    <h2 class="f-30 fw-700">50% off</h2>
                    <form class="text-start my-4" action="sendmail/sendmail.php" method="post">
                        <div class="row justify-content-center">
                            <div class="form-group">
                                <!--hidden required values-->
                                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                                <input type="hidden" name="Form" value="Offer Popup Form (https://thenativepublishers.com/editing-proofreading/)">
                            </div>
                            <div class="form-group col-md-5 mb-3"><input class="form-control mb-3" type="text" name="name" placeholder="Your Name" required="" value=""> <input class="form-control mb-3" type="email" name="email" placeholder="Your Email" value="" required="required">
                                <input class="form-control " type="tel" name="phone" minlength="14" maxlength="14" placeholder="Your Phone" value="" required="required">
                            </div>
                            <div class="form-group col-md-5 "><textarea class="form-control mb-3" autocomplete="nope" name="message" placeholder="Enter Brief" rows="3"></textarea> <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="send_reserve_req" value="Submit Now">Submit</button> </div>
                        </div>
                    </form>
                    <p class="c-claim ">Signup Today to Claim Your Discount. Get<br> Started before it’s too late!</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/plugin.js"></script>
    <script type="text/javascript" src="assets/js/lozad.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js?07-05-24_01:40:03"></script>
    <script>
        const observer = lozad('.lozad', {
            rootMargin: '10px 0px',
            threshold: 0.1,
            enableAutoReload: true
        });
        observer.observe();
    </script>
    <script>
        setTimeout(function() {
            $('#offerModal').modal('show');
        }, 3000);
        $(function() {
            var $anchors = $('.process-item');
            (function _loop(idx) {
                $anchors.removeClass('active').eq(idx).addClass('active');
                setTimeout(function() {
                    _loop((idx + 1) % $anchors.length);
                }, 3000);
            }(0));
        });
    </script>
    <script>
        setTimeout(function() {
            loadZendeskWidget();
        }, 5000);

        function loadZendeskWidget() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.id = 'ze-snippet';
            script.async = true;
            script.src = 'https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132';
            document.getElementsByTagName('head')[0].appendChild(script);
        };
        setTimeout(function() {
            zE(function() {
                zE.activate();
            });
            zE(function() {
                $zopim.livechat.setOnUnreadMsgs(function(numUnread) {
                    if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                        $zopim.livechat.window.show();
                    }
                })
            });

            function setButtonURL() {
                $zopim.livechat.window.show();
            }

            function toggleChat() {
                $zopim.livechat.window.show();
            }
        }, 6000);
        $(document).ready(function() {
            $('.chat, .chatt').click(function() {
                $zopim.livechat.window.toggle();
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput-jquery.min.js" integrity="sha512-sVhsc+r7sEickzS6LohO+VDVv2ler/3QY7op8ScWV8KVLLq+m1WAl6uplr/YHmqI0L0j99ehNRh2cIwn7zXcdg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"></script>
    <script>
        function validate() {
            var e = $("input[name='phone']").intlTelInput("getNumber");
            iso = $("input[name='phone']").intlTelInput("getSelectedCountryData").iso2;
            var t = intlTelInputUtils.getExampleNumber(iso, 0, 0);
            "" == e && (e = t);
            var o = intlTelInputUtils.formatNumber(e, iso, intlTelInputUtils.numberFormat.NATIONAL),
                n = intlTelInputUtils.isValidNumber(e, iso),
                a = intlTelInputUtils.getValidationError(e, iso);
            console.log(e), console.log(o), console.log(intlTelInputUtils.formatNumber(e, iso, intlTelInputUtils
                .numberFormat.INTERNATIONAL)), console.log(intlTelInputUtils.formatNumber(e, iso, intlTelInputUtils
                .numberFormat.E164)), console.log(intlTelInputUtils.formatNumber(e, iso, intlTelInputUtils.numberFormat
                .RFC3966)), console.log(n), console.log(a);
        }
        $("input[name='phone']").intlTelInput({
            geoIpLookup: function(e) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(t) {
                    e(t && t.country ? t.country : "");
                });
            },
            initialCountry: "auto",
            separateDialCode: !0,
        }), $("input[name='phone']").on("countrychange", function(e) {
            $(this).val("");
            var t = $(this).intlTelInput("getSelectedCountryData"),
                o = t.dialCode,
                n = intlTelInputUtils.getExampleNumber(t.iso2, 0, 0);
            console.log("placeholder > " + n), (n = intlTelInputUtils.formatNumber(n, t.iso2, 2)), console.log(
                "placeholder > " + n), (n = n.replace("+" + o + " ", "")), console.log("placeholder > " + n), (
                mask = n.replace(/[0-9+]/gi, "0")), $("input[name='phone']").mask(mask, {
                placeholder: n
            });
        }), $("input[name='phone']").on("input", function() {
            /^1/.test(this.value) && (this.value = this.value.replace(/^1/, ""));
        });
    </script>
    <style>
        .iti {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .iti input {
            padding-left: 50px !important;
        }

        input[name='phone'] {
            padding-left: 75px !important;
        }
    </style>
</body>

</html>