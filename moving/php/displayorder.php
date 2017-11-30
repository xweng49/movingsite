<div class="container">
  <h2 align=center> Order List </h2>
    <div class = "table-responsive">
    <table class="table">

<?php


$sql = "SELECT * FROM OrderList";
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
/*  while ($row=mysqli_fetch_row($result))
    {
      echo "<tr>";
      foreach($row as $rowinfo) {
        echo "<td>";
        printf("%s\n", $rowinfo);
        echo "</td>";
        $i++;
      }
      echo "</tr>";
    }*/

    if (isset($_POST['Edit']))
    {
      $orderid=$_POST['OrderID'];
    }

  while($row=mysqli_fetch_array($result))
  {
    if (isset($_POST['Edit']) AND $orderid==$row['OrderID'])
    {
      echo "<form method = \"post\" action=\"\">";
      echo "<input type = \"hidden\" name=\"lp\" value=\"$orderid\">";
      echo "<td><input  name=\"orderid\" placeholder=\"$row[OrderID]\" type=\"text\"></td>";
      echo "<td><input  name=\"orderdate\" placeholder=\"$row[OrderDate]\" type=\"text\"></td>";
      echo "<td><input  name=\"customerid\" placeholder=\"$row[CustomerID]\" type=\"text\"></td>";
      echo "<td><input  name=\"model\" placeholder=\"$row[MovingDate]\" type=\"text\"></td>";
      echo "<td><input  name=\"price\" placeholder=\"$row[Price]\" type=\"text\"></td>";
      echo "<td><input  name=\"assignedvehicle\" placeholder=\"$row[AssignedVehicle]\" type=\"text\"></td>";
      echo "<td><input  name=\"SubmitEdit\" type=\"Submit\" value=\"Submit\"></td>";
      echo "</form>";
    }
    else
    {
      echo "<tr>";
      echo "<td>$row[OrderID]</td>";
      echo "<td>$row[OrderDate]</td>";
      echo "<td>$row[CustomerID]</td>";
      echo "<td>$row[MovingDate]</td>";
      echo "<td>$row[Price]</td>";
      echo "<td>$row[AssignedVehicle]</td>";
      echo "<td>";
      echo "<div class=\"row\">";
      echo "<div class=\"col-sm-1\">";
      echo "<form method=\"post\" action=\"\">";
      echo "<input type=\"submit\" class=\"btn btn-info btn-xs\" name=\"Edit\" value=\"Edit\">";
      echo "<input type = \"hidden\" name=\"license\" value=\"$row[OrderID]\">";
      echo "</form>";
      echo "</div>";
      echo "<div class=\"col-sm-1\">";
      echo "<form method=\"post\" action=\"\">";
      echo "<input type=\"submit\" class=\"btn btn-danger btn-xs\" name=\"Delete\" value=\"Delete\">";
      echo "<input type = \"hidden\" name=\"license\" value=\"$row[OrderID]\">";
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
