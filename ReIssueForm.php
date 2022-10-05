<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library Management System</title>
  <link rel="stylesheet" type="text/css" href="style.css">   
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="dashboard.php">Library Management System</a>
      </div>
      <font style="color: white"><span><strong>Welcome : admin </strong></span></font>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<br><br>
<body>


       <section class="container-fluid">
       <section class="row justify-content-center">
       <section class="col-12 col-sm-3 col-md-6">
              <center><h3>BOOK RE-ISSUE FORM</h3></center>
			<form action="ReIssueForm.php" method="post">
				
				<div class="form-group">
					<label for="name">STUDENT ROLL NUMBER:</label>
					<input type="text" name="ROLL_NUMBER" class="form-control" required>
				</div>

				<button type="submit" name="submit" class="btn btn-primary">RE-ISSUE</button>
        <a href="dashboard22.php" class="btn btn-danger btn-md">Back</a>
			</form>

		<?php		
			require_once 'db_connection.php';

			if ($_POST) {
				$ROLL = $_POST['ROLL_NUMBER'];

				$find_books = "SELECT * FROM BOOK WHERE ISSUED_BY = '$ROLL'";
				$return = mysqli_query($conn, $find_books);
				if (mysqli_num_rows($return)>0) {
					echo "<br><br><center><h4>BOOKS ISSUED BY ".$ROLL." ARE: </h4></center>";
					echo '<div class="row">
						    <div class="col-md-3"></div>
						    <div class="col-md-6">
						      <table class="table table-striped">
						        <thead>
						          <tr>
						            <th>BOOK ID</th>
						            <th> TITLE</th>
						            <th>AUTHOR</th>
						          </tr>
						        </thead>';
					

					while ($row = $return -> fetch_assoc()) {
						echo "<tr><td>".$row["ID"]." </td><td>".$row["TITLE"]."</td><td>".$row["AUTHOR"]."</td></tr>";
					}
					echo '<form action = "ReIssueBackEnd.php" method="post">
							<table>
								<tr>
									<td>
										<label for=ID>BOOK ID: </label>
									</td>
									<td>
										<input type="text" id="ID" name="ID">
									</td>
									<input type="hidden" id="ROLL" name ="ROLL" value='.$ROLL.'>
									<td>
										<input type="hidden" id="FORM" name ="FORM" value=1>
										<input type="submit" value="Re-Issue">
									</td>
								</tr>
								
							</table>	
							<input type="hidden" id="ROLL" name ="ROLL" value='.$ROLL.'>
						</form>';

				}else{
					echo "NO BOOKS HAS BEEN ISSED BY ".$ROLL."";
				}
			}
		?>
	</table>
	<?php
    if (isset($_GET['message'])) {
        echo $_GET['message'];
    }
	?>
</body>
</html>