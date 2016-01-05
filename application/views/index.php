<!DOCTYPE html>
<html lang="en">
<head>
	<title>Products</title>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/styles.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- <meta http-equiv="refresh" content="1"> -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Products</h2>
				<table class='table table-striped table-bordered'>
					<tr>
						<th class='col-md-2'>Name</th>
						<th class='col-md-6'>Description</th>
						<th class='col-md-1'>Price</th>
						<th class='col-md-3'>Actions</th>
					</tr>
					<!-- ======= Dynamically create row data ======= -->
					<?php $products = $this->session->userdata('products'); 
					for($x = count($products)-1; $x >= 0; $x-= 1)
					{?>  
					<tr>
						<td><?php echo $products[$x]['name']; ?></td>
						<td><?php echo $products[$x]['description']; ?></td>
						<td class='price'><?php echo "$".$products[$x]['price']; ?></td>
						<form action='products/destroy/<?php echo $products[$x]['id']; ?>' method='post'>
							<td>
								<a href="products/show/<?php echo $products[$x]['id']; ?>" class='col-md-offset-3 link'>Show</a> | 
								<a href="products/edit/<?php echo $products[$x]['id']; ?>" class='link'>Edit</a> |
								<input type='submit' value='Remove'>
							</td>
						</form>
					</tr>
					<? } ?>
				</table>
				<a href="/products/new_products" class='link'>Add a new product</a>
			</div> <!-- End of row column -->
		</div>
	</div> <!-- End Container -->
</body> 
</head>