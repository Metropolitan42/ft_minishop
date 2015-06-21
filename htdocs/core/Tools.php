<?php
	function ft_price($price, $quantity)
	{
		return ($price * $quantity);
	}

	function ft_production($id)
	{
		$query = "SELECT name FROM ft_productions WHERE id = '".$id."'";

		if ($data = SQLQuery($query))
		{
			return ($data[0]['name']);
		}
	}

	function ft_label($id)
	{
		$query = "SELECT name FROM ft_labels WHERE id = '".$id."'";

		if ($data = SQLQuery($query))
		{
			return ($data[0]['name']);
		}
	}

	function ft_artist($id)
	{
		$query = "SELECT name FROM ft_artists WHERE id = '".$id."'";

		if ($data = SQLQuery($query))
		{
			return ($data[0]['name']);
		}
	}

	function ft_category($id)
	{
		$query = "SELECT name FROM ft_categories WHERE id = '".$id."'";

		if ($data = SQLQuery($query))
		{
			return ($data[0]['name']);
		}
	}

	function ft_stock($stock)
	{
		if ($stock > 0)
		{
			return ('IN STOCK');
		}
		return ('OUT OF STOCK');
	}
	
	function ft_in_category($name)
	{
		$base = mysqli_connect('localhost', 'root', 'root', 'ft_minishop');
		
		$stmt = $mysqli->prepare("INSERT INTO ft_categories (filmName, filmDescription,filmImage,filmPrice,filmReview) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param('sssdi', $_POST['filmName'], $_POST['filmDescription'], $_POST['filmImage'], $_POST['filmPrice'], $_POST['filmReview']);
		$stmt->execute(); 
		$stmt->close();
	}
?>
