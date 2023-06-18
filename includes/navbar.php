<?php
session_start();

// Handle logout request
if (isset($_GET["logout"])) {
    // Destroy all session data
    session_destroy();

    // Redirect to the login page
    header("Location: login.php");
    exit;
}

// Check if the current page is profile.php
if ($_SERVER["PHP_SELF"] === "/job_vagancy/profile.php") {
    // Check if the user is not logged in
    if (!isset($_SESSION["user_id"])) {
        // If the user is not logged in, redirect to the login page immediately
        echo "<script>alert('Please login first.'); window.location.href = 'login.php';</script>";
        exit;
    }
}

// Prevent caching of this page
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="logo" href="#">Job Vagancy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search_jobs.php">SEARCH JOBS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="companies.php">COMPANIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MORE</a>
            </li>
        </ul>
    </div>
    <?php if (isset($_SESSION["user_id"])) { ?>
        <div class="login_text">
            <a href="profile.php?logout=true">LOGOUT</a>
        </div>
    <?php } else { ?>
        <div class="login_text">
            <a href="login.php">LOGIN HERE</a>
        </div>
    <?php } ?>
</nav>
