<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library Management System</title>
   
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
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

  <center><h3>ADD MAGAZINE FORM</h3></center>
<form action="AddMagazineBackEnd.php" method="post">
  <table align="center">
  <tr><td><label for="text">ID</label></td><br>
  <td><input type="text" id="ID" name="ID" placeholder="ID"></td></tr><br><br>

  <tr><td><label for="Magazine_Name">MAGAZINE NAME:</label></td><br>
  <td><input type="text" id="Magazine_Name" name="Magazine_Name" placeholder= "Magazine Name"></td></tr><br><br>
  <tr><td><label for="text">PUBLISHER</label></td><br>
  <td><input type="text" id="Publisher" name="Publisher" placeholder="Publisher"></td></tr><br><br>

  <tr><td><label for="Edition">Edition:</label></td>
      <td><select name="Month" id="Month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select></td>

      <td><select name="Year" id="Year">
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
      </select></td>
      </tr><br>


  <tr><td><input type="submit" value="Add Magazine"></td></tr><br>
  </td>



  </table>
</form>
</body>
</html>