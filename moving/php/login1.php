<?php
{

  $user=$_POST['username'];
  $pass=$_POST['password'];
  $db = 'mydb';
  echo "hi";
  $conn = new mysqli('localhost', $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

  }
  $sql = "SELECT `Employee ID`, SSN, DOB, `Employment Date`, Fname, Lname, Title FROM Employee";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    //output name
    echo "<thead><tr><th>Employee ID</th><th>Last Name</th><th>First Name</th><th>SSN</th><th>DOB</th><th>Employment Date</th><th>Title</th></thead>";
    while($row = $result->fetch_assoc()) {

      echo "<tr><td>" . $row["Employee ID"] . "</td><td>" . $row["Lname"] . "</td><td> " . $row["Fname"] . "</td><td>" . $row["SSN"] . "</td><td>" . $row["DOB"] ."</td><td>" .$row["Employment Date"] ."</td><td>" .$row["Title"] . "</td></tr>";

    }
  } else {
      echo "0 results";
  }

  }
?>
