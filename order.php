<!-- Page for ordered items -->
<?php

if($_POST)
{
	//Item details posted from menu page
	$dish_name = $_POST['dish'];
	$dish_quantity = $_POST['dish_quantity'];
	$ice_flavor = $_POST['ice_flavor'];
	$ice_quantity = $_POST['ice_quantity'];
	$toppings = $_POST['toppings'];
	
}

?>

<html>
<head>
<title>Order Page</title>
<!-- Style for table head -->
<style type="text/css">
th {
	background-color: lightblue;
}
.head{
	padding-bottom:30px;
}
.payment{
	float:right;
	padding-right:100px;
	Position:relatve;
}
.order{
	float:left;
	padding-left:100px;
	width="100"
}
</style>
</head>
<body>
	<div class="head">
		<img src="restaurant_header.jpg" width="100%" height="30%" />

	</div>
	
	<div class="order">
	
	<table border="1" >
		<tr>
			<th>Dish</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
		<tr>
			<td><?php echo $dish_name[0]." ".$dish_name[1]." ".$dish_name[2]." ".$dish_name[3]; ?>
			</td>
			<td><?php echo $dish_quantity; ?>
			</td>
			<td><?php echo $dish_quantity * 20; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $ice_flavor; ?>
			</td>
			<td><?php echo $ice_quantity; ?>
			</td>
			<td><?php echo $ice_quantity * 15; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
				 if($toppings == "nuts")
					echo "Nuts";
				else if($toppings == "dryfruits")
					echo "Dry Fruits";
				?>
			</td>
			<td>1</td>
			<td>
				<?php 
					 if($toppings == "nuts")
						echo 30;
					else if($toppings == "dryfruits")
						echo 35;
				
				?>
			</td>
		</tr>

	</table>
	</div>
	<div class="payment">
	<table  border="1" >
		<tr>
			<td>
				Card No :
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
				Name On Card :
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
				Expiry Date :
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
				CVV2 No :
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" name="cancel" value="cancel" />
			</td>
			<td>
				<input type="submit" name="submit" value="submit" />
			</td>
		</tr>
	</table>
	</div>
</body>
</html>
