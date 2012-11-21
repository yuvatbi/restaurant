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
</style>
</head>
<body>
	<table border="1">
		<tr>
			<th>Dish</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
		<tr>
			<td><?php echo $dish_name; ?>
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
</body>
</html>
