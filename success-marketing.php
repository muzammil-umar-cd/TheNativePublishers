<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Successful</title>
    <link rel="stylesheet" href="marketing_lp/css/success.css" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <section class="nav">
        <img src="marketing_lp/images/blacklogo.png" style="max-height: 180px;padding-bottom:40px;" />
        <h1>Thank You!</h1>
        <h3 class="span loader">
            <span class="m">S</span>
            <span class="m">U</span>
            <span class="m">B</span>
            <span class="m">S</span>
            <span class="m">C</span>
            <span class="m">R</span>
            <span class="m">I</span>
            <span class="m">P</span>
            <span class="m">T</span>
            <span class="m">I</span>
            <span class="m">O</span>
            <span class="m">N</span>
            <span class="m">&nbsp;</span>
            <span class="m">S</span>
            <span class="m">U</span>
            <span class="m">C</span>
            <span class="m">C</span>
            <span class="m">E</span>
            <span class="m">S</span>
            <span class="m">S</span>
            <span class="m">F</span>
            <span class="m">U</span>
            <span class="m">L</span>
        </h3>
        <!--Grid column-->
        <div class="col-md-12 text-center mt-5 pt-5"
            style="z-index: 9999;position: relative;margin-top: 20px !important;">
            <p class="copyright text-light mt-5 text-center" style="color: white !important;font-size: 19px;padding-top: 20px;">©
                thenativeppublishers.com</p>
        </div>
        <!--Grid column-->
    </section>
    <script type="text/javascript">
        // redirecting to a new page after 4 seconds
        setTimeout(function () { window.location = "/book-marketing-lp"; }, 4000); 
    </script>
    <script>
        class NavigationPage {
            constructor() {
                this.currentId = null;
                this.currentTab = null;
                this.tabContainerHeight = 70;
                this.lastScroll = 0;
                let self = this;
                $(".nav-tab").click(function () {
                    self.onTabClick(event, $(this));
                });
                $(window).scroll(() => {
                    this.onScroll();
                });
                $(window).resize(() => {
                    this.onResize();
                });
            }

            onTabClick(event, element) {
                event.preventDefault();
                let scrollTop =
                    $(element.attr("href")).offset().top - this.tabContainerHeight + 1;
                $("html, body").animate({ scrollTop: scrollTop }, 600);
            }

            onScroll() {
                this.checkHeaderPosition();
                this.findCurrentTabSelector();
                this.lastScroll = $(window).scrollTop();
            }

            onResize() {
                if (this.currentId) {
                    this.setSliderCss();
                }
            }

            checkHeaderPosition() {
                const headerHeight = 75;
                if ($(window).scrollTop() > headerHeight) {
                    $(".nav-container").addClass("nav-container--scrolled");
                } else {
                    $(".nav-container").removeClass("nav-container--scrolled");
                }
                let offset =
                    $(".nav").offset().top +
                    $(".nav").height() -
                    this.tabContainerHeight -
                    headerHeight;
                if (
                    $(window).scrollTop() > this.lastScroll &&
                    $(window).scrollTop() > offset
                ) {
                    $(".nav-container").addClass("nav-container--move-up");
                    $(".nav-container").removeClass("nav-container--top-first");
                    $(".nav-container").addClass("nav-container--top-second");
                } else if (
                    $(window).scrollTop() < this.lastScroll &&
                    $(window).scrollTop() > offset
                ) {
                    $(".nav-container").removeClass("nav-container--move-up");
                    $(".nav-container").removeClass("nav-container--top-second");
                    $(".nav-container-container").addClass("nav-container--top-first");
                } else {
                    $(".nav-container").removeClass("nav-container--move-up");
                    $(".nav-container").removeClass("nav-container--top-first");
                    $(".nav-container").removeClass("nav-container--top-second");
                }
            }

            findCurrentTabSelector(element) {
                let newCurrentId;
                let newCurrentTab;
                let self = this;
                $(".nav-tab").each(function () {
                    let id = $(this).attr("href");
                    let offsetTop = $(id).offset().top - self.tabContainerHeight;
                    let offsetBottom =
                        $(id).offset().top + $(id).height() - self.tabContainerHeight;
                    if (
                        $(window).scrollTop() > offsetTop &&
                        $(window).scrollTop() < offsetBottom
                    ) {
                        newCurrentId = id;
                        newCurrentTab = $(this);
                    }
                });
                if (this.currentId != newCurrentId || this.currentId === null) {
                    this.currentId = newCurrentId;
                    this.currentTab = newCurrentTab;
                    this.setSliderCss();
                }
            }

            setSliderCss() {
                let width = 0;
                let left = 0;
                if (this.currentTab) {
                    width = this.currentTab.css("width");
                    left = this.currentTab.offset().left;
                }
                $(".nav-tab-slider").css("width", width);
                $(".nav-tab-slider").css("left", left);
            }
        }

        new NavigationPage();
    </script>
    
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=20db3496-5dc4-413f-87df-13b5014f55f7"> </script>
<!-- End of  Zendesk Widget script -->
<script>
zE(function() {
        zE.activate();
    });
    zE(function() {
        $zopim(function() {
          $zopim.livechat.setOnUnreadMsgs(unread);
            function unread(number) {
            if (number>=1)
            {
          $zopim.livechat.window.show();
            }
            }
        });
    });
</script>
</body>

</html>