<?php

	require '../koneksi.php';
	
	$proses = $_POST['proses'];
	
	$nm_member = $_POST['nm_member'];
	$tgl_lahir = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$email = $_POST['email'];
	$id_jenkel = $_POST['id_jenkel'];
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($proses == 'Tambah' && $password == $_POST['password2']){
		$sql_m = 'INSERT INTO member(nm_member,tgl_lahir,alamat,tlp,email,id_jenkel)
				  VALUES(?,?,?,?,?,?)';
		$row_m = $koneksi -> prepare($sql_m);
		$row_m -> execute(array($nm_member,$tgl_lahir,$alamat,$tlp,$email,$id_jenkel));
		
		$newIdMember = $koneksi -> lastInsertId(); //mengambil id terbaru t_member
		
		}
		
		if(!empty($newIdMember)){
		$sql_u = 'INSERT INTO user(username, password, id_member, date)
				  VALUES(?,MD5(?),?,now())';
		$row_u = $koneksi -> prepare($sql_u);
		$row_u -> execute(array($username, $password, $newIdMember));
		
		echo '<script>alert("Tambah data berhasil");window.location="users.php"</script>';
		
		}
?>
<?php
	
	if(!empty($_GET['id_user'] && $_GET['id_member'])){
	
	$id_member = $_GET['id_member'];
	$sql_p = 'DELETE FROM member WHERE id_member = ?';
	$row_p = $koneksi -> prepare($sql_p);
	$row_p -> execute(array($id_member));
	
	$id_user = $_GET['id_user'];
	$sql_pa = 'DELETE FROM user WHERE id_user = ?';
	$row_pa = $koneksi -> prepare($sql_pa);
	$row_pa -> execute(array($id_user));
	
	echo  
		
		'<script>alert("delete user berhasil"); window.location="users.php"</script>';
	}
?>