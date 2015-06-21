<?php
	include('core/SQL.php'  );
	include('core/Tools.php');

	if (isset($_COOKIE['cart']) && $_COOKIE['cart'] != '#')
	{
		$data = array();

		if ($cookie_a = explode(';', $_COOKIE['cart']))
		{
			$total = 0;

			foreach ($cookie_a as $value)
			{
				if ($value)
				{
					if ($cookie_b = explode(':', $value))
					{
						$query = "SELECT * FROM ft_products WHERE id = '".$cookie_b[0]."'";

						if ($buffer = SQLQuery($query))
						{
							$buffer[0]['stock'] = $cookie_b[1];
							$buffer[0]['price'] = ft_price($buffer[0]['price'], $cookie_b[1]);

							$total += $buffer[0]['price'];
							$data[] = $buffer[0];
						}
					}
				}
			}
			include('views/cart.v.php');
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
