<?php
	function SQLQuery($query)
	{
		$pong = array();

		$base = mysqli_connect('127.0.0.1', 'root', 'born2code', 'ft_minishop');
		$data = mysqli_query  ($base, $query);

		while ($buffer = mysqli_fetch_assoc($data))
		{
			$pong[] = $buffer;
		}
		return($pong);
	}
	
	function SQLQuery_UP($query)
	{
		$conn = mysqli_connect('127.0.0.1', 'root', 'born2code', 'ft_minishop');
		
		if (mysqli_query($conn, $query))
		{
			return (0);
		}
		else
		{
			return (1);
		}
	}
?>
