<?php

require_once 'db_connection.php';

if ($_POST) {
	
	$ID = $_POST["ID"];
	$NAME = $_POST["NAME"];
	$SUBJECT =$_POST['Subject'];
	$PUBLISHER  = $_POST["Publisher"];
	$YEAR = $_POST["Year"];

	$select = "SELECT * FROM MAGAZINE WHERE JOURNAL_ID = '$ID'";
	$result = mysqli_query($conn, $select);
	$num_rows = mysqli_num_rows($result);
	if($num_rows>0){
		header('Location:dashboard22.php?message=Journal already exist in database');
	}else{
		$insert_query = "INSERT INTO JOURNAL (JOURNAL_ID, NAME, SUBJECT, PUBLISHER, YEAR ) VALUES ('$ID', '$NAME', '$SUBJECT', '$PUBLISHER', '$YEAR')";
		mysqli_query($conn, $insert_query);
		header('Location:dashboard22.php?message=Journal added successfully');
	}

	}
?>