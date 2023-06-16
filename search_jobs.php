<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Search</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- header section start-->
    <?php include 'navbar.php'; ?>
    <!-- header section start-->

    <!-- Search form section -->
    <div class="search_section layout_padding mb-5">
        <div class="container">
            <!-- Form contents -->
            <form action="get_jobs.php" method="GET">
                <div class="row box">
                    <!-- What input -->
                    <div class="col-md-6">
                        <h1 class="what_text">What</h1>
                        <p class="city_text">job title, keywords, or company</p>
                        <div class="main">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search this blog" name="keywords">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Where input -->
                    <div class="col-md-6">
                        <h1 class="what_text">Where</h1>
                        <p class="city_text">city, state, or pin code</p>
                        <div>
                            <div class="main">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Ahmedabad, Gujarat" name="location">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-map-marker"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- search_jobs section end-->

    <!-- Job listings -->
    <div class="container">
        <div class="row justify-content-left">
            <?php include 'get_jobs.php'; ?>
        </div>
    </div>

    <!-- footer section start-->
    <div class="footer_section layout_padding">
        <div class="container">
            <h1 class="subscribr_text">Subscribe Now</h1>
            <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have </p>
            <div class="box_main_2">
                <textarea type="" class="email_bt_2" placeholder="Enter Your Email" name=""></textarea>
            </div>
            <button class="subscribe_bt_2"><a href="#">Subscribe</a></button>
        </div>
    </div>
    <!-- footer section end-->

    <!-- copyright section start-->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright_text">
                        &copy; 2020 All Right Reserved By. <a href="https://html.design">Free HTML Templates</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="cookies_text">Cookies, Privacy, and Terms</p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end-->

    <!-- Javascript files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
    </script>
</body>

</html>