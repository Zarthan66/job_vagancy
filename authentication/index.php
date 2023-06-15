<?php
    // Lampirkan dbconfig
    require_once "dbconfig.php";
    // Cek status login user
    if(!$user->isLoggedIn()){
        header("location: login.php"); //Redirect ke halaman login
    }
    // Ambil data user saat ini
    $currentUser = $user->getUser();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="stylePrimary.css" media="screen">
    </head>
    <body>
        <div class="container">
        <div class="info">
        <h1>Selamat Datang <?php echo $currentUser['user']?> </h1>
        <h3><?php echo $currentUser['nama']?></h3>
        </div>
        <li>
            <ul>
                <a href="tampil.php">
                    <button type="button">CRUD Table</button>
                </a>
            </ul>
            <ul>
                <a href="logout.php">
                    <button type="button">Logout</button>
                </a>    
            </ul>
        </li>
        </div>
    </body>
</html> 