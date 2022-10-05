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
      <font style="color: white"><span><strong>Welcome : admin  </strong></span></font>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<br><br>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-3 col-md-6">
              <center><h3>BOOK ISSUE FORM</h3></center>
			<form action="issuebook1.php" method="post">
				<div class="form-group">
					<label for="name">BOOK ID:</label>
					<input type="text" name="Book_ID" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">STUDENT ROLL NUMBER:</label>
					<input type="text" name="Student_Roll" class="form-control" required>
				</div>

				<button type="submit" name="submit" class="btn btn-primary">ISSUE</button>
        <a href="dashboard22.php" class="btn btn-danger btn-md">Back</a>
			</form>
		
		<?php
        if (isset($_GET['message'])) {
        echo $_GET['message'];
       }
	   ?>
     </section>  
    </section>
  </section>



</body>
</html>