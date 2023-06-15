<?php
    // Lampirkan dbconfig
    require_once "dbconfig.php";
    // Cek status login user
    if ($user->isLoggedIn()) {
        header("location: index.php"); //redirect ke index
    }
    //jika ada data yg dikirim
    if (isset($_POST['kirim'])) {
        $email = $_POST['surel'];
        $password = $_POST['koderahasia'];
        // Proses login user
        if ($user->login($email, $password)) {
            header("location: index.php");
        } else {
            // Jika login gagal, ambil pesan error
            $error = $user->getLastError();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylePrimary.css" media="screen">
</head>
<body>
    <div class="login-page">
        <h1>Login Page</h1>
        <div class="form">
            <form class="login-form" method="post">
                <?php if (isset($error)) : ?>
                    <div class="error">
                        <?php echo $error ?>
                    </div>
                <?php endif; ?>
                <input type="email" name="surel" placeholder="surel" required/>
                <input type="password" name="koderahasia" placeholder="kode rahasia" required/>    
                <button type="submit" name="kirim">login</button>
                <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>
</html>