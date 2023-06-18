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
  <title>Login</title>
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
  <?php include 'includes/navbar.php'; ?>
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
              <h5 class="card-title text-center">Log In</h5>
              <?php if (isset($_GET['error'])) : ?>
                <p style="color: red;"><?php echo $_GET['error']; ?></p>
              <?php endif; ?>
              <form class="form-signin" action="login_process.php" method="POST">
                <div class="form-label-group">
                  <input for="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                  <label for="inputEmail">Email address</label>
                </div>
                <div class="form-label-group">
                  <input for="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                  <label for="inputPassword">Password</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button type="submit" class="btn btn-block btn-danger text-uppercase font-weight-bold" style="border-radius: 3rem;">Login</button>
                <p class="message mt-3">Doesnt have account? <a href="register.php">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- login section end-->
  <?php include 'includes/footer.php'; ?>

  <?php include 'includes/footer.php'; ?>
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