<?php
  require('functions.php');
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"lms");
  $book_no = "";
  $book_name = "";
  $author_id = "";
  $cat_id = "";
  $query = "select * from BOOK where ID = $_GET[bn]";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $book_name = $row['TITLE'];
    $book_no = $row['ID'];
    $author_id = $row['AUTHOR'];
    $cat_id = $row['GENRE'];
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
        <a class="navbar-brand" href="dashboard.php">Library Management System</a>
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
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="" method="post">
        <div class="form-group">
          <label>Book No:</label>
          <input type="text" name="book_no" value="<?php echo $book_no;?>" class="form-control"  readonly required="">
        </div>
        <div class="form-group">
          <label>Book Name:</label>
          <input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Author ID:</label>
          <input type="text" name="author_id" value="<?php echo $author_id;?>" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Category ID:</label>
          <input type="text" name="cat_id" value="<?php echo $cat_id;?>" class="form-control" required="">
        </div>
        
        <button class="btn btn-primary" name="update">Update Book</button>

      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>
</html>
<?php
  if(isset($_POST['update'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $query = "update BOOK set  TITLE = '$_POST[book_name]' ,AUTHOR = '$_POST[author_id]' ,GENRE = '$_POST[cat_id]' where ID = $_GET[bn]";
    $query_run = mysqli_query($connection,$query);
    header("location:viewbooks.php");
  }
?>