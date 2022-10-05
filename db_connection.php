<?php 


$localhost="localhost";
$username="root";
$password="";
$dbname="lms";

$conn=new mysqli($localhost, $username, $password, $dbname);

if ($conn->connect_error) {
	echo "connection failed";
}else{
	#echo "Connected succesfully";
}

 ?>