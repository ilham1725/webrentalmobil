<?php 
require '../koneksi.php';

	$proses = $_POST ['proses'];
	$nm_produk = $_POST ['nm_produk'];
	$harga = $_POST ['harga'];
	$id_jenis = $_POST ['jenis'];
	$stok = $_POST ['stok'];
	$keterangan = $_POST ['keterangan'];
	$id_produk = $_POST ['id_produk'];
	
	if($proses == 'tambah'){
	$sql_p = 'INSERT INTO produk(nm_produk, harga, id_jenis, stok, keterangan) values(?,?,?,?,?)';
	$row_p = $koneksi -> prepare($sql_p);
	$row_p -> execute (array($nm_produk, $harga, $id_jenis, $stok, $keterangan));
	
	echo '<script>alert("tambah data berhasil"); window.location="produk.php"</script>';
	}
	
	else if($proses == 'edit'){
	$sql_p = 'UPDATE produk SET nm_produk=?, harga=?, id_jenis=?, stok=?, keterangan=?
	WHERE id_produk=?';
	$row_p = $koneksi -> prepare($sql_p);
	$row_p -> execute(array($nm_produk, $harga, $id_jenis, $stok, $keterangan, $id_produk));
	
	echo '<script>alert("edit produk berhasil"); window.location="produk.php"</script>';
	}
	
	else if(!empty($_GET['id'])){
	$id_produk = $_GET['id'];
	$sql_p = 'DELETE FROM produk WHERE id_produk = ?';
	$row_p = $koneksi -> prepare($sql_p);
	$row_p -> execute(array($id_produk));
	
	echo '<script>alert("delete produk berhasil"); window.location="produk.php"</script>';
	}
?>