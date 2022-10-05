<?php

require_once 'db_connection.php';

if ($_POST) {
	
	$NAME = $_POST["Student_Name"];
	$ROLL = $_POST["Student_Roll"];
	$SEX  = $_POST["Sex"];
	$DEPT = $_POST["Department"];
	$PW = 	$_POST["Password"];

	$select = "SELECT * FROM STUDENT WHERE ROLL_NUMBER = '$ROLL'";
	$result = mysqli_query($conn, $select);
	$num_rows = mysqli_num_rows($result);
	if($num_rows>0){
		header('Location:dashboard22.php?message=Student Already exist in database');
	}else{
		$insert_query = "INSERT INTO STUDENT (NAME, ROLL_NUMBER, SEX, DEPARTMENT, PASSWORD, BOOKS_ISSUED) VALUES ('$NAME', '$ROLL', '$SEX', '$DEPT', '$PW',0)";
		mysqli_query($conn, $insert_query);
		header('Location:dashboard22.php?message=Student added successfully');
	}


	


}



?>