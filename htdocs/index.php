<!DOCTYPE html>

<?php
	setcookie("ft_cart", "1:1;2:1;3:5;4:1;5:1;", (time() + 3600));
	$base = mysqli_connect('127.0.0.1', 'root', 'root', 'ft_minishop');
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>The Rats Factory</title>
		<link rel="stylesheet" href="core/webdesigns/ft_minishop.css">
	</head>

	<body>
		<div id="Navigation">
			<div class="content">

				<ul id="menu">
					<li>
						<a class="title" href="index.php?nav=home">HOME</a>
					</li>

					<li>
						<a class="title" href="#">RECORDS</a>

						<ul>
							<li><a href="index.php?nav=hardtek">HARDTEK</a></li>
							<li><a href="index.php?nav=tribecore">TRIBECORE</a></li>
							<li><a href="index.php?nav=frenchcore">FRENCHCORE</a></li>
							<li><a href="index.php?nav=hardcore">HARDCORE</a></li>
						</ul>
					</li>

					<li>
						<a class="title" href="index.php?nav=cart">CART</a>
					</li>

					<li>
						<a class="title" href="#">ACCOUNT</a>

						<ul>
							<li><a href="#">SIGN IN</a></li>
							<li><a href="#">SIGN UP</a></li>
						</ul>
					</li>
				</ul>

			</div>
		</div>

		<div id="Header">
			<div class="content">

			</div>
		</div>

		<div id="Content" class="content">

			<?php
				if (isset($_GET['nav']))
				{
					if		($_GET['nav'] == "home"	  ) {include('controllers/home.c.php'	);}
					else if ($_GET['nav'] == "records") {include('controllers/records.c.php');}
					else if ($_GET['nav'] == "hardtek") {include('controllers/hardtek.c.php');}
					else if ($_GET['nav'] == "cart"	  ) {include('controllers/cart.c.php'	);}
					else if ($_GET['nav'] == "account") {include('controllers/account.c.php');}
					else								{include('controllers/home.c.php'	);}
				}
				else									{include('controllers/home.c.php'	);}
			?>

		</div>

		<div id="Footer">
			<div class="content">
				<p>Copyright © 2015 The Rats Factory</p>
			</div>
		</div>
	</body>
</html>
