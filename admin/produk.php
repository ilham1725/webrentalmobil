<?php session_start();?>
<?php if($_SESSION['rentalmobil']){?>
<?php require '../koneksi.php'; ?>
<?php include_once 'header.php';?>
<?php
$id_produk = $_GET['id'];
?>
<div class="content">
		<h1> Contact Us </h1>
	<a class="btn-right" href="produk_frm.php">Tambah Data</a>
<div class="post">
<table id="tbl-9">
<thead>
<tr>
	<th>No</th>
	<th>Nama Produk</th>
	<th>Harga</th>
	<th>Jenis</th>
	<th>Stok</th>
	<th>Keterangan</th>
	<th>Aksi</th>
</tr>
</thead>

<tbody>
<?php
	$sql = 'SELECT
			produk.id_produk,
			produk.nm_produk,
			produk.harga,
			jenis.nm_jenis,
			produk.stok,
			produk.keterangan
			FROM produk
			INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis';
			
			$row = $koneksi -> prepare ($sql);
			$row -> execute ();
			$hasil = $row -> fetchAll();
			$no = 1 ;
			foreach($hasil as $isi ){
			?>
			<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $isi['nm_produk']; ?></td>
					<td><?php echo $isi['harga']; ?></td>
					<td><?php echo $isi['nm_jenis']; ?></td>
					<td><?php echo $isi['stok']; ?></td>
					<td><?php echo $isi['keterangan']; ?></td>
					<td><a href="produk_frm.php.?id=<?php echo $isi['id_produk']; ?>">Edit</a>		<a href="produk_proses.php.?id=<?php echo $isi['id_produk']; ?>" onClick="return confirm('Hapus Data')">Delete</a>
			</tr>
				<?php $no++;} ?>
</tbody>
</table>
</div>

<?php require 'footer.php';?>
<?php }else {?>
sesi lu bukan admin bos! login dulu coy... <a href="../login.php"> log in</a>
<?php } ?>