<?php   
require  "config/config.php";
$question =  $_POST['question'];
$response =  $_POST['response'];


$sql = "INSERT INTO assistant (question,response) VALUES (:question, :response)";

$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(':question', $question);
$stmt -> bindParam(':response', $response);

$stmt -> execute();
$stmt = null;
$pdo = null;

?>