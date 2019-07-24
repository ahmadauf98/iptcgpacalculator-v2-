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

    <!-- Popcash Ads -->
    <script type="text/javascript">
        var uid = '244335';
        var wid = '503021';
    </script>
    <script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
    <!-- End Popcash Ads -->

    <!-- Navigation Bar B4 Section-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#1B1C1E;">
        <div class="container">
            <img data-src="/static/images/Logo.png" data-srcset="/static/images/Logo.png" width="60" height="auto"
                alt="" uk-img>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="text-align:center;"> </ul>
                <ul class="navbar-nav my-2 my-lg-0" style="text-align:center;">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" class="item">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.php" class="item">Calculator</a>
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

    <!-- About Section -->
    <div class="ui inverted vertical stripe quote segment" style="background: #191A1C; margin-top:10px; padding: 8% 0 0 0">
        <div class="ui inverted equal width stackable internally celled grid">
            <div class="inverted center aligned row">
                <div class="column">
                    <h1 style="color:white"><b>GRADE TARGET</b></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->

    <!-- Content Section-->
    <div class="ui inverted vertical stripe quote segment"
        style="background: #191A1C; padding: 5% 0 10% 0">
        <div class="ui inverted equal width stackable internally celled grid">
            <div class=" inverted center aligned row">

                <div class=" column">
                    <h1 style="color:white; margin-top:5%;"><b>Public University:</b></h1>
                    <div class="btn-group" style="margin-top:5%; margin-bottom:5%;">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <b>Select your university:</b>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" style="height:200px; overflow-y:auto;">
                            <a class="dropdown-item" href="umGrade.php" style="color:black;"><img
                                    src="/static/icons/umicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaya (UM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="upmGrade.php" style="color:black;"><img
                                    src="/static/icons/upmicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Putra Malaysia (UPM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="uitmGrade.php" style="color:black;"><img
                                    src="/static/icons/uitmicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Teknologi Mara (UITM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="utmGrade.php" style="color:black;"><img
                                    src="/static/icons/utmicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Teknologi Malaysia (UTM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="ukmGrade.php" style="color:black;"><img
                                    src="/static/icons/ukmicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Kebangsaan Malaysia (UKM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="uiaGrade.php" style="color:black;"><img
                                    src="/static/icons/uiaicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Islam Antarabangsa (UIA)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="usmGrade.php" style="color:black;"><img
                                    src="/static/icons/usmicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Sains Malaysia (USM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="umpGrade.php" style="color:black;"><img
                                    src="/static/icons/umpicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaysia Pahang (UMP)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="umkGrade.php" style="color:black;"><img
                                    src="/static/icons/umkicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaysia Kelantan (UMK)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="umtGrade.php" style="color:black;"><img
                                    src="/static/icons/umticon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaysia Terengganu (UMT)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="upsiGrade.php" style="color:black;"><img
                                    src="/static/icons/upsiicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Pendidikan Sultan Idris (UPSI)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="unimasGrade.php" style="color:black;"><img
                                    src="/static/icons/unimasicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaysia Sarawak (Unimas)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="umsGrade.php" style="color:black;"><img
                                    src="/static/icons/umsicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaysia Sabah (UMS)</a>
                        </div>
                    </div>
                </div>

                <div class=" column">
                    <h1 style="color:white; margin-top:5%;"><b>Private University:</b></h1>
                    <div class="btn-group" style="margin-top:5%; margin-bottom:5%;">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <b>Select your university:</b>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" style="height:200px; overflow-y:auto;">
                            <a class="dropdown-item" href="uniklGrade.php" style="color:black;"><img
                                    src="/static/icons/uniklicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Kuala Lumpur (Unikl)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="unitenGrade.php" style="color:black;"><img
                                    src="/static/icons/unitenicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Tenaga Nasional (Uniten)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="uniselGrade.php" style="color:black;"><img
                                    src="/static/icons/uniselicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Selangor (Unisel)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="kduGrade.php" style="color:black;"><img
                                    src="/static/icons/kduicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                KDU University</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="segiGrade.php" style="color:black;"><img
                                    src="/static/icons/segiicon.ico" alt="" width="20px" height="20px" style="margin: 1px 3px 0 0">
                                SEGI University</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Content Section-->

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