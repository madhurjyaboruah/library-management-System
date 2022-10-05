<?php
	require_once 'db_connection.php';

	if($_POST){
		$ID = $_POST['ID'];
		$ROLL = $_POST['ROLL'];
		
		$select = "SELECT * FROM BOOK WHERE ID = '$ID' AND ISSUED_BY = '$ROLL'";
		$return = mysqli_query($conn, $select);

		if(mysqli_num_rows($return)>0){

			$row = $return->fetch_assoc();
				$update_book = "UPDATE BOOK SET ISSUED_BY=null, TIMES_ISSUED =0 WHERE ID ='$ID'";
				mysqli_query($conn, $update_book);

				$select_s = "SELECT * FROM STUDENT WHERE ROLL_NUMBER='$ROLL'";
				$return_s = mysqli_query($conn, $select_s);
				$num = ($return_s->fetch_assoc()['BOOKS_ISSUED'])-1;
				$update_student = "UPDATE STUDENT SET BOOKS_ISSUED = '$num' WHERE ROLL_NUMBER = '$ROLL'";
				mysqli_query($conn, $update_student);

				header('Location:returnbook.php?message=Return successful');

		}else{
			header('Location:returnbook.php?message=THIS BOOK IS NOT ISSUED BY '.$ROLL.'');
		}


	}