<?php
	if (isset($_GET['remove']) && is_numeric($_GET['remove']))
	{
		/*
		$pattern = "/".$_COOKIE['ft_cart'].":[0-9];/";
		$_COOKIE['ft_cart'] = preg_replace($pattern, "X", $_COOKIE['ft_cart']);
		*/
	}
	if ($_COOKIE['ft_cart'] != '#')
	{
		if (($data = explode(';', $_COOKIE['ft_cart'])))
		{
			$type = 1;
			$total = 0;

			foreach ($data as $value)
			{
				if ($value && ($cart = explode(':', $value)))
				{
					$base = mysqli_connect('127.0.0.1', 'root', 'born2code', 'ft_minishop');
					$query = mysqli_prepare($base, 'SELECT id, name, price FROM ft_products WHERE id=?');

					mysqli_stmt_bind_param($query, "i", $cart[0]);
					mysqli_stmt_execute($query);
					mysqli_stmt_bind_result($query, $product['id'], $product['name'], $product['price']);
					mysqli_stmt_fetch($query);

					include('views/cart.v.php');

					$type = !$type;
					$total += ($cart[1] * $product['price']);
				}
			}
			echo '
			<div class="total">
				Total : '.$total.' €
			</div>

			<div class="submit">
				<form>
					<input type="submit" value="Proceed to payment" />
				</form>
			</div>';
		}
	}
	else
	{
		echo '
		<div class="error">
			Your cart seems empty
		</div>';
	}
?>
