<style>
#Account table
{
	width: 100%;
	border-collapse: collapse;
}

#Account td
{
	border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
#Account td.title
{
	padding: 10px;
	font-size: 15px;
	text-align: center;
}
#Account #box-config
{
	padding: 20px;
	min-height: 100px;
	margin: auto;
}
#Account #box-config div
{
	margin: 10px;
}
#Account #box-config label
{
	display: block;
	width: 150px;
	float: left;
	margin-top: 7px;
}
#Account #box-config input
{
	height: 25px;
	width: 680px;
	color: rgb(150, 135, 0);
	background: rgba(0, 0, 0, 0.2);
	border-radius: 3px;
	border: 1px solid rgba(255, 255, 255, 0.1);
	box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.3);
	text-align: center;
}
</style>

<div id="Account" class="page">

	<table>
		
		<tr id="Module_Account_Header" class="row1">
			<td class="title">Manage my account</td>
		</tr>
		<tr id="Module_Account" class="row1">
			<td>
				
				<div id="box-config">
					<form method="post" action="index.php?nav=account&mod=account">
						<div>
							<label for="nw_name">Name :</label><input type="text" name="nw_name" value="<?php echo $name; ?>"/>
						</div>
						<div>
							<label>Mail :</label><input type="text" name="nw_mail" value=""/>
						</div>
						<div>
						</div>
						<div>
							<label>New Password :</label><input type="text" name="nw_passwd_1" value=""/>
						</div>
						<div>
							<label>Repeat New Password :</label><input type="text" name="nw_passwd_2" value=""/>
						</div>
					</form>
				</div>
				
			</td>
		</tr>
		
		<tr id="Module_Purchases_Header" class="row">
			<td class="title">See my purchases</td>
		</tr>
		<tr id="Module_Purchases" class="row">
			<td>
				
				<div id="box-config">
					<form method="post" action="index.php?nav=account&mod=purchases">
					
					</form>
				</div>
				
			</td>
		</tr>
		
		<!-- # Admin only # -->
		
		<tr id="Module_Products_Header" class="row1">
			<td class="title">Manage Products</td>
		</tr>
		<tr id="Module_Products" class="row1">
			<td>
				
				<div id="box-config">
					<form method="post" action="index.php?nav=account&mod=products">
					
					</form>
				</div>
				
			</td>
		</tr>
		
		<tr id="Module_Categories_Header" class="row">
			<td class="title">Manage Categories</td>
		</tr>
		<tr id="Module_Categories" class="row">
			<td>
				
				<div id="box-config">
					<form method="post" action="index.php?nav=account&mod=categories">
					
					</form>
				</div>
				
			</td>
		</tr>
		
		<tr id="Module_Users_Header" class="row1">
			<td class="title">Manage Users</td>
		</tr>
		<tr id="Module_Users" class="row1">
			<td>
				
				<div id="box-config">
					<form method="post" action="index.php?nav=account&mod=users">
					
					</form>
				</div>
				
			</td>
		</tr>
		
	</table>

</div>