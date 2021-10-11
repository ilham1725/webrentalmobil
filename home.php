<div class="left">
		<?php
			$sql = 'SELECT produk.*, jenis.nm_jenis FROM produk
					INNER JOIN jenis ON jenis.id_jenis = produk.id_jenis';
			$row = $koneksi -> prepare($sql);
			$row -> execute();
			$hasil = $row -> fetchAll();
		?>
		<?php foreach($hasil as $isi){ ?>
		<div class="box">
			<div class="image">
				
			</div>
			<div class="post">
				<h1><?php echo $isi['nm_produk']; ?></h1>
				<p>Harga: <?php echo $isi['harga']; ?></p>
				<p>Keterangan: <?php echo $isi['keterangan']; ?></p>
				<form method="POST" action="keranjang_proses.php">
					<input type="submit" name="proses" value="Simpan Ke Keranjang" />
					<input type="hidden" name="id_produk" value="<?php echo $isi['id_produk']; ?>" />
					<input type="hidden" name="jumlah" value="1" />
					<input type="hidden" name="harga_satuan" value="<?php echo $isi['harga']; ?>" />
				</form>
			</div>
		</div>
		<?php }?>
	</div>
	<div class="right">
	
	</div>
</div>