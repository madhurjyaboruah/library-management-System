<?php
	require_once 'db_connection.php';

	if($_POST){
		$ID = $_POST['ID'];
		$ROLL = $_POST['ROLL'];
		$FORM = $_POST['FORM'];
		$select = "SELECT * FROM BOOK WHERE ID = '$ID' AND ISSUED_BY = '$ROLL'";
		$return = mysqli_query($conn, $select);

		if(mysqli_num_rows($return)>0){

			$row = $return->fetch_assoc();
			if($row['TIMES_ISSUED']<4){
				$num = $row['TIMES_ISSUED']+1;
				$update = "UPDATE BOOK SET TIMES_ISSUED ='$num' WHERE ID ='$ID'";
				mysqli_query($conn, $update);
				if($FORM == 2){
					header('Location:stu_dashboard.php?message=Re-Issue successful&Roll_Number='.$ROLL.'');
				}else{
					header('Location:dashboard22.php?message=Re-Issue successful');
				}
			}else{
				if($FORM ==2){
					header('Location:stu_dashboard.php?message=You have exceeded the issue count on this book&Roll_Number='.$ROLL.'');
				}else{
					header('Location:dashboard22.php?message='.$ROLL.' has exceeded the issue count on this book');
				}
				
			}

		}else{
			if($FORM == 2){
					header('Location:stu_dashboard.php?message=THIS BOOK IS NOT ISSUED BY YOUl&Roll_Number='.$ROLL.''); 

				}else{
					header('Location:dashboard22.php?message=THIS BOOK IS NOT ISSUED BY '.$ROLL.'');
			}

		}
			

	}
?>