<!DOCTYPE html>
<html>
<head>
	<title>Step 13</title>
</head>
<body>
	<ul>
		<?php foreach($tasks as $task) : ?>
			<li>
				<?php if($task->completed) :?>
					<strike>
					<?php endif;?>
					<?=$task->description?>
					<?php if($task->completed) : ?>
					</strike>
				<?php endif;?>

			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>