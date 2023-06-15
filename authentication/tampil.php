<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tampil</title>
	<link rel="stylesheet" href="stylePrimary.css">
</head>
<body>
	<?php include 'dbconfig.php';?>	
	<div class="crud">
		<h1>CRUD OOP PHP</h1>
		<h3>Data User</h3>
		<p>"Menghapus akun anda sendiri akan secara otomatis logout dari website"</p>
		<nav class="hero-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
		<table class="crud-table">
			<tr >
				<th>No</th>
				<th>User</th>
				<th>Koderahasia</th>
				<th>Nama</th>
				<th>Surel</th>
				<th>Alamat Kantor</th>
				<th>Opsi</th>
			</tr>
			<?php
				$no = 1;
				foreach($user->tampil_data() as $x){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $x['user']; ?></td>
				<td><?php echo $x['koderahasia']; ?></td>
				<td><?php echo $x['nama']; ?></td>
				<td><?php echo $x['surel']; ?></td>
				<td><?php echo $x['alamatkantor']; ?></td>
				<td>
					<a href="edit.php?idauth=<?php echo $x['idauth']; ?>">Edit</a>
					<a href="proses.php?idauth=<?php echo $x['idauth']; ?>&aksi=hapus">Hapus</a>
				</td>
			</tr>
		</div>
		<?php }?>
	</table>
</body>
</html>