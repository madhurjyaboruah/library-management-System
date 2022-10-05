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
              <center><h3>BOOK SEARCH FORM</h3></center>
			<form action="SearchBook.php" method="post">
				
				<div class="form-group">
					<label for="name">BOOK NAME:</label>
					<input type="text" name="BOOK_NAME" class="form-control" required>
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Search</button>
        <a href="dashboard22.php" class="btn btn-danger btn-md">Back</a>
			</form>
<br><br>
		<?php		
			require_once 'db_connection.php';

			if ($_POST) {
				$BOOK = $_POST['BOOK_NAME'];

				$find_books = "SELECT * FROM BOOK WHERE TITLE LIKE '%$BOOK%'";
				$return = mysqli_query($conn, $find_books);
				if (mysqli_num_rows($return)>0) {
					
					echo '<div class="row">
						    <div class="col-md-2"></div>
						    <div class="col-md-8">
						      <table class="table table-striped">
						        <thead>
						          <tr>
						            <th>BOOK ID</th>
						            <th> TITLE</th>
						            <th>AUTHOR</th>
									<th>GENRE</th>
						          </tr>
						        </thead>';
					}
					else{
					echo "NO BOOK FOUND";
				}
		
			
				while ($row = $return -> fetch_assoc()) {
						echo "<tr><td>".$row["ID"]." </td><td>".$row["TITLE"]."</td><td>".$row["AUTHOR"]."</td><td>".$row["GENRE"]."</td> </tr>";
			}
			
			}
			
		
			
		
		?>
	</table>
