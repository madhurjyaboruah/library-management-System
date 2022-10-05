
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
   <center><h1>Total Regsitered Users List</h1></center>
   <br><br>
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Gender</th>
            <th>Department</th>
              <th>manage</th>
          </tr>
        </thead>
        <?php
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"lms");
          $query = "select * from  STUDENT";
          $query_run = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
              <td><?php echo $row['NAME'];?></td>
              <td><?php echo $row['ROLL_NUMBER'];?></td>
              <td><?php echo $row['SEX'];?></td>
              <td><?php echo $row['DEPARTMENT'];?></td>
            
              <td>
                 <a href="deletestudent.php?RN=<?php echo $row['ROLL_NUMBER'];?>" class="btn btn-danger btn-md">Delete</a>
              </td>
            </tr>
            <?php
          }
        ?>
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>
  <br>
  <center><a href="dashboard22.php" class="btn btn-primary btn-md">Back</a></center>
</body>
</html>