<?php session_start();?>
<?php if($_SESSION['rentalmobil']){?>
<?php require '../koneksi.php'; ?>
<?php include_once 'header.php';?>
<div class="content">
<h1> Pelayanan</h1>
	<a class="btn-right" href="users_frm.php">FORM PENYEWAAN</a>
<div class="post">
<table id="tbl-5">
<thead>
<tr>
					<th>No.KTP</th>
					<th>Nama Pengguna</th>
					<th>Alamat</th>
					<th>No.Telepon</th>
					<th>Tgl Sewa</th>
					<th>Jam Sewa</th>
					<th>Tgl Kembali Rencana</th>
					<th>Jam Kembali Rencana</th>
					<th>Kendaraan</th>
					<th>Harga Sewa</th>
					<th>Total</th>
</tr>
</thead>

<tbody>
<?php
	$sql = ' SELECT
			pelanggan.NoKTP,
			pelanggan.NamaPel,
			pelanggan.AlamatPel,
			pelanggan.TelpPel,
			transaksisewa.tglpinjam,
			transaksisewa.jampinjam,
			transaksisewa.tglkembalirencana,
			transaksisewa.jamkembalirencana,
			type.NmType,
			kendaraan.tarifPerjam,
			jenisservice.Nmjenisservice
			FROM pelanggan
			INNER JOIN transaksisewa ON pelanggan.NoTransaksi=NoTransaksi.NoKTP INNER JOIN type , kendaraan , jenisservice where jenkel.id_jenkel = member.id_jenkel AND user.id_member = member.id_member';
			
			$row = $koneksi -> prepare ($sql);
			$row -> execute ();
			$hasil = $row -> fetchAll();
			$no = 1 ;
			foreach($hasil as $isi ){
			?>
			<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $isi['nm_member']; ?></td>
					<td><?php echo $isi['tgl_lahir']; ?></td>
					<td><?php echo $isi['nm_jenkel']; ?></td>
					<td><?php echo $isi['alamat']; ?></td>
					<td><?php echo $isi['tlp']; ?></td>
					<td><?php echo $isi['email']; ?></td>
					<td><a onclick="return confirm('Hapus Data?')" href="user_proses.php?id_user=<?php echo $isi['id_user']; ?>&id_member=<?php echo $isi['id_member']; ?>">Delete</a></td>
			</tr>
				<?php $no++;} ?>
</tbody>

</table>
</div>


</div>

<?php require 'footer.php';?>
<?php }else {?>
sesi lu bukan admin bos! login dulu coy... <a href="../login.php"> log in</a>
<?php } ?>