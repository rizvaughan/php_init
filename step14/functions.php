<?php  





function FetchAllTasks($pdo){

$statement = $pdo->prepare('select * from todos');
$statement->execute();
return  $statement->FetchAll(PDO::FETCH_CLASS,'Task'); 

}
