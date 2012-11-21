<?php 

if($_POST)
{
	$name = $_POST['username'];
	$passwd = $_POST['passwd'];
	$mailid = $_POST['mailid'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$_SESSION['username'] = $name;
}
?>

<html>
	<head>
		<title>
			Home page
		</title>
		<style type="text/css">
			.head{
				padding-left:20px;
			}
			.menuitems{
				padding-left:400px;
			}
		</style>
	</head>
	<body>
		<div class="head">
		<img src="restaurant_header.jpg" width="100%" height="30%" />
		<h1>
			Welcome <?php echo $name; ?>
		</h1>
		</div>
		<div class="menuitems">
		<form name="menu" action="order.php" method="post" >
		<h2>Menu  Items</h2>
		<table>
			<tr>
				<td>
					Dish   :
				</td>
				<td>
					<select multiple="multiple" name="dish[]">
  						<option value="chapathi">chapathi</option>
  						<option value="Dosa">Dosa</option>
  						<option value="Baati">Baati</option>
  						<option value="Dal">Dal</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Quantity   :
				</td>
				<td>
					<select name="dish_quantity">
					<?php 
						for($i=1;$i<=10;$i++)
						{
  							echo "<option value='$i'>$i</option>";
						}
					?>
					</select> 
				</td>
			</tr>
			<tr>
				<td>
					Ice flavor :
				</td>
				<td>
					<input type="radio" name="ice_flavor" value="Venilla">Venilla
					<input type="radio" name="ice_flavor" value="Strawberry">Strawberry
					<input type="radio" name="ice_flavor" value="Butter">Butter
				</td>
			</tr>
			<tr>
				<td>
					Quantity   :
				</td>
				<td>
					<select name="ice_quantity">
					<?php 
						for($i=1;$i<=10;$i++)
						{
  							echo "<option value='$i'>$i</option>";
						}
					?>
					</select> 
				</td>
			</tr>
			<tr>
				<td>
					Toppings :
				</td>
				<td>
					<input type="checkbox" name="toppings[]" value="nuts">Nuts
					<input type="checkbox" name="toppings[]" value="dryfruits">Dry Fruits					
				</td>
			</tr>
		</table>
		<br>

		<input type="hidden" name="mailid" value="<?php echo $mailid; ?>" />
		<input type="hidden" name="address" value="<?php echo $address; ?>" />
		<input type="hidden" name="phone" value="<?php echo $phone; ?>" />
		<input type="submit" name="menusubmit" value="Order"/>
		</form>
		</div>
	</body>
</html>