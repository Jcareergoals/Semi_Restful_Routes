<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Product</title>
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
</head>
<body>
	<div class="container">
		<h2>Edit Product <?php echo $id; ?></h2>
		<div class="row">
			<div class="col-xs-11 col-sm-7 col-md-7">
				<?php 
					echo "<span>" . $this->session->flashdata('name') ."</span>";
					echo "<span>" . $this->session->flashdata('description') ."</span>";
					echo "<span>" . $this->session->flashdata('price') ."</span>";
					echo "<span>" . $this->session->flashdata('database_error') ."</span>";
				 ?>
				<form action="/products/update/<?php echo $id; ?>" method="post">
					<div class="row col-md-12">
				    	<label for="name">Name</label>
				    	<input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
					</div>
					<div class="row col-md-12 ">
				    	<label for="description">Description</label>
				    	<input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>">
					</div>
					<div class="row col-md-12 ">
				    	<label for="price">Price</label>
				    	<input type="float" class="form-control" id="price" name="price" value="<?php echo "$".$price; ?>">
					</div>
					<div class="row col-md-12">
					   	<button type="submit" class="btn btn-default">Update</button>
					</div>
				</form> <!-- End of the form -->
				<div class="row col-md-12">
					<a href="/" class='link'>Go back</a>
				</div>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>