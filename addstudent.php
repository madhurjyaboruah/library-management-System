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
    <span><marquee>Welcome to the libray management system of University.Library is open 24*7 except holidays</marquee></span>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-3 col-md-6">
              <center><h3>STUDENT ACCOUNT CREATION FORM</h3></center>
			<form action="addstudent1.php" method="post">
				<div class="form-group">
					<label for="name">STUDENT NAME:</label>
					<input type="text" name="Student_Name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">STUDENT ROLL NUMBER:</label>
					<input type="text" name="Student_Roll" class="form-control" required>
				</div>

				<div class="form-group">
				    <label for="GENDER">SEX:</label>
				    <select class="form-control" name="Sex" id="Sex">
				      <option>Male</option>
				      <option>Female</option>
				      <option>Other</option>
				 
				    </select>
				  </div>

				<div class="form-group">
					<label for="Department">DEPARTMENT:</label>
					<input type="text" name="Department" class="form-control" required>
				</div>

				

				<button type="submit" name="submit" class="btn btn-primary">Create</button>
        <a href="dashboard22.php" class="btn btn-danger btn-md">Back</a>
			</form>

     </section>  
    </section>
  </section>
 <?php
    if (isset($_GET['message'])) {
        echo $_GET['message'];
    }
	?>

</body>
</html>
        