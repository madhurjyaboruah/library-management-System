<?php

require_once 'db_connection.php';

if ($_POST) {
	
	$ID = $_POST["Book_ID"];
	$ROLL = $_POST["Student_Roll"];

	$select_book = "SELECT * FROM BOOK WHERE ID = '$ID'";
	$return_b = mysqli_query($conn, $select_book);

	if(mysqli_num_rows($return_b)>0){

		$row_b = $return_b ->fetch_assoc();

		if(is_null($row_b['ISSUED_BY'])){

			$select_student = "SELECT * FROM STUDENT WHERE ROLL_NUMBER = '$ROLL'";
			$return_s = mysqli_query($conn, $select_student);

			if(mysqli_num_rows($return_s)>0){

				$row_s = $return_s -> fetch_assoc();
				if($row_s["BOOKS_ISSUED"]<2){

					$num = $row_s["BOOKS_ISSUED"] + 1;
					//$issue_book = "INSERT INTO BOOK (ISSUED_BY) VALUES ('$ROLL') WHERE ID = '$ID' ";
					$issue_book = "UPDATE BOOK SET ISSUED_BY ='$ROLL', TIMES_ISSUED = 1 WHERE ID = '$ID'";
					//$increase_count = "INSERT INTO STUDENT (BOOKS_ISSUED) VALUES ('$num') WHERE ROLL_NUMBER = '$ROLL'";
					$increase_count = "UPDATE STUDENT SET BOOKS_ISSUED ='$num' WHERE ROLL_NUMBER = '$ROLL'";
					mysqli_query($conn, $issue_book);
					mysqli_query($conn, $increase_count);
					header('Location:issuebook.php?message=Successfully issued to '.$ROLL.'');
				}else{
					header('Location:issuebook.php?message=Max book issuing limit for '.$ROLL.' reached');
				}

			}else{
				header('Location:issuebook.php?message=Student not registered');
			}
		}else{
			header('Location:issuebook.php?message=Book already issued');
		}
	}else{
		header('Location:issuebook.php?message=Book not found in database');
	}



	}
?>