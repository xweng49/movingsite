<!DOCTYPE html>
<html lang="en">
<head>
    <title>Group 15 Moving Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>$(function(){$("#layout").load("layout.html");});
  </script>

</head>
<div id="layout">
</div>
<div class = "container">
<form action="" method="post">
  <div class="input-group col-xs-4">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="name" type="text" class="form-control" name="username" placeholder="User Name" required>
  </div>
  <div class="input-group col-xs-4" >
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
  <div>
  <input type="submit" name="submit" value="Login">
  </div>
<form>
</div >

<?php
{

  $user=$_POST['username'];
  $pass=$_POST['password'];
  $db = 'mydb';
  $conn = new mysqli('localhost', $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

  }
  $sql = "SELECT `Employee ID`, SSN, DOB, `Employment Date`, Fname, Lname, Title FROM Employee";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    //output name
    echo "<thead><tr><th>Employee ID</th><th>Last Name</th><th>First Name</th><th>SSN</th><th>DOB</th><th>Employment Date</th><th>Title</th></thead>";
    while($row = $result->fetch_assoc()) {

      echo "<tr><td>" . $row["Employee ID"] . "</td><td>" . $row["Lname"] . "</td><td> " . $row["Fname"] . "</td><td>" . $row["SSN"] . "</td><td>" . $row["DOB"] ."</td><td>" .$row["Employment Date"] ."</td><td>" .$row["Title"] . "</td></tr>";

    }
  } else {
      echo "0 results";
  }

  }
?>


</html>
