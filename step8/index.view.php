<!DOCTYPE html>
<html>
<head>
	<title>Step 8</title>
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
		<li><strong>Status:</strong><?=$task['completed'] ? 'Complete' : 'Incomplete'; ?></li>


	</ul>
</body>
</html>