<!DOCTYPE html>
<html>
<head>
	<title>Step 9</title>
</head>
<body>
	<h1>Task for The day</h1>
	<ul>
		<?php /*<?php foreach ($task as $key => $value) :?>
			<li>
				<strong><?=ucwords($key);?></strong>=><?=ucwords($value);?>
			</li>
		<?php endforeach; ?>*/?>
		

		<li><strong>Name:</strong><?=$task['title'];?></li>
		<li><strong>Due Date:</strong><?=$task['due'];?></li>
		<li><strong>Assigned To:</strong><?=$task['assigned_to'];?></li>
		<li><strong>Status:</strong>
			<?php 
			if ($task['completed']) : ?>
				&#9786
			 <?php else : ?>
				&#9785
				<?php endif; ?>

		</li>


	</ul>
</body>
</html>