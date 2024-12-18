<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS!!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
       /* ---- reset ---- */
body {
  margin: 0;
  font: normal 75% Arial, Helvetica, sans-serif;
}
canvas {
  display: block;
  vertical-align: bottom;
} /* ---- particles.js container ---- */
#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #292d5b;
  background-image: url("images/bg-primary.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
} /* ---- stats.js ---- */
.count-particles {
  background: #292d5b;
  position: absolute;
  top: 48px;
  left: 0;
  width: 80px;
  color: #13e8e9;
  font-size: 0.8em;
  text-align: left;
  text-indent: 4px;
  line-height: 14px;
  padding-bottom: 2px;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: bold;
}
.js-count-particles {
  font-size: 1.1em;
}
#stats,
.count-particles {
  -webkit-user-select: none;
  margin-top: 5px;
  margin-left: 5px;
}
#stats {
  border-radius: 3px 3px 0 0;
  overflow: hidden;
}
.count-particles {
  border-radius: 0 0 3px 3px;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
body > div {
  height: content;
}
body .screen {
  opacity: 0.25;
  -webkit-animation: slide 4s linear infinite;
          animation: slide 4s linear infinite;
}
body .star {
  -webkit-animation: bounce 4s linear infinite;
          animation: bounce 4s linear infinite;
}
body .shaddow {
  transform-origin: center center;
  -webkit-animation: bounceShaddow 4s linear infinite;
          animation: bounceShaddow 4s linear infinite;
}

@-webkit-keyframes slide {
  from {
    transform: translatex(-10%);
  }
  to {
    transform: translatex(100%);
  }
}

@keyframes slide {
  from {
    transform: translatex(-10%);
  }
  to {
    transform: translatex(100%);
  }
}
@-webkit-keyframes bounce {
  0%, 40%, 50%, 60%, 100% {
    transform: translatey(0%);
  }
  45%, 55% {
    transform: translatey(-10%);
  }
}
@keyframes bounce {
  0%, 40%, 50%, 60%, 100% {
    transform: translatey(0%);
  }
  45%, 55% {
    transform: translatey(-10%);
  }
}
@-webkit-keyframes bounceShaddow {
  0%, 40%, 50%, 60%, 100% {
    opacity: 100%;
    transform: scale(1, 1);
  }
  45%, 55% {
    opacity: 30%;
    transform: scale(0.8, 0.7) translatey(10%);
  }
}
@keyframes bounceShaddow {
  0%, 40%, 50%, 60%, 100% {
    opacity: 100%;
    transform: scale(1, 1);
  }
  45%, 55% {
    opacity: 30%;
    transform: scale(0.8, 0.7) translatey(10%);
  }
}

img{
    z-index: 9999;
    height: 150px !important;
}
   </style>
   
</head>
<body>
    
<!-- Redirection Counter -->
<script type="text/javascript">
  var count = 5; // Timer
  var redirect = "/publishing-lp"; // Target URL
  function countDown() {
    var timer = document.getElementById("timer"); // Timer ID
    if (count > 0) {
      count--;
      timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
      setTimeout("countDown()", 1000);
    } else {
      window.location.href = redirect;
    }
  }
</script>

    <div id="particles-js"></div>
    <div class="row d-flex justify-content-center">

  <!--Grid column-->
  <div class="col-md-12">
    <img src="images/logo-light.png" alt="The Native Publishers " class="img-responsive center-block">
  </div>
  <!--Grid column-->
  <!--Grid column-->
  <div class="col-md-12 text-center">
    <h2 class="text-light" style="color: white;font-family: "Times New Roman", Times, serif; margin-top: 40px !important;">Thank you for availing the 50% Discount!!!</h2>
  </div>
  <!--Grid column-->
  
  <!--Grid column-->
  <div class="col-md-12 text-center mt-5 pt-5" style="z-index: 9999;position: relative;margin-top: 20px !important;">
    <p id="timer" class="text-light text-center" style="color: white !important;font-size: 17px;">
        <script type="text/javascript">
          countDown();
        </script>
      </p>
      <p class="copyright text-light mt-5 text-center" style="color: white !important;font-size: 19px;">&copy; thenativepublishers.com</p>
  </div>
  <!--Grid column-->

</div>
    
    
    
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
<script>
    particlesJS("particles-js", {
  particles: {
    number: {
      value: 50,
      density: { enable: true, value_area: 800.3181133058181 }
    },
    color: { value: "#000000" },
    shape: {
      type: "edge",
      stroke: { width: 1, color: "white" },
      polygon: { nb_sides: 3 },
      image: { src: "img/github.svg", width: 100, height: 100 }
    },
    opacity: {
      value: 0.49716301422833176,
      random: true,
      anim: { enable: false, speed: 0.1, opacity_min: 0.1, sync: false }
    },
    size: {
      value: 2.7,
      random: true,
      anim: { enable: false, speed: 15, size_min: 0.1, sync: false }
    },
    line_linked: {
      enable: true,
      distance: 160.3412060865523,
      color: "#fdfdfd",
      opacity: 0.4008530152163807,
      width: 1
    },
    move: {
      enable: true,
      speed: 5,
      direction: "none",
      random: true,
      straight: false,
      out_mode: "bounce",
      bounce: true,
      attract: {
        enable: true,
        rotateX: 1763.753266952075,
        rotateY: 1603.4120608655228
      }
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: true, mode: "grab" },
      onclick: { enable: true, mode: "push" },
      resize: true
    },
    modes: {
      grab: { distance: 400, line_linked: { opacity: 0.156297557645007 } },
      bubble: {
        distance: 400,
        size: 30,
        duration: 2,
        opacity: 0.09744926547616141,
        speed: 4.2
      },
      repulse: { distance: 250, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 }
    }
  },
  retina_detect: true
});
var count_particles, stats, update;
stats = new Stats();
stats.setMode(0);
stats.domElement.style.position = "absolute";
stats.domElement.style.left = "0px";
stats.domElement.style.top = "0px";
document.body.appendChild(stats.domElement);
count_particles = document.querySelector(".js-count-particles");
update = function () {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
//     $(function() {
//   function startTimer(duration, display) {
//     var timer = duration,
//       minutes, seconds;
//     setInterval(function() {
//       seconds = parseInt(timer % 60, 10);
//       seconds = seconds < 10 ? "0" + seconds : seconds;
//       display.text(seconds);
//       if (--timer < 0) {
//         timer = duration;
//       }
//     }, 10000);
//   }

//   $(function($) {
//     var fiveMinutes = 10,
//       display = $('#time');
//     startTimer(fiveMinutes, display);
//   });

//   setTimeout(function() {
//     window.location.href = "https://thenativepublishers.com/publishing-lp";
//   }, 10000);
// });
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
            $zopim.livechat.window.show();
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