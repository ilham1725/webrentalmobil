<?php session_start(); ?>
<?php if($_SESSION['rentalmobil']){ ?>
<?php require '../koneksi.php'; ?>
<?php include_once 'header.php'; ?>
<?php 
	
	$id = $_GET['id'];
	$sql = 'SELECT member.*, user from member INNER JOIN member ON member.id_member = user.id_member';
	$row = $koneksi -> prepare($sql);
	$row -> execute(array($id));
	$hasil = $row -> fetch();
	
?>
<div class="content">
	<h1>
		<?php 
		
			if($id) {
				echo "Edit User";
			} else { 
				echo "Tambah User";
			}
			
		?>
	</h1>		
	<div class="post">
		<form method="POST" action="user_proses.php">
			<table id="tbl-3">
				<tr>
					<th colspan="2">Data Member</th>
				</tr>
				<tr>
					<td>Nama  </td>
					<td><input type="text" name="nm_member" /></td>
				</tr>
				<tr>
					<td>Tgl Lahir  </td>
					<td>
						<select name="tgl">
							<option value="">Tanggal</option>
							<?php
							for($tgl=1; $tgl<=31; $tgl++){
								echo '<option value="'.$tgl.'">'.$tgl.'</option>';
							}
							?>
						</select>
						<select name="bln">
							<option value="">Bulan</option>
							<?php
							$bulan = array(
								1 => 'Januari',
								2 => 'Februari',
								3 => 'Maret',
								4 => 'April',
								5 => 'Mei',
								6 => 'Juni',
								7 => 'Juli',
								8 => 'Agustus',
								9 => 'September',
								10 => 'Oktober',
								11 => 'November',
								12 => 'Desember'
							);
							foreach($bulan as $id => $bln){
								echo '<option value="'.$id.'">'.$bln.'</option>';
							}
							?>
						</select>
						<select name="thn">
							<option value="">Tahun</option>
							<?php
							for($thn=1990; $thn<=2016; $thn++){
								echo '<option value="'.$thn.'">'.$thn.'</option>';
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
					<select name="id_jenkel">
					<?php
					$sql_jenkel = 'SELECT * FROM jenkel';
					$row_jenkel = $koneksi -> prepare($sql_jenkel);
					$row_jenkel -> execute();
					$hasil_jenkel = $row_jenkel -> fetchAll();
					foreach($hasil_jenkel as $isi_jenkel){
					?>
					<option value="<?php echo $isi_jenkel['id_jenkel']; ?>">
					<?php echo $isi_jenkel['nm_jenkel']; ?>
					</option>
					<?php }?>
					</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" cols="20" rows="5"></textarea></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="number" name="tlp" /></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" name="email" /></td>
				</tr>
				<tr>
					<th colspan="2">Data User</th>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td>Re-Type</td>
					<td><input type="password" name="password2" /></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="2"><input type="submit" name="proses" value="Tambah" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php include_once 'footer.php'; ?>
<?php }else{ ?>
Sesi lu bukan admin bos! Login dulu coy... <a href="../login.php">Log In</a>
<?php }?>