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
   <center><h1>Total Regsitered Book List</h1></center>
   <br><br>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6"><form action = " " method="post">
    <table>
      <tr>
        <td>
          <label for=ROLL_NUMBER>ROll NUMBER: </label>
        </td>
        <td>
          <input type="text" id="ROLL_NUMBER" name="ROLL_NUMBER">
        </td>
        <td>
          <input type="submit" value="Search">
        </td>
      </tr>
      
    </table>  
  </form></div>
    </div>
   


  <br>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>BookID</th>
            <th>Book Name</th>
            <th>Author</th>
          </tr>
        </thead>
    

  <?php
      require_once 'db_connection.php';

      if ($_POST) {
        $ROLL = $_POST['ROLL_NUMBER'];


        $find_books = "SELECT * FROM BOOK WHERE ISSUED_BY = '$ROLL'";
        $return = mysqli_query($conn, $find_books);

        if (mysqli_num_rows($return)>0) {
          echo "<br><center><h4>BOOKS ISSUED BY ".$ROLL." ARE: </h4></center>";
          
          while ($row = $return -> fetch_assoc()) {
            echo "<tr><td>".$row["ID"]." </td><td>".$row["TITLE"]."</td><td>".$row["AUTHOR"]."</td>  </tr>";
          }
          
          echo '<center><form action = "returnbook1.php" method="post">
              <table>
                <tr>
                  <td>
                    <label for=ID>BOOK ID: </label>
                  </td>
                  <td>
                    <input type="text" id="ID" name="ID">
                  </td>
                  <input type="hidden" id="ROLL"  name ="ROLL" value='.$ROLL.'>
                  <td>
                    <input type="submit" value="Return">
                  </td>
                </tr>
                
              </table>  

              <input type="hidden" id="ROLL" name ="ROLL" value='.$ROLL.'>
            </form>
            </center>';

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
  <a href="dashboard22.php" class="btn btn-primary btn-md">Back</a>
</body>
</html>