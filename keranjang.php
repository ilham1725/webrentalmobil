<?php session_start(); ?>
<?php require 'koneksi.php'; ?>
<?php include_once 'header.php'; ?>
<div class="content">
	<table>
			<tr>
				<th>Produk</th>
				<th>Harga Satuan</th>
				<th>Jumlah</th>
				<th>Sub Total</th>
			</tr>

		<tbody>
			<?php 
			$sql = 'SELECT keranjang.*,produk.nm_produk FROM keranjang
					INNER JOIN produk ON produk.id_produk = keranjang.id_produk';
			$row = $koneksi -> prepare($sql);
			$row -> execute();
			$hasil = $row -> fetchAll();
			?>
			<?php foreach($hasil as $isi){ ?>
			<tr>
				<th><?php echo $isi['nm_produk']; ?></th>
				<th><?php echo $isi['harga_satuan']; ?></th>
				<th><?php echo $isi['jumlah']; ?></th>
				<th><?php echo $isi['sub_total']; ?></th>
			</tr>
			<?php
			$total =+ $total+$isi['sub_total'];
			?>
			<?php }?>
			<tr>
				<th colspan="3">TOTAL</th>
				<th><?php echo $total; ?></th>
			</tr>
		</tbody>
	</table>
</div>
<?php include_once 'footer.php'; ?>