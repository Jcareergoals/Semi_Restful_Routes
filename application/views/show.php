<!DOCTYPE html>
<html lang="en">
<head>
	<title>Show</title>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		* {
			margin: 0px; 
			padding: 0px; 
			font-family: tahoma; 
		} 
		.container {
			width: 960px;
			border: 2px solid grey;
			margin: 40px auto;  
		}
		th {
			padding: 5px 30px 5px 0px; 
		}
		.links  {
			padding: 5px auto; 
			line-height: 30px;  
			text-decoration: underline;  
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 ">
				<h2>Product <?php echo $id; ?></h2>
				<table>
					<tr>
						<th>Name:</th>
						<td><?php echo $name; ?></td>
					</tr>
					<tr>
						<th>Description:</th>
						<td><?php echo $description; ?></td>
					</tr>
					<tr>
						<th>Price:</th>
						<td><?php echo "$".$price; ?></td>
					</tr>
				</table>
			</div> <!-- End of column -->
		</div> <!-- End of row -->
		<div class="row">
			<div class='col-md-8'>
				<a href="/products/edit/<?php echo $id; ?>" class='links'>Edit</a> | <a href="/products" class='links'>Back</a>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>