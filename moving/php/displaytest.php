<div class="container">
  <h2 align=center> Employee </h2>
    <div class = "table-responsive">
    <table class="table">

<?php
$user = 'root';
$pass = '';
$db = 'mydb';

$conn = new mysqli('localhost', $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}


$sql = "SELECT * FROM Employee";
echo "<thead><tr>";
if ($result=mysqli_query($conn, $sql))
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
