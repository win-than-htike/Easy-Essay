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
				<h2 class="sub-header">Category List</h2>
				<a class="btn btn-success" href="<?php echo site_url('category/create'); ?>">New Category</a>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Category</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $row): ?>
								<tr>
									<td><a href="#"><?php echo $row->name; ?></a></td>
									<td><?php echo $row->description; ?></td>
									<td>
										<a class="btn btn-info" href="<?php echo site_url('category/edit') ?>/<?php echo $row->c_id; ?>">Edit</a>
										<a class="btn btn-danger" href="<?php echo site_url('category/delete') ?>/<?php echo $row->c_id; ?>">Delete</a>
									</td>
								</tr>
							<?php endforeach ?>
							
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>

	

	<?php include 'foot.php'; ?>

</body>
</html>