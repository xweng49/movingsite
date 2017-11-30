<?php

if (isset($_POST['Add']))
{
  $orderid = $_POST['OrderID'];
  $orderdate = $_POST['OrderDate'];
  $customerid = $_POST['CustomerID'];
  $movingdate = $_POST['MovingDate'];
  $price = $_POST['Price'];
  $assignedvehicle = $_POST['AssignedVehicle'];
  $sql = "INSERT INTO OrderList(OrderID, OrderDate, CustomerID, MovingDate, Price, AssignedVehicle) VALUES ('$orderid','$orderdate','$customerid','$MovingDate','$Price', '$AssignedVehicle')";
  $result = mysqli_query($connection, $sql);
  echo "Successfully Added to Table";
}
if (isset($_POST['Delete']))
{
  $license=$_POST['license'];
  $sql = "DELETE FROM Vehicle WHERE LicensePlate = '$license'";
  $result = mysqli_query($connection, $sql);
}
if (isset($_POST['SubmitEdit']))
{
  $initlicense = $_POST['lp'];
  $license = $_POST['license'];
  $insurance = $_POST['insurance'];
  $vin = $_POST['vin'];
  $model = $_POST['model'];
  $make = $_POST['make'];
  $sql = "UPDATE Vehicle SET LicensePlate = '$license', Insurance = '$insurance', VIN = '$vin', Model = '$model', Make='$make' WHERE LicensePlate = '$initlicense'";
  $result = mysqli_query($connection, $sql);
}


?>
