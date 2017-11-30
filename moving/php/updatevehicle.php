<?php

if (isset($_POST['Add']))
{
  $license = $_POST['license'];
  $insurance = $_POST['insurance'];
  $vin = $_POST['vin'];
  $model = $_POST['model'];
  $make = $_POST['make'];
  $sql = "INSERT INTO Vehicle(LicensePlate, Insurance, VIN, Model, Make) VALUES ('$license','$insurance','$vin','$model','$make')";
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
