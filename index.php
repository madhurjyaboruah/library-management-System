
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
       
      </ul>
    </div>
    </div>
  </nav>
   <br>
    <span><marquee>Welcome to the libray management system of University.Library is open 24*7 except holidays</marquee></span>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-3 col-md-6">
              <center><h3>Admin Login Form</h3></center>
			<form action="" method="post">
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
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admin where name = '$_POST[name]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['name'] == $_POST['name']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['id'] = $row['id'];
								header("Location:dashboard22.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>


     </section>  
    </section>
  </section>


</body>
        
        
      