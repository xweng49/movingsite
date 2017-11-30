
<?php include 'php/session.php';?>
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
<body>
<div id="profile">
  <div class="container">
    <h2 align=center> Employee </h2>
      <div class = "table-responsive">
      <table class="table">

  <?php


  $sql = "SELECT * FROM Employee WHERE EmployeeID IN (SELECT EmployeeID FROM Users WHERE username='$login_session')";
  $name_sql = "SELECT Fname, Lname FROM Employee WHERE EmployeeID IN (SELECT EmployeeID FROM Users WHERE username='$login_session')";
  echo "<thead><tr>";
  if ($result=mysqli_query($connection, $sql))
  {
    while($fieldinfo=mysqli_fetch_field($result))
    {
      echo "<th>";
      printf("%s\n", $fieldinfo->name);
      echo "</th>";

    }
    echo "</tr></thread>";
    $i=0;
    while ($row=mysqli_fetch_row($result))
      {
        echo "<tr>";
        foreach($row as $rowinfo) {
          echo "<td>";
          printf("%s\n", $rowinfo);
          echo "</td>";
          $i++;
        }
        echo "</tr>";
      }
  }

  if ($result=mysqli_query($connection, $sql))
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<h1>Hello " . $row["Fname"]. " ". $row["Lname"]. "</h1><br>";
      }
  }
  ?>
    </table>
    </div>
  </div>

</div>
</body>
</html>
