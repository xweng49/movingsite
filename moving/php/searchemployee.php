<div class="container">
  <h1 align=center>Search</h1>
  <center><form method="post" action="" id="searchform">
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

  //-query  the database table
  $sql="SELECT  * FROM Employee WHERE Fname LIKE '%" . $name .  "%' OR LName LIKE '%" . $name ."%'";
  echo "<thead><tr>";
  echo "$sql";
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
    while ($row=mysqli_fetch_row($result))
      {
        echo "<tr>";
        foreach($row as $rowinfo) {
          echo "<td>";
          printf("%s\n", $rowinfo);
          echo "</td>";
          $i++;
        }
        echo "</tr>";
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
