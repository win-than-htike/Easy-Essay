<!DOCTYPE html>
<html>
<head>
	<title>Essay List</title>
	<?php include 'head.php'; ?>
</head>
<body>

	<?php include 'header.php'; ?>

	<div class="container-fluid">
		<div class="row">

			<?php include 'sidebar.php'; ?>      

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				
				<?php echo form_open('essay/create'); ?>

				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" name="title" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="teacher_name">Teacher Name:</label>
					<input type="text" name="teacher_name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="intro">Introduction</label>
					<textarea class="form-control" rows="5" name="intro" required></textarea>
				</div>

				<div class="form-group">
					<label for="body">Body</label>
					<textarea class="form-control" rows="10" name="body" required></textarea>
				</div>

				<div class="form-group">
					<label for="conclusion">Conclusion</label>
					<textarea class="form-control" rows="5" name="conclusion" required></textarea>
				</div>

				<div class="form-group">
					<select name="category_id" class="form-control">
					<option value="<?php echo 0; ?>">Choose Category</option>
						<?php foreach ($category as $c): ?>
							<option value="<?php echo $c->c_id; ?>"><?php echo $c->name; ?></option>
						<?php endforeach ?>
					</select>
				</div>

				<input type="submit" value="Submit" class="btn btn-success">

				<?php echo form_close(); ?>

			</div>
		</div>
	</div>

	

	<?php include 'foot.php'; ?>

</body>
</html>