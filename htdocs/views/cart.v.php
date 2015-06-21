<div id="Cart" class="page">

	<table><?php

		$type = 1;

		foreach ($data as $value)
		{
			echo'
			<tr class="row'.$type.'">

				<td class="icon">
					<a href="#" alt="#">
						<img src="core/webdesigns/ft_minishop/cross.png" alt="#" title="#" />
					</a>
				</td>

				<td class="name">
					<a href="index.php?nav=records&id='.$value['id'].'" alt="#">
						'.$value['name'].'
					</a>
				</td>

				<td class="quantity">'.$value['stock'].'  </td>
				<td class="price"   >'.$value['price'].' €</td>
			</tr>';

			$type = !$type;
		}
		echo '
		<tr>
			<td colspan="4">
				'.$total.' €
			</td>
		</tr>';

	?></table>

	<?php
		echo '
		<div class="submit">
			<form>
				<input type="submit" value="Proceed to payment" />
			</form>
		</div>';
	?>

</div>
