<?php
	include('core/SQL.php'  );
	include('core/Tools.php');

	/*
	** -- Test zone
	*/
	
	$_SESSION['user'] = "Metropolitan";
	
	/*
	** -- End
	*/
	
	if (isset($_SESSION['user']))
	{
		$query = "SELECT * FROM ft_users WHERE name = '".$_SESSION['user']."'";
		if ($data = SQLQuery($query))
		{
			$id_user = $data[0]['id'];
			$name = $data[0]['name'];
			$mail = $data[0]['mail'];
			
			$query2 = "SELECT * FROM ft_orders WHERE user = '".$id_user."'ORDER BY date";
			if (!$data2 = SQLQuery($query2))
			{
				$error2 = TRUE;
			}
			
			if ($_GET['mod'] === 'account' && $_POST['save'] === 'Save' && isset($_POST['nw_name']) && isset($_POST['nw_mail']))
			{
				echo "OK";
				if (isset($_POST['nw_passwd_1']) && isset($_POST['nw_passwd_2']) && $_POST['nw_passwd_1'] != NULL && $_POST['nw_passwd_2'] != NULL && $_POST['nw_passwd_1'] === $_POST['nw_passwd_2'])
				{
					echo "OK2";
				}
			}
			
			include('views/account.v.php');
		}
	}
	else
	{
		header('Location: index.php?nav=home');
	}
?>