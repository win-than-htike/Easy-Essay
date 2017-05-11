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
				
				<?php echo form_open('essay/edit/'. $essay->e_id); ?>

				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" name="title" class="form-control" value="<?php echo $essay->title; ?>" required>
				</div>

				<div class="form-group">
					<label for="teacher_name">Teacher Name:</label>
					<input type="text" name="teacher_name" class="form-control" value="<?php echo $essay->teacher_name; ?>" required>
				</div>

				<div class="form-group">
					<label for="intro">Introduction</label>
					<textarea class="form-control" rows="5" name="intro" required><?php echo $essay->introduction; ?></textarea>
				</div>

				<div class="form-group">
					<label for="body">Body</label>
					<textarea class="form-control" rows="10" name="body" required><?php echo $essay->body; ?></textarea>
				</div>

				<div class="form-group">
					<label for="conclusion">Conclusion</label>
					<textarea class="form-control" rows="5" name="conclusion" required><?php echo $essay->conclusion; ?></textarea>
				</div>

				<input type="submit" value="Update" class="btn btn-info">

				<?php echo form_close(); ?>

			</div>
		</div>
	</div>

	

	<?php include 'foot.php'; ?>

</body>
</html>