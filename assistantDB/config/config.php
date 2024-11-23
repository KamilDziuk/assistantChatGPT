<?php 
$config = array(
'servername' => '',
'username' => '',
'password' => '',
'dbname' => ''
);

$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");


?>