<?php
  require('functions.php');
  session_start();
  if(!isset($_SESSION['name'])){
    header('location:index.php');
  }
?>
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
        <a class="navbar-brand" href="dashboard22.php">Library Management System</a>
      </div>
      <font style="color: white"><span><strong>Welcome : <?php echo $_SESSION['name'];  ?> </strong></span></font>
     
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
<div class="row">
 <div class="col-md-2">
  
  </div>

  <div class="col-md-4">
  <div class="card">
  <div class="card-header">
    Total
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo get_student_count();?></h5>
    <p class="card-text">registered student</p>
    <a href="viewstudents.php" class="btn btn-primary">View Student</a>
  </div>
</div>
</div>

<div class="col-md-4">
  <div class="card">
  <div class="card-header">
    Total
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo get_book_count();?></h5>
    <p class="card-text">registered books</p>
    <a href="viewbooks.php" class="btn btn-primary btn-danger">View Books</a>
  </div>
</div>
</div>
<div class="col-md-2">
  
  </div>

</section>

<br><br>


<center>
	<a href="addstudent.php" class="btn btn-primary btn-lg">Add Student</a>&nbsp&nbsp&nbsp
  <a href="addbook.php" class="btn btn-primary btn-lg">Add Book</a>

</center>
<br>
<center>
	<a href="SearchBook.php" class="btn btn-success btn-lg">Search Book</a>


 <a href="issuebook.php" class="btn btn-success btn-lg">Issue Book</a>
 <a href="ReIssueForm.php" class="btn btn-success btn-lg">Reissue Book</a>
  <a href="returnbook.php" class="btn btn-success btn-lg">Return Book</a>&nbsp&nbsp&nbsp

</center>
  
  




  


  
 
 

  </div>
</div>
<center>
  <?php
    if (isset($_GET['message'])) {
        echo $_GET['message'];
    }
  ?> 
</center>

      

</body>
</html>