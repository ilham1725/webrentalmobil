<?php session_start(); ?>
<?php if($_SESSION['rentalmobil']){ ?>
<?php require '../koneksi.php'; ?>
<?php include_once 'header.php'; ?>
<?php
$id_produk = $_GET['id'];
	$sql ='SELECT
			produk.id_produk,
			produk.nm_produk,
			produk.harga,
			jenis.nm_jenis,
			produk.stok,
			produk.keterangan
			FROM produk
			INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
			WHERE id_produk = ?';
			
			$row = $koneksi -> prepare($sql);
			$row -> execute(array($id_produk));
			$hasil = $row -> fetch();
?>
<div class="content">
	<h1>
	<?php
		if($id_produk){
		echo 'Edit produk';
		}
		else{
			echo 'Tambah Produk';
			}
	?>
	</h1>		
	<div class="post">
		<form method="POST" action="produk_proses.php">
			<table id="tbl-3" >
				<tr>
					<th colspan="2">Data Produk</th>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="nm_produk" value="<?php echo $hasil['nm_produk'] ?>" /></td>
				</tr>
				<tr>
					<td>Harga </td>
					<td>	<input type="text" name="harga" value="<?php echo $hasil['harga'] ?>"/>	</td>
				</tr>
				<tr>
					<td>Jenis Produk</td>
					<td>
					<select name="jenis">
					<?php
					$sql_jenis = 'SELECT * FROM jenis';
					$row_jenis = $koneksi -> prepare($sql_jenis);
					$row_jenis -> execute();
					$hasil_jenis = $row_jenis -> fetchAll();
					foreach($hasil_jenis as $isi_jenis){
					if($isi_jenis['id_jenis'] == $hasil['id_jenis']){
								$selected = 'selected';
							}
							else {
								$selected = '';
							}
						?>
					<option value="<?php echo $isi_jenis['id_jenis']; ?>" <?php echo $selected; ?> >
					<?php echo $isi_jenis['nm_jenis']; ?>
					</option>
					<?php }?>
					</select>
					</td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" name="stok"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" /></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
					<?php if($id_produk){ ?>
					<input type="hidden" name="id_produk" Value="<?php echo $hasil['id_produk'] ?>">
					<input class="tambah" type="submit" name="proses" Value="edit">
					<?php } else{ ?>
					<input class="tambah" type="submit" name="proses" Value="tambah">
					<?php } ?>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php include_once 'footer.php'; ?>
<?php }else{ ?>
Sesi lu bukan admin bos! Login dulu coy... <a href="../login.php">Log In</a>
<?php }?>