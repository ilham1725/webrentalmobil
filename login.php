<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/login.css">

</head>
<body>
<div class="bg">
	<img src="car.jpg">
</div>
	<div class="all">
		<div class="box"><center>
		
			<div class="title">
				<h2>Welcome In Var RentCar</h2>
				<h2>Login</h2>
			</div>
			<section class="container">
				<form method="POST" action="loginproses.php">
					<div class="input-box">
						<input type="tetx" name="username" placeholder="Username" required="required" width="50%" />
						<br>
						<br>
						<input type="password" name="password" placeholder="Password" required="required" width="50%" />
					</div>
					<div class="submit-box">
						<input type="submit" name="proses" value="Masuk">
					</div>
					<div class="forgot-pass">
						<a href="#">Lupa Password..?</a> | <a href="form_pendaftaran.php">Belum Punya Akun..?</a>
					</div>
				</form>
			</section>
			<div class="box-bottom">
				<div class="text">
					Atau masuk dengan:
				</div>
				<div class="social">
					<a href="facebook.com" style="background:#3b5998; color:#fff;">facebook</a>
					<a href="gmail.com" style="background:#EA4335; color:#fff;">google</a>
				</div>
			</div></center>
		</div>
	</div>
</body>
</html>