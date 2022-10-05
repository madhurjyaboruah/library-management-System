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

<body >
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
  <center><h3>ADD JOURNAL FORM</h3></center><br>
 <table align="center">
		<form action="AddJournalBackEnd.php" method="post">
    
  <tr><td><label for="ID">ID</label></td><br>
  <td><input type="text" id="ID" name="ID" placeholder="ID"></td></tr><br><br>

  <tr><td><label for="NAME">NAME</label></td><br>
  <td><input type="text" id="NAME" name="NAME" placeholder="NAME"></td></tr><br><br>

  <tr><td><label for="Subject">Subject:</label></td><br>
  <td><input type="text" id="Subject" name="Subject" placeholder= "Subject"></td></tr><br><br>
  <tr><td><label for="Publisher">PUBLISHER</label></td><br>
  <td><input type="text" id="Publisher" name="Publisher" placeholder="Publisher"></td></tr><br><br>


  <tr><td><label for="Year">Year of Publishing:</label></td>
     

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


  <tr><td><input type="submit" value="submit"></td></tr><br>
  
</form>
</table>

</body>
</html>