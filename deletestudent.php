<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$select = "SELECT  * FROM STUDENT WHERE ROLL_NUMBER='$_GET[RN]'";
	$RETURN = mysqli_query($connection, $select);
	$row= $RETURN->fetch_assoc();
	if($row['BOOKS_ISSUED']==0){
		$query = "delete from STUDENT where ROLL_NUMBER ='$_GET[RN]'";
		$query_run = mysqli_query($connection,$query);
		echo '<script type="text/javascript">
		alert("Student Deleted...");
		window.location.href = "viewstudents.php";
		</script>';
	}else{
		echo '<script type="text/javascript">
		alert("Student currently books '.$row['BOOKS_ISSUED'].' issued");
		window.location.href = "viewstudents.php";
		</script>';
	}

?>