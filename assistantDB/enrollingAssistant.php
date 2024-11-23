<?php  
require "config/config.php";


$question = $_POST['question'];
$response = $_POST['response'];


$sql = "INSERT INTO assistant (question,response) VALUES ('$question','$response')";
if( $config = $conn->query($sql) === TRUE)
{
echo "Adding!";
}
$conn -> close();

?>