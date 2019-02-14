<!DOCTYPE html>
<html>
<head>
	<title>step 7</title>
</head>
<body>
	<ul>
		<?php foreach ($person as $key => $value) :?>
		<li>
			<strong><?=$key;?></strong>=><?=$value;?>
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>