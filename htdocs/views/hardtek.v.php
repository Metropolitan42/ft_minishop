<div id="Hardtek" class="page records">

	<table>
			<?php
				$type = 1;

				for ($i = 0; $i < sizeof($records); $i++)
				{
					if ($records[$i]['stock'] > 0)
					{
						$stock = "IN STOCK";
					}
					else
					{
						$stock = "OUT OF STOCK";
					}
					echo'
					<tr class="row'.$type.'">
						<td class="icon">
							<a href="#" alt="#"><img src="core/webdesigns/ft_minishop/plus.png" alt="#" title="#" /></a>
						</td>
						<td class="name">
							'.$records[$i]['name'].'
						</td>
						<td class="production">
							'.$productions[$i].'
						</td>
						<td class="stock">
							'.$stock.'
						</td>
						<td class="quantity">
							<input type="text" name="quantity" value="1">
						</td>
						<td class="price">
							'.$records[$i]['price'].' €
						</td>
					</tr>';

					$type = !$type;
				}
			?>
	</table>

</div>
