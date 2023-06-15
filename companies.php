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
  <title>Better Tea</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">	
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- favicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs -->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets --> 
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
  <!-- header section start -->
  <?php include 'navbar.php';?>
  <!-- companies section start -->
  <div class="services_section">
    <div class="container">
      <h1 class="services_text">COMPANIES</h1>
    </div>
  </div>
  <div class="companies_section layout_padding">
    <div class="container">
      <h1 class="companies_text">Find Your Company</h1>
      <div class="images_main">
        <h2 id="demo03"></h2>
        <div class="hover03 column">
          <div>
            <figure><img src="images/img-1.png">776 Ratings</figure>
            <span>Smokey Enterprises</span>
          </div>
          <div>
            <figure><img src="images/img-2.png">880 Ratings</figure>
            <span>Forger.Inc</span>
          </div>
          <div>
            <figure><img src="images/img-3.png">765 Ratings</figure>
            <span>Nordic Tech</span>
          </div>
          <div>
            <figure><img src="images/img-1.png">1202 Ratings</figure>
            <span>Blume</span>
          </div>
        </div>
        <h2 id="demo03"></h2>
        <div class="hover03 column">
          <div>
            <figure><img src="images/img-4.png">667 Ratings</figure>
            <span>Fusion Sytems</span>
          </div>
          <div>
            <figure><img src="images/img-1.png">532 Ratings</figure>
            <span>Global Widgets.Inc</span>
          </div>
          <div>
            <figure><img src="images/img-2.png">1234 Ratings</figure>
            <span>Apex Innovations</span>
          </div>
          <div>
            <figure><img src="images/img-4.png">1002 Ratings</figure>
            <span>Horizon Industries</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <h1 class="subscribe_text">Subscribe Now</h1>
      <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have</p>
      <div class="box_main_2">
        <textarea type="" class="email_bt_2" placeholder="Enter Your Email" name=""></textarea>
      </div>
      <button class="subscribe_bt_2"><a href="#">Subscribe</a></button>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright_text">
            Copyright
            <?php echo date("Y"); ?> All Right Reserved By.
            <a href="https://html.design"> Free HTML Templates</a>
          </p>
        </div>
        <div class="col-md-6">
          <p class="cookies_text">Cookies, Privacy and Terms</p>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright section end -->
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
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });
    });
  </script>
</body>
</html>
