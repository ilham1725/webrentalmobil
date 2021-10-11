<?php
	session_start();
	UNSET($_SESSION['rentalmobil']);
	echo '<script>window.location="login.php";</script>';
?>