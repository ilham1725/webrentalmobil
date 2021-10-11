<?php session_start();?>
<?php if($_SESSION['rentalmobil']){?>
<?php require '../koneksi.php'; ?>
<?php include_once 'header.php';?>

<div class="content">
<h1> Home</h1>
<div class="post">
	<p>Selamat datang di situs sewa mobil kami. Var RentCar merupakan perusahaan yang memberikan pelayanan dalam bidang Rental Mobil dengan harga murah
	namun tetap memberikan kualitas prima. Dengan pengalaman lebih dari 10 th dalam bidang sewa, Kami telah melayani berbagai pelayanan seperti tamu kehormatan,
	hotel, dan para pribadi untuk kepentingan UKM maupun keluarga.</p>
	<p>Kami menyewakan kendaraan yang berkualitas ditambah dengan jenis sewa harian yang merupakan penawaran terbaik dari kami untuk anda. Jangan ragu untuk menghubungi kami.</p>
</div>
<div class="content1">
<h3>Kendaraan</h3>
</div>
<div class="post1">
	<p> Toyota </p>
	<p>Avansa IDR 350.000</p>
	<p>Inova IDR 450.000</p>
</div>

<?php require 'footer.php';?>
<?php }else {?>
sesi lu bukan admin bos! login dulu coy... <a href="../login.php"> log in</a>
<?php } ?>