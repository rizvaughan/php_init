<!DOCTYPE html>
<html>
<head>
	<title>Step 16</title>
</head>
<body>

	<nav>
		<ul>
			<li>
				<a href="about.php">About Us</a>
			</li>
			<li>
				<a href="about-culture.php">About Culture</a>
			</li>
			<li>
				<a href="contact.php">Contact Us</a>
			</li>
		</ul>
	</nav>

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