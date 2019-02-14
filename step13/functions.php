<?php  



function connectToDb(){

	try {
	return new PDO('mysql:host=localhost;dbname=mytodo','root','lenovo');
} catch (PDOException $e) {
	die('Couldn\'t connect to the specified database '.$e);
}
}

function FetchAllTasks($pdo){

$statement = $pdo->prepare('select * from todos');
$statement->execute();
return  $statement->FetchAll(PDO::FETCH_CLASS,'Task'); 

}
