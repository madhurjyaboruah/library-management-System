<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$select = "SELECT  * FROM BOOK WHERE ID='$_GET[bn]'";
	$RETURN = mysqli_query($connection, $select);
	$row= $RETURN->fetch_assoc();
	if($row['ISSUED_BY']==null){
		$query = "delete from BOOK where ID = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		echo '<script type="text/javascript">
		alert("Book Deleted...");
		window.location.href = "viewbooks.php";
		</script>';
	}else{
		echo '<script type="text/javascript">
		alert("Book is currently issued by '.$row['ISSUED_BY'].'");
		window.location.href = "viewbooks.php";
		</script>';
	}

?>
	
