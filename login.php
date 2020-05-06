<html lang="en-GB" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NOT4YOU &#8211; F#!& OFF</title>
    <link rel="stylesheet" id='boostramp' href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' id='fullscreenly-parent-style-css' href='https://not4you.se/text/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='https://not4you.se/text/dashicons.min.css?ver=5.4.1' type='text/css' media='all' />

    <style type="text/css">
        .image-header {

            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0) scale(1.0, 1.0);
            transform: translateZ(0);
            -ms-transform: translateZ(0);

            background: ;

            background-size: cover;
            background-attachment: scroll;
            -webkit-animation: grow 60s linear 10ms infinite;
            animation: grow 60s linear 10ms infinite;

            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            z-index: -2;
            background: #222 url(https://not4you.se/img/header.jpeg ) center center no-repeat;
        }
    </style>


</head>

<body>

    <div class="header">
        <div class="image-header"></div>
        <div class="header-menu">
            <div class="header-top">

                <!-- logo -->

                <a href="https://not4you.se/" rel="home" class="logo">NOT4YOU</a>



                <nav id="nav" class="top-navigation" role="navigation" aria-label="Top Menu">
                    <span id="creativeily-menu-back"><span class="dashicons dashicons-arrow-left-alt2"></span></span>
                    <span id="creativeily-menu-home"><span class="dashicons dashicons-admin-home"></span></span>

                    <div id="top-menu" class="menu">
                        <ul id="menu-menu-1" class="">
                            <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-18">
                                <a href="http://not4you.se/" aria-current="page">Home</a></li>
                            <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                                <a href="https://not4you.se/getstudentinfo.php">Show
                                    table</a></li>
                            <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                                <a href="https://not4you.se/login.php">LOGIN</a>
                            </li>
                        </ul>
                    </div> <a href="#" id="accessibility-close-menu"></a>
                </nav><!-- #site-navigation -->
            </div>
        </div>


    </div>


    <div class="container" id="start">

        <form action="http://not4you.se/studentadded.php" method="post">
            <b>Add a New Student</b>
            <p>First Name:
                <input type="text" name="first_name" size="30" value="" />
            </p>
            <p>Last Name:
                <input type="text" name="last_name" size="30" value="" />
            </p>
            <p>Email:
                <input type="text" name="email" size="30" value="" />
            </p>
            <p>Street:
                <input type="text" name="street" size="30" value="" />
            </p>
            <p>City:
                <input type="text" name="city" size="30" value="" />
            </p>
            <p>State (2 Characters):
                <input type="text" name="state" size="30" maxlength="2" value="" />
            </p>
            <p>Zip Code:
                <input type="text" name="zip" size="30" maxlength="5" value="" />
            </p>
            <p>Phone Number:
                <input type="text" name="phone" size="30" value="" />
            </p>
            <p>Birth Date (YYYY-MM-DD):
                <input type="text" name="birth_date" size="30" value="" />
            </p>
            <p>Sex (M or F):
                <input type="text" name="sex" size="30" maxlength="1" value="" />
            </p>
            <p>Lunch Cost:
                <input type="text" name="lunch" size="30" value="" />
            </p>
            <p>
                <input type="submit" name="submit" value="Send" class="button button-readmore" />
            </p>



        </form>



    </div><!-- #content -->

    <div class="jumbotron text-center" style="margin-bottom:0">
        <div class="site-info">
            &copy;2020 NOT4YOU
        </div>
    </div>




</body>

</html>