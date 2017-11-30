

  </table>
  </div>
</div>

<div class="container">

<?php

  $sql = "SELECT * FROM Customer";

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
    echo "<td><input size=\"15\" name=\"customerid\" placeholder=\"Enter CustomerID #\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"fname\" placeholder=\"Enter First Name\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"lname\" placeholder=\"Enter Last Name\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"address\" placeholder=\"Enter Address\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"phone\" placeholder=\"Enter Phone Number\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"balance\" placeholder=\"Enter New Balance\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"search\" type=\"Submit\" value=\"Search\"></td>";
  }
  echo "</table>";
  echo "</div>";
  echo "</form>";

?>
</div>

<div class="container">
  <h2 align=center> Customer </h2>
    <div class = "table-responsive">
    <table class="table">

<?php
$sql = "SELECT * FROM Customer";
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
  if (isset($_POST['Edit']))
  {
    $cid=$_POST['customerid'];
  }

    while ($row=mysqli_fetch_array($result))
    {
      if (isset($_POST['Edit']) AND $cid==$row['CustomerID'])
      {
        echo "<form method = \"post\">";
        echo "<input type = \"hidden\" name=\"ci\" value=\"$row[CustomerID]\">";
        echo "<td><input size=\"15\" name=\"customerid\" placeholder=\"$row[CustomerID]\" type=\"text\"></td>";
        echo "<input type = \"hidden\" name=\"fn\" value=\"$row[Fname]\">";
        echo "<td><input size=\"15\" name=\"fname\" placeholder=\"$row[Fname]\" type=\"text\"></td>";
        echo "<input type = \"hidden\" name=\"ln\" value=\"$row[Lname]\">";
        echo "<td><input size=\"15\" name=\"lname\" placeholder=\"$row[Lname]\" type=\"text\"></td>";
        echo "<input type = \"hidden\" name=\"ad\" value=\"$row[Address]\">";
        echo "<td><input size=\"15\" name=\"address\" placeholder=\"$row[Address]\" type=\"text\"></td>";
        echo "<input type = \"hidden\" name=\"ph\" value=\"$row[PhoneNumber]\">";
        echo "<td><input size=\"15\" name=\"phone\" placeholder=\"$row[PhoneNumber]\" type=\"text\"></td>";
        echo "<input type = \"hidden\" name=\"ba\" value=\"$row[Balance]\">";
        echo "<td><input size=\"15\" name=\"balance\" placeholder=\"$row[Balance]\" type=\"text\"></td>";

        echo "<td><input name=\"SubmitEdit\" type=\"Submit\" value=\"Submit\"></td>";
        echo "</form>";
      }
      else
      {
        echo "<tr>";
        echo "<td>$row[CustomerID]</td>";
        echo "<td>$row[Fname]</td>";
        echo "<td>$row[Lname]</td>";
        echo "<td>$row[Address]</td>";
        echo "<td>$row[PhoneNumber]</td>";
        echo "<td>$row[Balance]</td>";
        echo "<td>";
        echo "<div class=\"row\">";
        echo "<div class=\"col-sm\">";
        echo "<form method=\"post\" action=\"\">";
        echo "<input type=\"submit\" class=\"btn btn-info btn\" name=\"Edit\" value=\"Edit\">";
        echo "<input type = \"hidden\" name=\"customerid\" value=\"$row[CustomerID]\">";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"col-sm\">";
        echo "<form method=\"post\" action=\"\">";
        echo "<input type=\"submit\" class=\"btn btn-danger btn\" name=\"Delete\" value=\"Delete\">";
        echo "<input type = \"hidden\" name=\"customerid\" value=\"$row[CustomerID]\">";
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
      <input type="submit" class="btn btn-success" name="submit" value="Add New Customer">
  </form></center>

<?php
if(isset($_POST['submit']))
{
  $sql = "SELECT * FROM Customer";

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
    echo "<td><input size=\"15\" name=\"customerid\" placeholder=\"Enter CustomerID #\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"fname\" placeholder=\"Enter First Name\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"lname\" placeholder=\"Enter Last Name\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"address\" placeholder=\"Enter Address\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"phone\" placeholder=\"Enter Phone Number\" type=\"text\"></td>";
    echo "<td><input size=\"15\" name=\"balance\" placeholder=\"Enter New Balance\" type=\"text\"></td>";
    echo "<td><input  name=\"Add\" type=\"Submit\" value=\"Submit\"></td>";
  }
  echo "</table>";
  echo "</div>";
  echo "</form>";
}
?>
</div>
