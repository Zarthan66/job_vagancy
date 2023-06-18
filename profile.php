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
    <title>Recruitments</title>
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

<style>
    .profile-picture {
        width: 100px;
        height: 100px;
        /* Set the desired height */
        object-fit: cover;
        /* Maintain aspect ratio and fill the container */
        object-position: top;
        /* Center the image within the container */
        border-radius: 50%;
        /* Make the image circular */
    }
</style>

<body>
    <!-- header section start -->
    <?php include 'includes/navbar.php'; ?>
    <!-- header section end -->
    <!-- profile section start -->
    <div class="services_section">
        <div class="container">
            <h1 class="services_text">YOUR PROFILE</h1>
        </div>
    </div>
    <!-- profile section end -->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Left column content -->
                <div class="profile my-5">
                    <button class="row align-items-start" style="background: none;" onclick="showContent('show-profile')">
                        <div class="col-auto p-0">
                            <img src="images/about-04.jpg" alt="Profile Picture" class="profile-picture rounded-circle">
                        </div>
                        <div class="col text-left align-self-center w-auto">
                            <p class="m-0 font-weight-bold">Anastasia Ivanova</p>
                            <p class="m-0">anastasia@gmail.com</p>
                        </div>
                    </button>
                </div>
                <div class="button-group">
                    <button class="btn btn-outline-danger btn-block mb-2 text-left" onclick="showContent('experience')">Experience</button>
                    <button class="btn btn-outline-danger btn-block mb-2 text-left" onclick="showContent('education')">Education</button>
                    <button class="btn btn-outline-danger btn-block mb-2 text-left" onclick="showContent('skills')">Skills</button>
                    <button class="btn btn-outline-danger btn-block mb-2 text-left" onclick="showContent('about-me')">About Me</button>
                    <button class="btn btn-outline-danger btn-block mb-2 text-left" onclick="showContent('additional-info')">Additional Info</button>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Right column content -->
                <div class="content" id="show-profile">
                    <h2 class="pb-1 font-weight-bold">Profile</h2>
                    <hr>
                    <div class="my-4">
                        <p class="my-1 font-weight-bold" style="font-size: large;">About Me</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Address</p>
                                    <p>Nationality</p>
                                </div>
                                <div class="col-md-7">
                                    <p>Merdeka Street No. 123</p>
                                    <p>Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="my-4">
                        <p class="my-1 font-weight-bold" style="font-size: large;">Additional Info</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Expected Salary</p>
                                    <p>Preffered Work Location</p>
                                </div>
                                <div class="col-md-7">
                                    <p>IDR 3,000,000</p>
                                    <p>Magelang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="experience" style="display: none;">
                    <h2 class="pb-1 font-weight-bold">Experience</h2>
                    <hr>
                    <div class="my-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="m-0">Experience Level</p>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioOption" id="option2" value="option2">
                                        <label class="form-check-label" for="option2">
                                            I am a fresh graduate seeking my first job
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioOption" id="option2" value="option2">
                                        <label class="form-check-label" for="option2">
                                            I am a student seeking internship or part-time jobs
                                        </label>
                                    </div>
                                    <button type="submit" class="py-1 px-3 mt-3 btn btn-danger text-uppercase font-weight-bold" style="border-radius: 3rem;">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="education" style="display: none;">
                    <h2 class="font-weight-bold">Education</h2>
                    <hr>
                    <div class="my-4">
                        <p class="my-1 font-weight-bold" style="font-size: large;">About Me</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Address</p>
                                    <p>Nationality</p>
                                </div>
                                <div class="col-md-7">
                                    <p>Merdeka Street No. 123</p>
                                    <p>Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="my-4">
                        <p class="my-1 font-weight-bold" style="font-size: large;">Additional Info</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Expected Salary</p>
                                    <p>Preffered Work Location</p>
                                </div>
                                <div class="col-md-7">
                                    <p>IDR 3,000,000</p>
                                    <p>Magelang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="skills" style="display: none;">
                    <h2>Skills</h2>
                    <p>This is the content for Skills.</p>
                </div>
                <div class="content" id="about-me" style="display: none;">
                    <h2>About Me</h2>
                    <p>This is the content for About Me.</p>
                </div>
                <div class="content" id="additional-info" style="display: none;">
                    <h2>Additional Info</h2>
                    <p>This is the content for Additional Info.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showContent(targetId) {
            var contents = document.getElementsByClassName("content");
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = "none";
            }
            var targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.style.display = "block";
            }
        }
    </script>


    <?php include 'includes/footer.php'; ?>



    <!-- JavaScript files -->
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