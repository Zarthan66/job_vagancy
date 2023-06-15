<?php
    include 'dbconfig.php';
    if(!$user->isLoggedIn()){
        header("location: login.php"); //Redirect ke halaman login
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>edit</title>
	<link rel="stylesheet" href="stylePrimary.css" media="screen">
</head>
<body>  
 	<?php foreach($user->edit($_GET['idauth']) as $d){?>
	<div class="edit-page">
        <h1>Edit Data User</h1>
        <div class="form">
            <form class="register-form" method="post" action="proses.php?idauth=<?php echo $d['idauth']; ?>&aksi=update">
                <input type="text" name="user" placeholder="Username" value="<?php echo $d['user'];?>" required/>
                <input type="password" name="koderahasia" placeholder="Kode Rahasia" required/>
                <input type="text" name="nama" placeholder="Nama" value="<?php echo $d['nama']; ?>" required/>
                <input type="email" name="surel" placeholder="Surel" value="<?php echo $d['surel']; ?>" required/>
                <input type="text" name="alamatkantor" placeholder="Alamat Kantor" value="<?php echo $d['alamatkantor']; ?>" required/>
                <button type="submit" name="modify" >Apply</button>
            </form>
        </div>
    </div>
 	<?php } ?>
</form>
</body>
</html>

