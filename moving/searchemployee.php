<div class="container">
  <h1 align=center>Search</h1>
  <center><form method="post" action="searchpage.php?" id="searchform">
      <input type="text" name="name">
      <input type="submit" name="submit" value="Search">
  </form></center>
</div>

<div class="container">
  <h2 align=center> Search Result </h2>
  <div class = "table-responsive">
    <table class="table">
<?php
  if(isset($_POST['submit'])) {

  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $user = 'root';
  $pass = '';
  $db = 'mydb';

  $conn = new mysqli('localhost', $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

  }
  //-query  the database table
  $sql="SELECT  `Employee ID`, Lname, Fname, SSN, DOB, `Employment Date`, Title FROM Employee WHERE Fname LIKE '%" . $name .  "%' OR LName LIKE '%" . $name ."%'";
  //-run  the query against the mysql query function
  $result=$conn->query($sql);
  //-create  while loop and loop through result set
  if ($result->num_rows > 0) {
    //output name
    echo "<thead><tr><th>Employee ID</th><th>Last Name</th><th>First Name</th><th>SSN</th><th>DOB</th><th>Employment Date</th><th>Title</th></tr></thead>";
    while($row = $result->fetch_assoc()) {

      echo "<tr><td>" . $row["Employee ID"] . "</td><td>" . $row["Lname"] . "</td><td> " . $row["Fname"] . "</td><td>" . $row["SSN"] . "</td><td>" . $row["DOB"] ."</td><td>" .$row["Employment Date"] ."</td><td>" .$row["Title"] . "</td></tr>";

    }
  } else {
      echo "0 results";
  }
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }

  }
?>
    </table>
  </div>
</div>
