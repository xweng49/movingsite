
<?php include 'php/session2.php';?>
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


<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='#'>Group 15 Moving Company</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li id = '.nav a'><a href= 'index.php'><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
      <li id = '.nav a'><a href= 'logout.php'><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>

    </ul>
  </div>
</nav>
</body>

<div class="jumbotron text-center">
  <h1>Moving Company</h1>
  <p>We specialize in moving and moving related jobs</p>
</div>

<script type="text/javascript">
$(function(){
  $('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
  $('.nav a').click(function(){
    $(this).parent().addClass('active').siblings().removeClass('active')
  })
})
</script>
</body>



<body>
<div id="customeraccess">

<div class="container">
  <h2 align=center> Customer </h2>
    <div class = "table-responsive">
    <table class="table">

<?php



$sql = "SELECT * FROM Customer WHERE CustomerID IN (SELECT CustomerID FROM C_Users WHERE username='$login_session')";
$name_sql = "SELECT Fname, Lname FROM Customer WHERE CustomerID IN (SELECT CustomerID FROM C_Users WHERE username='$login_session')";
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

$sql = "SELECT * FROM OrderList WHERE CustomerID IN (SELECT CustomerID FROM C_Users WHERE username='$login_session')";
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


?>
  </table>
  </div>
</div>



</div>
</body>
</html>
