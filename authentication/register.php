<?php
    // Lampirkan dbconfig
    require_once "dbconfig.php";
    // Cek status login user
    if($user->isLoggedIn()){
        header("location: index.php"); //Redirect ke index
    }
    //Cek adanya data yang dikirim
    if(isset($_POST['kirim'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        // Registrasi user baru
        if($user->register($username, $password, $nama, $email, $address)){
            // Jika berhasil set variable success ke true
            $success = true;
        }else{
            // Jika gagal, ambil pesan error
            $error = $user->getLastError();
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="stylePrimary.css">
    </head>
    <body>
        <div class="login-page">
            <h1>Register New Account</h1>
            <div class="form">
                <form class="register-form" method="post">
                    <?php if (isset($error)): ?>
                        <div class="error">
                        <?php echo $error ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($success)): ?>
                        <div class="success">
                            Berhasil mendaftar. Silakan <a href="login.php">login</a>.
                        </div>
                    <?php endif; ?>
                    <input type="text" name="username" placeholder="username" required/>
                    <input type="password" name="password" placeholder="kode rahasia" required/>
                    <input type="text" name="nama" placeholder="nama" required/>
                    <input type="email" name="email" placeholder="surel" required/>
                    <input type="text" name="address" placeholder="alamat kantor" required/>
                    <button type="submit" name="kirim">create</button>
                    <p class="message">Already registered? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </body>
</html> 