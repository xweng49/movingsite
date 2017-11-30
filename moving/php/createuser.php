<?php

if (isset($_POST['submit']))
{
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "mydb");
  $firstname=$_POST['newfirstname'];
  $lastname=$_POST['newlastname'];
  $address=$_POST['newaddress'];
  $phone=$_POST['newphone'];
  $username=$_POST['newusername'];
  $password=$_POST['newpassword'];
  $customerid=0;
  $sql= "SELECT CustomerID FROM Customer WHERE CustomerID = 'C0$customerid'";
  $result=mysqli_query($connection, $sql);
  while(mysqli_num_rows($result) > 0)
  {
    $customerid += 1;
    $sql= "SELECT CustomerID FROM Customer WHERE CustomerID = 'C0$customerid'";
    $result=mysqli_query($connection, $sql);
  }
  $sql = "INSERT INTO Customer(CustomerID, FName, LName, Address, PhoneNumber) VALUES ('C0$customerid','$firstname','$lastname','$address','$phone')";
  $result = mysqli_query($connection, $sql);

  $sql = "INSERT INTO C_Users(username, password, CustomerID) VALUES ('$username','$password','C0$customerid')";
  $result = mysqli_query($connection, $sql);

}


?>
