<?php
session_start();
require 'koneksi.php';
if(empty($_SESSION['ORDER'])){
	$order = date('Ymdhis');
	$_SESSION['ORDER'] = $order;
}

$no_order = $_SESSION['ORDER'];
$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];
$harga_satuan = $_POST['harga_satuan'];
$sub_total = $harga_satuan * $jumlah;

if($_POST['proses'] == 'Simpan Ke Keranjang'){
	$data[] = $no_order; //1
	$data[] = $id_produk; //2
	$data[] = $jumlah; //3
	$data[] = $harga_satuan; //4
	$data[] = $sub_total; //5
	$sql = 'INSERT INTO keranjang(no_order,id_produk,jumlah,harga_satuan,
			sub_total,tgl_order) VALUES(?,?,?,?,?,now())';
	$row = $koneksi -> prepare($sql);
	$row -> execute($data);
	echo '<script>window.location="keranjang.php";</script>';
}
?>