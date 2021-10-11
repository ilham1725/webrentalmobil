<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="asset/css/style.css" />
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
	</header>