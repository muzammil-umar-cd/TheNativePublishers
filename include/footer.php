
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h6>@ 2023 The Native Publishers | All Rights Reserved.</h6>
                    </div>
                </div>
                <div class="col-md-5">
                    <!--<div class="footer-bottom-right">-->
                    <!--    <a href="#">Privacy & Policy |</a>-->
                    <!--    <a href="#">Terms & Condition</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
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
        $(function() {
            $(".tabs li:first").addClass("current");
            $(".tab-content .one").not(":first").hide();
            $(".tabs li").click(function() {
                $(this).addClass("current").siblings().removeClass("current");
                var index = $(".tabs li").index(this);
                $(".tab-content .one").eq(index).fadeIn().siblings().fadeOut();
            })
        })

        $(function() {
            $(".tabs li:first").addClass("current");
            $(".tab-content .one:first").css('display', 'block');
            autoScroll();
            contentHover();
            currentHover();

        });
        var i = -1;
        var n = $(".tabs li").length - 1;
        var offset = 3000;
        var timer = null;

        function autoScroll() {
            i++;
            if (i > n)
                i = 0;
            slide(i);
            timer = window.setTimeout(autoScroll, offset);
        }

        function slide(i) {
            $(".tabs li").eq(i).addClass("current").siblings().removeClass("current");
            $(".tab-content .one").eq(i).fadeIn().siblings().hide();
        }

        function currentHover() {
            $(".tabs li").hover(function() {
                if (timer) {
                    clearTimeout(timer);
                    i = $(this).prevAll().length;
                    slide(i);
                }
            }, function() {
                timer = window.setTimeout(autoScroll, offset);
                this.blur();
                return false;
            })
        }

        function contentHover() {
            $(".tab-content .one").hover(function() {
                if (timer) {
                    clearTimeout(timer);
                    i = $(this).prevAll().length;
                    slide(i);
                }
            }, function() {
                timer = window.setTimeout(autoScroll, offset);
                this.blur();
                return false;
            })
        }
    </script>
    <script>
        $('.nav-tabs-selector').on('change', function(e) {
            $(this).closest(".tab-area").find('.nav-tabs li a').eq($(this).val()).tab('show');
        });
    </script>
    <script>
        const tabs = document.querySelectorAll('[data-tab-target]')
        const tabContents = document.querySelectorAll('[data-tab-content]')

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget)
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active')
                })
                tabs.forEach(tab => {
                    tab.classList.remove('active')
                })
                tab.classList.add('active')
                target.classList.add('active')
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#featured-content').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                item: 4,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.story-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                item: 4,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
<style>
   .right-img img {
    width: 100%;
}
    #entry-popup {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 99999;
    align-items: center;
    background-color: rgba(0, 0, 0, .62);
    display: none;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
    top: 0;
    left: 0;
}
#entry-popup .entry-box {
    background: url(images/popup.png);
    width: 100%;
    max-width: 500px !important;
    height: auto;
    position: relative;
    margin: 0 auto;
    background-size: cover;
    background-repeat: no-repeat;
    border: 2px solid #ffcb20ab;
    border-radius: 15px;
    top: 80px;
}
#entry-popup .entry-box form {
    padding: 40px 70px 100px 20px;
    position: relative;
    z-index: 2;
}
#entry-popup .entry-box form h1 {
    color: #fff;
    font-size: 20px;
    font-weight: 700;
}
#entry-popup .entry-box .form-control {
    height: 40px;
    margin: 10px auto !important
}
#entry-popup .entry-box textarea.form-control {
    height: auto;
    margin-bottom: 20px !important;
}
#entry-popup .entry-box form p {
    color: #fff;
    border-left: 4px solid #f5be0b;
    border-radius: 10px 40px 0px 0px;
    text-indent: 10px;
}
#entry-popup .entry-box form p strong {
    color: #f5be0b;
}
#entry-popup .entry-box button {
    border-radius: 5px;
    background: linear-gradient(3deg , #fea00a, #d0b358);
    color: #000;
    padding: 0 20px;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 700;
    height: 40px;
    cursor: pointer;
    border: none;
    margin:0 auto;
}
#entry-popup a#entry-box_close {
    background-color: #ff0000;
    width: 40px;
    height: 40px;
    display: block;
    line-height: 40px;
    color: #fff;
    border-radius: 50%;
    font-size: 20px;
    text-align: center;
    position: absolute;
    right: -10px;
    top: -10px;
    z-index: 999;
}
#entry-popup .entry-box .right-img {
    position: absolute;
    right: -100px;
    bottom: -2px;
    width: 50%;
}
#entry-popup .entry-box .right-img img {
    width: 100% !important;
    filter: drop-shadow(2px 4px 6px #000);
}
#entry-popup .entry-box form .col-md-12.form-group {
    padding: 0;
}
.mobile-btn {
    display: none;
}
@media only screen and (max-width: 767px){
    #entry-popup .entry-box form {
        padding: 40px 20px;
    }
    #entry-popup .entry-box .right-img {
        display: none;
    }
    .text-1 {
        display: none;
    }
    .desk-btn {
        display: none;
    }
    .mobile-btn {
        display: block;
    }
}
.customalert{
	position: fixed;
	padding: 15px 20px;
	min-width: 180px;
	z-index: 99999;
	left: -35px;
	top: 50%;
	transform: rotate(270deg) translateY(-50%);
	text-align: center;
	background: rgba(242, 222, 222, 0.5)
}
   </style>
   
   
   
<style>
    /* Small devices (phones) */
    @media only screen and (max-width: 600px) {
        #exampleModal {
            width: 100% !important;
        }

        #myIframe {
            width: 100% !important;
            position: relative;
            left: 25%;
            /*top: -80px;*/
        }
    }

     /*Medium devices (tablets) */
    @media only screen and (min-width: 601px) and (max-width: 992px) {
        #myIframe {
            height: 681px !important;
            width: 1420px !important;
            position: relative;
            left: -210px;
        }
        #entry-popup{
            align-items: normal;
        }
    }

    /* Large devices (laptops/desktops) */
    @media only screen and (min-width: 993px) {
        #myIframe {
            height: 681px !important;
            width: 100% !important;
            position: fixed;
            margin-left: -10%;
            padding: 0px;
            overflow-x: hidden !important;
            /*margin-top: -20px;*/
        }
        #entry-popup{
            align-items: normal;
        }
    }
    
    @media (max-width: 991.98px){
        #myIframe {
            width: 100% !important;
            height: 100% !important;
            left: -2px;
            top: 0px;
            position: fixed;
          }
        #staticBackdrop .modal-dialog {
          width: 100%;
          max-width: 100%;
          transform: scale(1);
        }
        #popupform {
          margin: 0 !important;
          height: 100%;
        }
    }
</style>



<script>
    $(document).ready(function () {
        $('.open-popup').click();
        $("#entry-box_close").click(function () {
            $("#entry-popup").fadeOut();
        });
        $('.open-popup').click(function () {
            $("#entry-popup").css("display", "flex").fadeIn();
        })
    })

    $("#entry-box_close").click(function () {
        $("#entry-popup").fadeOut()
    }), window.location.hash || setTimeout(function () {
        $("#entry-popup").css("display", "flex").fadeIn()
    }, 10000)
</script>


<!-- Start of designneshelp Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
<!-- End of designneshelp Zendesk Widget script -->
<script>
$('.livechat, .live_chatt, .chatt').click(function () {
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
