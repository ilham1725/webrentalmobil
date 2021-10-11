	
<?php if($_SESSION['rentalmobil']){ ?>
<html>
<head>
	<title>Var RentCar</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/admin.css">
</head>
<body>
	<header>
		<div class="header-top">
			<ul class="welcome">
				<li><a href="../logout.php">Logout</a></li>
				<li>
				Welcome
				<a href="user.php?id=<?php echo $_SESSION['rentalmobil']['id_user']?>">
				<?php echo $_SESSION['rentalmobil']['username']?>

				</a>
				</li>
			</ul>
		</div>
		<div class="header-bottom">
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="users.php">Pelayanan</a></li>
				<li><a href="produk.php">Contact Us</a></li>
			</ul>

		</div>
	</header>

<?php } ?>