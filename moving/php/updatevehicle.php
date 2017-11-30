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
  if ($_POST['license'] == '' || trim($_POST['license'] == ''))
  {$license = $_POST{'lp'};}
  else
  {$license = $_POST['license'];}
  if ($_POST['insurance'] == '' || trim($_POST['insurance'] == ''))
  {$insurance = $_POST{'in'};}
  else
  {$insurance = $_POST['insurance'];}
  if ($_POST['vin'] == '' || trim($_POST['vin'] == ''))
  {$vin = $_POST{'vi'};}
  else
  {$vin = $_POST['vin'];}
  if ($_POST['model'] == '' || trim($_POST['model'] == ''))
  {$model = $_POST{'mo'};}
  else
  {$model = $_POST['model'];}
  if ($_POST['make'] == '' || trim($_POST['make'] == ''))
  {$make = $_POST{'ma'};}
  else
  {$make = $_POST['make'];}
  $sql = "UPDATE Vehicle SET LicensePlate = '$license', Insurance = '$insurance', VIN = '$vin', Model = '$model', Make='$make' WHERE LicensePlate = '$initlicense'";
  $result = mysqli_query($connection, $sql);
}


?>
