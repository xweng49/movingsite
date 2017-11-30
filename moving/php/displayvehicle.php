<div class="container">
  <h2 align=center> Vehicle </h2>
    <div class = "table-responsive">
    <table class="table">

<?php



$sql = "SELECT * FROM Vehicle";
echo "<thead><tr>";
if ($result=mysqli_query($connection, $sql))
{
  while($fieldinfo=mysqli_fetch_field($result))
  {
    echo "<th>";
    printf("%s\n", $fieldinfo->name);
    echo "</th>";
  }
  echo "<th>Update</th>";
  echo "</tr></thread>";
  $i=0;

if (isset($_POST['Edit']))
{
  $license=$_POST['license'];
}

  while ($row=mysqli_fetch_array($result))
  {
    if (isset($_POST['Edit']) AND $license==$row['LicensePlate'])
    {
      echo "<form name= \"editform\" method = \"post\" action=\"\">";
      echo "<input type = \"hidden\" name=\"lp\" value=\"$license\">";
      echo "<td><input size=\"15\" name=\"license\" placeholder=\"$row[LicensePlate]\" type=\"text\"></td>";
      echo "<input type = \"hidden\" name=\"in\" value=\"$row[Insurance]\">";
      echo "<td><input size=\"15\" name=\"insurance\" placeholder=\"$row[Insurance]\" type=\"text\"></td>";
      echo "<input type = \"hidden\" name=\"vi\" value=\"$row[VIN]\">";
      echo "<td><input size=\"15\" name=\"vin\" placeholder=\"$row[VIN]\" type=\"text\"></td>";
      echo "<input type = \"hidden\" name=\"mo\" value=\"$row[Model]\">";
      echo "<td><input size=\"15\" name=\"model\" placeholder=\"$row[Model]\" type=\"text\"></td>";
      echo "<input type = \"hidden\" name=\"ma\" value=\"$row[Make]\">";
      echo "<td><input size=\"15\" name=\"make\" placeholder=\"$row[Make]\" type=\"text\"></td>";

      echo "<td><input  name=\"SubmitEdit\" type=\"Submit\" value=\"Submit\"></td>";
      echo "</form>";
    }
    else
    {
      echo "<tr>";
      echo "<td>$row[LicensePlate]</td>";
      echo "<td>$row[Insurance]</td>";
      echo "<td>$row[VIN]</td>";
      echo "<td>$row[Model]</td>";
      echo "<td>$row[Make]</td>";
      echo "<td>";
      echo "<div class=\"row\">";
      echo "<div class=\"col-sm\">";
      echo "<form method=\"post\" action=\"\">";
      echo "<input type=\"submit\" class=\"btn btn-info btn\" name=\"Edit\" value=\"Edit\">";
      echo "<input type = \"hidden\" name=\"license\" value=\"$row[LicensePlate]\">";
      echo "</form>";
      echo "</div>";
      echo "<div class=\"col-sm\">";
      echo "<form method=\"post\" action=\"\">";
      echo "<input type=\"submit\" class=\"btn btn-danger btn\" name=\"Delete\" value=\"Delete\">";
      echo "<input type = \"hidden\" name=\"license\" value=\"$row[LicensePlate]\">";
      echo "</form>";
      echo "</div>";
      echo "</div>";
      echo "</td>";
      echo "</tr>";
    }
  }
}

?>


  </table>
  </div>
</div>

<div class="container">
  <center><form method="post" action="">
      <input type="submit" class="btn btn-success" name="submit" value="Add New Vehicle">
  </form></center>

<?php
if(isset($_POST['submit']))
{
  $sql = "SELECT * FROM Vehicle";

  echo "<form method = \"post\" action=\"\">";
  echo "<div class = \"table-responsive\">";
  echo "<table class=\"table\">";
  echo "<thead><tr>";
  if ($result=mysqli_query($connection, $sql))
  {
    while($fieldinfo=mysqli_fetch_field($result))
    {
      echo "<th>";
      printf("%s\n", $fieldinfo->name);
      echo "</th>";
    }
    echo "<th>Button</th>";
    echo "</tr></thead>";
    echo "<td><input  name=\"license\" placeholder=\"Enter License Plate #\" type=\"text\"></td>";
    echo "<td><input  name=\"insurance\" placeholder=\"Enter Insurance\" type=\"text\"></td>";
    echo "<td><input  name=\"vin\" placeholder=\"Enter VIN\" type=\"text\"></td>";
    echo "<td><input  name=\"model\" placeholder=\"Enter Model\" type=\"text\"></td>";
    echo "<td><input  name=\"make\" placeholder=\"Enter Make\" type=\"text\"></td>";
    echo "<td><input  name=\"Add\" type=\"Submit\" value=\"Submit\"></td>";
  }
  echo "</table>";
  echo "</div>";
  echo "</form>";
}
?>
</div>
