<?php require 'koneksi.php'; ?>
<?php include_once 'header.php'; ?>
<?php
	if(!empty($_GET)){
		echo 'OKE';
	}
	else{
	include_once 'home.php';
	}
?>
<?php include_once 'footer.php'; ?>