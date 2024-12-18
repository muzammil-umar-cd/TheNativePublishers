<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Resume Writing Inc</title>
    <link rel="shortcut icon" href="images/favico.ico" type="image/x-icon">
    <link rel="icon" href="images/favico.ico" type="image/x-icon">

    <style>
        * {
            box-sizing: border-box;
            /* outline:1px solid ;*/
        }

        body {
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e1e8ed', GradientType=0);
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }

        .wrapper-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper-2 {
            padding: 30px;
            text-align: center;
        }

        .wrapper-2 img {
            width: 80%;
            padding: 30px;
        }

        h1 {
            font-family: 'Kaushan Script', cursive;
            font-size: 4em;
            letter-spacing: 3px;
            color: #8C62FE;
            margin: 0;
            margin-bottom: 20px;
        }

        .wrapper-2 p {
            margin: 0;
            font-size: 1.3em;
            color: #aaa;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .go-home {
            color: #fff;
            background: #5892FF;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
        }

        .footer-like {
            margin-top: auto;
            background: #D7E6FE;
            padding: 6px;
            text-align: center;
        }

        .footer-like p {
            margin: 0;
            padding: 4px;
            color: #5892FF;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .footer-like p a {
            text-decoration: none;
            color: #5892FF;
            font-weight: 600;
        }

        @media (min-width:360px) {
            h1 {
                font-size: 4.5em;
            }

            .go-home {
                margin-bottom: 20px;
            }
        }

        @media (min-width:600px) {
            .content {
                max-width: 1000px;
                margin: 0 auto;
            }

            .wrapper-1 {
                height: initial;
                max-width: 620px;
                margin: 0 auto;
                margin-top: 50px;
                box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
            }

        }
    </style>
    
    <!-- Start of designneshelp Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
    <!-- End of designneshelp Zendesk Widget script -->
</head>

<body>
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <img src="/assets/images/success-logo.png" />
                <h1 style="display: flex;justify-content: center;"><lottie-player src="success.json" speed="1" style="width: 30%; height: auto" loop="" autoplay="" direction="1" mode="normal"></lottie-player></h1>
                <p>Thanks for contacting us, we will reply</p>
                <p> promptly once your message is received. </p>
            </div>
        </div>
    </div>



    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

    <script>
        zE(function() {
            $zopim(function() {
                // chat popup on new message
                $zopim.livechat.setOnUnreadMsgs(function(numUnread) {
                    console.log("New message received", numUnread);
                    if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                        $zopim.livechat.window.show();
                    }
                });
            });
        });
    </script>

    <script>
        setTimeout(function() {
            window.location.href = "/";
        }, 7000);
    </script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>