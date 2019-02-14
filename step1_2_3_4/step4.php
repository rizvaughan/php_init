<!DOCTYPE html>
<html>
<head>
	<title>Step 4</title>
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
			<?= "Hello,".htmlspecialchars($_GET['name']);
			//$name = $_GET['name']; 
			//echo "Hello,".$name;
			//echo "Hello,".$_GET['name'];

			?>
				
		</h1>
	</header>
</body>
</html>