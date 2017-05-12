<!DOCTYPE html>
<html>
<head>
	<title>Category List</title>
	<?php include 'head.php'; ?>
</head>
<body>

	<?php include 'header.php'; ?>

	<div class="container-fluid">
		<div class="row">

			<?php include 'sidebar.php'; ?>      

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				
				<?php echo form_open('category/create'); ?>

				<div class="form-group">
					<label for="name">Category</label>
					<input type="text" name="name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="desc">Description</label>
					<textarea class="form-control" rows="5" name="desc"></textarea>
				</div>

				<input type="submit" value="Submit" class="btn btn-success">

				<?php echo form_close(); ?>

			</div>
		</div>
	</div>

	

	<?php include 'foot.php'; ?>

</body>
</html>