<?php 
include 'dbconfig.php';

// Ambil data user saat ini
$currentUser = $user->getUser();
    
$aksi = $_GET['aksi'];
if($aksi == "hapus"){
	if($currentUser['idauth'] == $_GET['idauth'])
	{
		$user->logout();
		$user->hapus($_GET['idauth']);
		header('location: login.php');
	}
	else
	{
		$user->hapus($_GET['idauth']);
		header("location:tampil.php");
	}	
}elseif($aksi == "update"){
	$user->update($_GET['idauth'],$_POST['user'],$_POST['koderahasia'],$_POST['nama'],$_POST['surel'],$_POST['alamatkantor']);
	header("location:tampil.php");
}
?>