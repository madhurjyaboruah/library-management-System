<?php

require_once 'db_connection.php';

if($_POST){

	$ID = $_POST["ID"];
	$NAME = $_POST["Magazine_Name"];
	$PUBLISHER  = $_POST["Publisher"];
	$MONTH = $_POST["Month"];
	$YEAR = $_POST["Year"];

	$select = "SELECT * FROM MAGAZINE WHERE MAGAZINE_ID = '$ID'";
	$result = mysqli_query($conn, $select);
	$num_rows = mysqli_num_rows($result);
	if($num_rows>0){
		echo "string";
		header('Location:dashboard22.php?message=Magazine already exist in database');
	}else{
		echo "string";
		$insert_query = "INSERT INTO MAGAZINE (MAGAZINE_ID, NAME, PUBLISHER, MONTH, YEAR ) VALUES ('$ID', '$NAME', '$PUBLISHER', '$MONTH','$YEAR')";
		mysqli_query($conn, $insert_query);
		header('Location:dashboard22.php?message=Magazine added successfully');
	}

	}
	?>