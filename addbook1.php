<?php

require_once 'db_connection.php';

if ($_POST) {
	
	$ID = $_POST["Book_Id"];
	$TITLE = $_POST["Title"];
	$AUTHOR  = $_POST["Author"];
	$GENRE = $_POST["genre"];

	$select = "SELECT * FROM BOOK WHERE ID = '$ID'";
	$result = mysqli_query($conn, $select);
	$num_rows = mysqli_num_rows($result);
	if($num_rows>0){
		header('Location:dashboard22.php?message=Book Already exist in database');
	}else{
		$insert_query = "INSERT INTO BOOK (ID, TITLE, AUTHOR, GENRE) VALUES ('$ID', '$TITLE', '$AUTHOR', '$GENRE')";
		mysqli_query($conn, $insert_query);
		header('Location:dashboard22.php?message=Book added successfully');
	}

	}
?>