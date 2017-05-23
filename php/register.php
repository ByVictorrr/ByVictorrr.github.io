<?php require 'dbconnect.php'; ?>
<?php

if(isset($_POST['Register'])){

session_start();

$UserName = $_POST['username'];
$Password = $_POST['pass'];
$Email = $_POST['mail'];

$sql = $con->query("INSERT INTO User_Information (user_name, user_pass, user_email)Values('{$UserName}', '{$Password}', {$Email}')");

header('Location: ../login.html');
}


?>





