<!DOCTYPE html>
<html>
<head>
	<title>Step 6</title>
	<style type="text/css">
		header {
			background-color: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<ul>
<!-- 				<?php foreach($names as $name) {
					echo "<li>$name</li>";
				}
				?> -->
				<?php foreach($names as $name):?>
					<li><?=$name?></li>
				<?php endforeach; ?>

			</ul>			
		</h1>
	</header>
</body>
</html>