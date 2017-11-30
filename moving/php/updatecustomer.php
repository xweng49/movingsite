<?php

if (isset($_POST['Add']))
{
  $customerid = $_POST['customerid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $balance = $_POST['balance'];
  $sql = "INSERT INTO Customer(CustomerID, Fname, Lname, Address, PhoneNumber, Balance) VALUES ('$customerid','$fname','$lname','$address','$phone','$balance')";
  $result = mysqli_query($connection, $sql);
  if($result){echo "Successful";}
  else{echo "Failure";}
}
if (isset($_POST['Delete']))
{
  $customerid=$_POST['customerid'];
  $sql = "DELETE FROM Customer WHERE CustomerID = '$customerid'";
  $result = mysqli_query($connection, $sql);
}
if (isset($_POST['SubmitEdit']))
{
  $initcid = $_POST['ci'];
  if ($_POST['customerid'] == '' || trim($_POST['customerid'] == ''))
  {$customerid = $_POST{'ci'};}
  else
  {$customerid = $_POST['customerid'];}
  if ($_POST['fname'] == '' || trim($_POST['fname'] == ''))
  {$fname = $_POST{'fn'};}
  else
  {$fname = $_POST['fname'];}
  if ($_POST['lname'] == '' || trim($_POST['lname'] == ''))
  {$lname = $_POST{'ln'};}
  else
  {$lname = $_POST['lname'];}
  if ($_POST['address'] == '' || trim($_POST['address'] == ''))
  {$address = $_POST{'ad'};}
  else
  {$address = $_POST['address'];}
  if ($_POST['phone'] == '' || trim($_POST['phone'] == ''))
  {$phone = $_POST{'ph'};}
  else
  {$phone = $_POST['phone'];}
  if ($_POST['balance'] == '' || trim($_POST['balance'] == ''))
  {$balance = $_POST{'ba'};}
  else
  {$balance = $_POST['balance'];}
  $sql = "UPDATE Customer SET CustomerID = '$customerid', Fname = '$fname', Lname = '$lname', Address = '$address', PhoneNumber='$phone', Balance=$balance WHERE CustomerID = '$initcid'";
  $result = mysqli_query($connection, $sql);
}


if (isset($_POST['search']))
{
  $customerid = $_POST['customerid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $balance = $_POST['balance'];

  $sql = "SELECT * FROM Customer WHERE CustomerID LIKE '%$customerid%' AND Fname LIKE '%$fname%' AND Lname LIKE '%$lname%' AND Address LIKE '%$address%' AND PhoneNumber LIKE '%$phone%' AND Balance LIKE'%$balance%'";
  if ($result=mysqli_query($connection, $sql))
  {
    echo "<div class=\"container\">
        <h2 align=center> Search Results </h2>
        <div class = \"table-responsive\">
        <table class=\"table\">";
    while ($row=mysqli_fetch_array($result))
    {
      while($fieldinfo=mysqli_fetch_field($result))
      {
        echo "<th>";
        printf("%s\n", $fieldinfo->name);
        echo "</th>";

      }
      echo "<tr>";
      echo "<td>$row[CustomerID]</td>";
      echo "<td>$row[Fname]</td>";
      echo "<td>$row[Lname]</td>";
      echo "<td>$row[Address]</td>";
      echo "<td>$row[PhoneNumber]</td>";
      echo "<td>$row[Balance]</td>";
      echo "<td>";
      echo "</td>";
      echo "</tr>";

    }
    echo "</div>
    </div>
    </table>";
  }
}


?>
