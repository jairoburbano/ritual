<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400' rel='stylesheet' type='text/css'>
        <title>Ritual Age Check</title>
        <style>
            @font-face {
                font-family: Woolen;
                src: url(../fonts/Woolen.otf);
            }
            html {
                height: 100%;
                width: 100%;
            }
            body {
                margin: 0;
                height: 100%;
                width: 100%;
                background-image: url(assets/1.jpg);
                background-size: cover;
                font-family: 'Crimson Text', serif;
            }
            body::after {
                content: '';
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
                background: rgba(0,0,0,1);
                background: -moz-linear-gradient(top, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,0,0,1)), color-stop(100%, rgba(255,255,255,0)));
                background: -webkit-linear-gradient(top, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%);
                background: -o-linear-gradient(top, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%);
                background: -ms-linear-gradient(top, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%);
                background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#ffffff', GradientType=0 );
                -webkit-background-size: cover;
            }
            .logo {
                width: 60px;
                height: auto;
                margin: auto;
                display: block;
                margin-bottom: -10px;
            }
            svg {
                fill: white;
                width: 70%;
                max-width: 400px;
                max-height: 80px;
                margin: auto;
                display: block;
            }
            .age-check {
                width: 100%;
                height: 100%;
                position: relative;
                z-index: 3;
            }
            .age__content {
                position: absolute;
                top: 30px;
                left: 50%;
                transform: translate(-50%, 0);
                z-index: 2;
                color: white;
                font-size: 16px;
                line-height: 22px;
                width: 100%;
                max-width: 550px;
                margin: auto;
                text-align: center;
            }
            .age__text {
                width: 100%;
                max-width: 370px;
                padding: 0 10px;
                margin: 0px auto 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .age__buttons {
                text-align: center;
                margin-top: 20px;
            }
            .age__buttons a {
                width: 85px;
                height: 59px;
                line-height: 67px;
                border: 1px solid white;
                font-family: Woolen;
                display: inline-block;
                text-align: center;
                color: white;
                font-size: 40px;
                text-decoration: none;
                font-weight: lighter;
                margin: 0 5px;
                opacity: .5;
                -webkit-transition: all 300ms;
                -o-transition: all 300ms;
                transition: all 300ms;
            }
            .age__buttons a:hover {
                opacity: 1;
            }
            @media screen and (min-width:740px) {
                .logo {
                    width: 91px;
                    margin-bottom: 20px;
                }
                .age__content {
                    top: 60px;
                    font-size: 20px;
                    line-height: 31px;
                }
                .age__text {
                    margin: 100px auto 0;
                }
                .age__buttons {
                    margin-top: 30px;
                }
            }
        </style>
    </head>
    <body>
        <?php include('svg-defs.svg'); ?>
        <div class="age-check">
            <div class="age__content">
                <img src="img/logo.svg" alt="logo" class="logo">
                <svg><use xlink:href="#shape-ritual" /></svg>
                <div class="age__text">
                    I AM OF LEGAL DRINKING AGE IN THE COUNTRY WHERE I AM ACCESSING THIS SITE.
                </div>
                <div class="age__buttons">
                    <a href="#" title="Si" class="age__btn">Yes</a>
                    <a href="#" title="No" class="age__btn">No</a>
                </div><!--.age__buttons-->
            </div><!--.age__content-->
        </div><!--.age-check-->
    </body>
</html>