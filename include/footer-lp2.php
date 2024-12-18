<footer>
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        Contact us today to <br>
                        receive a free <br>
                        consultation
                    </h2>
                    <h3>Speak with our consultant now.</h3>
                    <p>Feel free to reach out to us today to receive a free consultation from our experts. We will
                        answer all your questions and help you get started on your journey to become a fully published
                        author! We’re available 24/7.</p>
                    <a href="javascript:$zopim.livechat.window.show();" class="btn speak-btn chat">Live Chat</a>
                    <a class="tel" href="tel:+16282564002">
                        <img src="assets/publishing-new/images/images-amazon-tel.png" alt="">
                         +1(628) 256-4002
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="info-contact">
                        <h4>
                            Get in touch
                        </h4>
                        <p>Use the form below to contact us regarding your ghostwriting concerns. Please be as detailed
                            as possible. You may also email or call us for more information.</p>
                        <div class="seal">
                            <img src="assets/publishing-new/images/images-form-seal.png" alt="">
                        </div>
                        <div class="info-form" data-form-type="signup_form">
                            <form action="sendmail/send_mail_lp.php" class="app_contact_form leadForm" method="post">
                                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                <div class="row">
                                    <div class="col-md-7">
                                        <input type="text" name="name" placeholder="Name" class="required form-control"
                                            aria-required="true">
                                        <input type="text" name="email" placeholder="Email Address"
                                            class="required email form-control" aria-required="true">
                                        <input type="tel" class="required form-control ftpn" name="pnumber" minlength="7"
                                            maxlength="14" placeholder="Your Phone" aria-required="true">
                                    </div>
                                    <div class="col-md-5">
                                        <textarea name="message" class="form-control"
                                            placeholder="To help us understand better, enter a brief description about your project."
                                            aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div id="formResult"></div>
                                <input type="submit" name="send_reserve_req" class="btn btn-red " value="Submit Your Request">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p> Copyright © 2023 - The Native Publishers. All Rights Reserved</p>
                </div>
                <!--<div class="col-md-6">-->
                    <!--<ul class="term">-->
                    <!--    <li><a href="order/terms-of-use">Terms &amp; Condition</a></li>-->
                    <!--    <li><a href="order/privacy">Privacy Policy</a></li>-->
                    <!--</ul>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <div style="display: none;" class="popupform" id="popupform">
        <div class="modal-body">
            <div class="popup-content" data-form-type="signup_form">
                <h2>We are here to help!</h2>
                <p>Get 50% Discount on your first order.</p>
                <form action="sendmail/send_mail_lp.php" id="regForm" class="validate-popupform leadForm pt-2" method="post">
                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                    <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="required form-control" name="name" placeholder="Your Name">
                            <input type="email" class="required form-control" name="email" placeholder="Your Email">
                            <input type="number" class="required form-control ftpn" name="pnumber" minlength="7"
                                maxlength="14" placeholder="Your Phone">
                            <textarea autocomplete="nope" name="message" class="form-control"
                                placeholder="To help us understand better, enter a brief description about your project."></textarea>
                        </div>
                        <div class="col-md-12">
                            <div id="formResult"></div>
                            <input type="hidden" class="btn btn-danger" id="popup_close" value="Close">
                            <input type="submit" class="btn btn-black" name="send_reserve_req" value="Submit Now">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


    <script type="text/javascript" src="assets/publishing-new/js/js-libs.js"></script>
    <script type="text/javascript" src="assets/publishing-new/js/js-functions.js"></script>
    <!--<script src="../unpkg.com/%40lottiefiles/lottie-player%401.7.1/dist/lottie-player.js"></script>-->
    <!--<script src="assets/js/web-workers/backend/web-worker-backend.js" type="text/javascript"></script>-->
    <!--<script src="assets/js/socketPackage/socket.io.js" type="text/javascript"></script>-->
    <!--<script src="assets/js/socketPackage/socket.js" type="text/javascript"></script>-->
    <!--<script src="assets/js/socketPackage/online-offline.js" type="text/javascript"></script>-->


<script>
    $('input[name="pnumber"]').on('keypress', function(event) {
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
</script>

<script>
//     $(document).ready(function() {
//         // $("#entry-box_close").click(function() {
//         //     $("#popupform").fadeOut();
//         // });
//         $('.open-popup').click(function() {
//             $("#popupform").css("display", "flex").fadeIn();
//         })
//     })

//     $("#popup_close").click(function() {
//         $("#popupform").fadeOut()
//     }), window.location.hash || setTimeout(function() {
//         $("#popupform").css("display", "flex").fadeIn()
//     }, 10000)
 </script>

    <!-- Start of designneshelp Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
<!-- End of designneshelp Zendesk Widget script -->
<script>
$('.livechat, .live_chatt, .chatt, .chat').click(function () {
        $zopim.livechat.window.toggle();
        return false;
      }
      );
      $(window).on('load', function() {
        $zopim.livechat.window.toggle();
        // $zopim.livechat.window.show();
    });
zE(function() {
        zE.activate();
    });
    zE(function() {
        $zopim(function() {
          $zopim.livechat.setOnUnreadMsgs(unread);
            function unread(number) {
            if (number>=1)
            {
                $zopim.livechat.window.toggle();
                $zopim.livechat.window.show();
            }
            }
        });
    });
    
</script>
    
    

</body>
</html>