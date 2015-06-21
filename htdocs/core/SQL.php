<?php
	function SQLQuery($query)
	{
		$pong = array();

		$base = mysqli_connect('localhost', 'root', 'root', 'ft_minishop');
		$data = mysqli_query  ($base, $query);

		while ($buffer = mysqli_fetch_assoc($data))
		{
			$pong[] = $buffer;
		}
		return($pong);
	}
	
	function SQLQuery_UP($query)
	{
		$base = mysqli_connect('localhost', 'root', 'root', 'ft_minishop');
		
		if (mysqli_query($base, $query))
		{
			return (0);
		}
		else
		{
			return (1);
		}
	}
?>
