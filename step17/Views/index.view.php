<?php require 'Views/Partials/head.php'; ?>

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

<?php require 'Views/Partials/footer.php'; ?>