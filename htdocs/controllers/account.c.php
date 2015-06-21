<?php
	include('core/SQL.php'  );
	include('core/Tools.php');

	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$query = "SELECT * FROM ft_users WHERE name = '".$_SESSION['user']."'";

		if ($data = SQLQuery($query))
		{
			for ($i = 0; $i < sizeof($data); $i++)
			{
				$name = $data[$i]['name'];
				$mail = $data[$i]['mail'];
			}
			include('views/account.v.php');
		}
	}
	else
	{
		header('Location: index.php?nav=home');
	}
?>
