<div id="Category" class="page">

	<table><?php

			$type = 1;

			foreach ($data as $value)
			{
				echo'
				<tr class="row'.$type.'">

					<td class="icon">
						<a href="#" alt="#">
							<img src="core/webdesigns/ft_minishop/plus.png" alt="#" title="#" />
						</a>
					</td>

					<td class="name">
						<a href="index.php?nav=records&id='.$value['id'].'" alt="#">
							'.$value['name'].'
						</a>
					</td>

					<td class="production">'.$value['production'].'</td>
					<td class="stock"     >'.$value['stock'		].'</td>

					<td class="quantity">
						<input type="text" name="quantity" value="1">
					</td>

					<td class="price">'.$value['price'].' €</td>
				</tr>';

				$type = !$type;
			}

	?></table>

</div>
