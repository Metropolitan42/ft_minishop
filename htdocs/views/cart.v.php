<div id="Cart" class="page">

	<div class="<?php echo 'cartproduct'.$type; ?>">

		<table>
			<tr>
				<td class="icon" ><a href="index.php?nav=cart&amp;remove=<?php echo $product['id']; ?>" alt="Remove"><img src="core/webdesigns/ft_minishop/cross.png" alt="Remove" title="Remove"/></a></td>
				<td class="name" ><?php echo $product['name']; ?></td>
				<td class="quantity"><?php echo $cart[1]; ?></td>
				<td class="price" ><?php echo ($cart[1] * $product['price']); ?> €</td>
			</tr>
		</table>

	</div>
</div>
