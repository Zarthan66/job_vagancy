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
  <title>Companies</title>
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
  <?php include 'includes/navbar.php';?>
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
            <figure><img src="images/logo-company1.jpg"></figure>
            <span>Supreme</span>
          </div>
          <div>
            <figure><img src="images/logo-company2.jpg"></figure>
            <span>Friends.Inc</span>
          </div>
          <div>
            <figure><img src="images/logo-company3.jpg"></figure>
            <span>Nordic Tech</span>
          </div>
          <div>
            <figure><img src="images/logo-company4.jpg"></figure>
            <span>Blume</span>
          </div>
        </div>
        <h2 id="demo03"></h2>
        <div class="hover03 column">
          <div>
            <figure><img src="images/logo-company5.jpg"></figure>
            <span>Global Seo</span>
          </div>
          <div>
            <figure><img src="images/logo-company6.jpg"></figure>
            <span>Global Widgets.Inc</span>
          </div>
          <div>
            <figure><img src="images/logo-company7.jpg"></figure>
            <span>Apex Innovations</span>
          </div>
          <div>
            <figure><img src="images/logo-company8.jpg"></figure>
            <span>Horizon Industries</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
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
