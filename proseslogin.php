<?php
session_start();
require 'koneksi.php';

	//ambil tangkapan dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];

	//simpan tangkapan kedalam bentuk array
	$data[] = $username;
	$data[]	= $password;

	//query mysql 
	$sql = 'SELECT
			login.*,
			typeuser.nm_typeuser
			FROM login
			INNER JOIN typeuser ON login.id_typeuser=typeuser.id_typeuser
			WHERE username=? AND password=MD5(?)';
	$row = $koneksi -> prepare($sql);
	$row -> execute($data);

	//hitung jumlah baris hasil query 
	$jml = $row -> rowCount();
	
	//logika berhasil
	if($jml>0){
		$hasil = $row -> fetch();
		$_SESSION['rentalmobil'] = $hasil;
		echo
		'<script>window.location="admin/index.php";</script>';
	}
	else{
		echo
		'<script>alert("login gagal");history.go(-1);</script>';
	}
?>