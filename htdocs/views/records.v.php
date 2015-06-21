<div id="Records" class="page">

	<table>
		<tr>
			<td class="icon">
				<a href="#" alt="#">
					<img src="core/webdesigns/ft_minishop/plus.png" alt="#" title="#" />
				</a>
			</td>

			<td class="name" colspan="2">
				<?php echo $data[0]['name']; ?>
			</td>

			<td class="production">
				<?php echo $data[0]['production']; ?>
			</td>
		</tr>

		<tr>
			<td class="side">A1</td>

			<td class="duration">5:00									</td>
			<td class="artist"  ><?php echo $data[0]['artist_a_one']; ?></td>
			<td class="track"   ><?php echo $data[0]['track_a_one' ]; ?></td>
		</tr>

		<tr>
			<td class="side">A2</td>

			<td class="duration">5:00									</td>
			<td class="artist"  ><?php echo $data[0]['artist_a_two']; ?></td>
			<td class="track"   ><?php echo $data[0]['track_a_two' ]; ?></td>
		</tr>

		<tr>
			<td class="side">B1</td>

			<td class="duration">5:00									</td>
			<td class="artist"  ><?php echo $data[0]['artist_b_one']; ?></td>
			<td class="track"   ><?php echo $data[0]['track_b_one' ]; ?></td>
		</tr>

		<tr>
			<td class="side">B2</td>

			<td class="duration">5:00									</td>
			<td class="artist"  ><?php echo $data[0]['artist_b_two']; ?></td>
			<td class="track"   ><?php echo $data[0]['track_b_two' ]; ?></td>
		</tr>
	</table>

</div>
