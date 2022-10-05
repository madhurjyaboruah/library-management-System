
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
        <a class="navbar-brand" href="index.php">Library Management System</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Student Login</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
   <br>
    <span><marquee>Welcome to the libray management system of University.Library is open 24*7 except holidays</marquee></span>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-3 col-md-6">
              <center><h3>Student Login Form</h3></center>
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="name">User ID:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>

			<?php

			 require_once 'db_connection.php';

			if ($_POST) {
				$ROLL = $_POST['name'];
				$PW = $_POST['password'];

				$VERIFY = "SELECT PASSWORD FROM STUDENT WHERE ROLL_NUMBER = '$ROLL'";
				$return = mysqli_query($conn, $VERIFY);
				$row = $return ->fetch_assoc();
				

				if($return != False){
					if($row['PASSWORD'] == $PW){
						header('Location:stu_dashboard.php?Roll_Number='.$ROLL.'');
					}else{
						header('Location:index.php?message=WRONG ID OR PASSWORD');
					}
				}else{
					header('Location:index.php?message=WRONG ID OR PASSWORD');
				}
				

			}



			?>


     </section>  
    </section>
  </section>


</body>
</html>
        
      