<?php
	function ft_getproduction($id)
	{
		$base = mysqli_connect('127.0.0.1', 'root', 'born2code', 'ft_minishop');
		$query = mysqli_prepare($base, 'SELECT name FROM ft_productions WHERE id=?');

		mysqli_stmt_bind_param($query, "i", $id);
		mysqli_stmt_execute($query);
		mysqli_stmt_bind_result($query, $prod['name']);
		mysqli_stmt_fetch($query);

		return ($prod['name']);
	}

	$base = mysqli_connect('127.0.0.1', 'root', 'born2code', 'ft_minishop');
	$data = mysqli_query($base, "SELECT * FROM ft_products WHERE category='2' ORDER BY name");

	$i = 0;

	$records = array();
	$productions = array();

	while($buffer = mysqli_fetch_assoc($data))
	{
		$records[$i] = $buffer;
		$productions[$i++] = ft_getproduction($buffer['category']);
	}
	mysqli_free_result($data);

	include('views/hardtek.v.php');
?>
