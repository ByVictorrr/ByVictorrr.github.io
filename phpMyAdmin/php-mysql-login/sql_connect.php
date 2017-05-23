<?php


	//connect to MYSQL
	$mysqli = mysql_connect('localhost', 'root', '');
	//check connection

	if(!$mysqli){
		echo 'Not Connected TO Server';
	}


if(!mysql_select_db($con, 'ByVictorrr')){
echo 'Database Not Selected';


}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO Members (username, password, email) VALUES ('$username', '$password', '$email')";

if(!mysql_query($mysqli, $sql)){


echo 'Not inserted';


}
else{
echo 'inserted';


}

 header("refresh:2; url=index.html");

?>