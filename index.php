<!-- head_section.php section -->
<?php require_once('includes/head_section.php') ?>
<!-- End head_section.php section -->

<!-- UI Kit Web Framework -->
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js"></script>
<!-- UI Kit Web Framework -->

<title>CGPA Calculator</title>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPT6L5D" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navigation Bar B4 Section-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#1B1C1E;">
        <div class="container">
            <a href="#home"><img data-src="/static/images/Logo.png" data-srcset="/static/images/Logo.png" width="60"
                    height="auto" alt="" uk-img></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="text-align:center;"> </ul>
                <ul class="navbar-nav my-2 my-lg-0" style="text-align:center;">
                    <li class="nav-item">
                        <a class="nav-link" href="#home" class="item">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" class="item">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.facebook.com/ahmadauf.nasruddin" class="item"
                                id="dropdown1">
                                <i class="facebook icon"></i> Facebook</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://twitter.com/Auf2098" class="item" id="dropdown1">
                                <i class="twitter icon"></i> Twitter</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.instagram.com/ahmadauf2098/" class="item"
                                id="dropdown1">
                                <i class="instagram icon"></i> Instagram</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation Bar B4 Section-->

    <!-- Banner Section -->
    <!-- <div class="uk-cover-container" id="home" style="margin-top:50px;">
        <canvas width="1920" height="600"></canvas>
        <img src="/static/images/background.png" alt="" uk-cover>
    </div> -->
    <!-- End Banner Section -->

    <!-- Slideshow Section -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 5000; min-height: 150; max-height: 600" id="home" style="margin-top:50px;">

        <ul class="uk-slideshow-items">
            <li>
                <img src="/static/images/background.png" alt="" uk-cover>
            </li>
            <li>
                <img src="/static/images/background1.png" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
            uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
            uk-slideshow-item="next"></a>

    </div>
    <!-- End Slideshow Section -->

    <!-- Content Section-->
    <div class="ui inverted vertical stripe quote segment" style="background: #191A1C; border-top: solid 0.5px white;">
        <div class="ui inverted equal width stackable internally celled grid">
            <div class=" inverted center aligned row">

                <div class=" column">
                    <h1 style="color:white"><b>CGPA CALCULATOR</b></h1>
                    <h5 style="color:white">You can use this feature to calculate<br> your current semester grade
                        point<br> averages (SGPA)
                        and
                        cumulative grade<br> point averages (CGPA).</h5><br>
                    <a href="calculator.php">
                        <div class="ui small green button">Click Here</div>
                    </a>
                </div>

                <div class="column">
                    <h1 style="color:white"><b>GRADE TARGET</b></h1>
                    <h5 style="color:white">This feature is about how many marks<br> do you needed to score during the
                        final<br> examination
                        to get
                        the grade you want.</h5><br><br>
                    <a href="grade.php">
                        <div class="ui small green button">Click Here</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Section-->

    <!-- About Section -->
    <div class="ui inverted vertical stripe quote segment" id="about"
        style="background: #191A1C; border-top: solid 0.5px white; border-bottom: solid 0.5px white;">
        <div class="ui inverted equal width stackable internally celled grid">
            <div class="inverted center aligned row">
                <div class="column">
                    <h1 style="color:white"><b>ABOUT</b></h1>
                    <h5 style="margin: 0 20% 0 20%;color:white;">My intention to build this website is to help
                        university students to calculate their cumulative
                        grade point average (cgpa) and semester grade point average (gpa). There will be more features
                        added to this website in the future. Thank you for supporting my first project (own project).
                    </h5><br>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->

    <!-- Footer Section-->
    <div class="ui inverted vertical footer segment" id="footer">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="twelve wide column" style="margin-left: 12%;">
                    <h4 class="ui inverted header">&#9400; All rights reserved 2019 by AA Dev</h4>
                    <p>This website is intended for use as a guide only. Contact your university or institution for
                        exact
                        determination.</p>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <img src="/static/images/Logo.png" class="ui centered mini image">
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="https://ahmadauf98.github.io/">AA Dev Website</a>
                <a class="item" href="#">Terms and Conditions</a>
                <a class="item" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
    <!-- End Footer Section-->
</body>

</html>