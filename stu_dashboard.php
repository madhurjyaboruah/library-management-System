<?php  require_once 'db_connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Dashboard</title>
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
      <font style="color: white"><span><strong>Welcome : <?php echo $_GET['Roll_Number'];  ?>   </strong></span></font>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<br><br>
<?php   
      require_once 'db_connection.php';
         $ROLL = $_GET['Roll_Number'];

        $find_books = "SELECT * FROM BOOK WHERE ISSUED_BY = '$ROLL'";
        $return = mysqli_query($conn, $find_books);
        if (mysqli_num_rows($return)>0) {
          echo "<br><br><center><h4>BOOKS ISSUED BY ".$ROLL." ARE:</h4></center> ";

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
            echo "<tr><td>".$row["ID"]." </td><td>".$row["TITLE"]."</td><td>".$row["AUTHOR"]."</td>  ";
            
          }
          echo "</tr></table>";
          echo "<br>";
          echo '<center><form action = "ReIssueBackEnd.php" method="post">
              <table >
                <tr>
                  <td>
                    <label for=ID>BOOK ID: </label>
                  </td>
                  <td>
                    <input type="text" id="ID" name="ID">
                  </td>
                  <input type="hidden" id="ROLL" name ="ROLL" value='.$ROLL.'>
                  <input type="hidden" id="FORM" name ="FORM" value=2>
                  <td>
                    <input type="submit" value="Re-Issue">
                  </td>
                </tr>
                
              </table>  
              <input type="hidden" id="ROLL" name ="ROLL" value='.$ROLL.'>
            </form></center>';

        }else{
          echo "NO BOOKS HAS BEEN ISSUED BY ".$ROLL."";
        }
      
    ?>
    <?php
    if (isset($_GET['message'])) {
        echo $_GET['message'];
    }
  ?>
  </table>
</body>
</html>
