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
  <title>Register</title>
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
  <link rel="stylesoeet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>

<body>
  <!-- header section start-->
  <?php include 'navbar.php';?>
  <!-- header section end-->
  <!-- login section start-->
  <div class="services_section">
    <div class="container">
      <h1 class="services_text">SERVICES</h1>
    </div>
  </div>
  <div class="login_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Register</h5>
              <form class="register-form" method="post" action="register_process.php">
                <?php if (isset($error)) : ?>
                  <div class="error alert alert-danger">
                    <?php echo $error ?>
                  </div>
                <?php endif; ?>
                <?php if (isset($success)) : ?>
                  <div class="success alert alert-success">
                    Berhasil mendaftar. Silakan <a href="login.php">login</a>.
                  </div>
                <?php endif; ?>
                <div class="form-label-group">
                  <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
                  <label for="inputUsername">Username</label>
                </div>
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required autofocus>
                  <label for="inputPassword">Password</label>
                </div>
                <div class="form-label-group">
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>
                <button type="submit" class="btn btn-primary text-uppercase" name="kirim" value="Register">Create</button>
                <p class="message mt-3">Already registered? <a href="login.php">Sign In</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- login section end-->

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
          <p class="copyright_text">Copyright 2020 All Right Reserved By.
            <a href="https://html.design"> Free HTML Templates</a>
          </p>
        </div>
        <div class="col-md-6">
          <p class="cookies_text">Cookies, Privacy and Terms</p>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright section end-->

  <!-- Javascript files-->
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
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });
    });
  </script>
</body>
</html>

