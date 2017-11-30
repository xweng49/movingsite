<?php
include('php/createuser.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Group 15 Moving Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='#'>Group 15 Moving Company</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li id = '.nav a'><a href= 'signup.php'><span class="glyphicon glyphicon-save"></span>Sign Up</a></li>
      <li id = '.nav a'><a href= 'index.php'><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
      <li id = '.nav a'><a href= 'logout.php'><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>


    </ul>
  </div>
</nav>
</body>

<div class="jumbotron text-center">
  <h1>Moving Company</h1>
  <p>We specialize in moving and moving related jobs</p>
</div>

<script type="text/javascript">
$(function(){
  $('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
  $('.nav a').click(function(){
    $(this).parent().addClass('active').siblings().removeClass('active')
  })
})
</script>
</body>
<div class = "container">
<form class = "form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for=usr>First Name: </label>
    <div class="col-sm-6">
    <input id="newfname" type="text" class="form-control" name="newfirstname" placeholder="Enter Your First Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for=usr>Last Name: </label>
    <div class="col-sm-6">
    <input id="newlname" type="text" class="form-control" name="newlastname" placeholder="Enter Your Last Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for=usr>Enter Your Address: </label>
    <div class="col-sm-6">
    <input id="newadd" type="text" class="form-control" name="newaddress" placeholder="Enter Your Address" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for=usr>Enter Your Phone Number: </label>
    <div class="col-sm-6">
    <input id="newphone" type="text" onkeypress='return event.which >= 48 && event.which <= 57 || event.which == 8 || event.which == 9' class="form-control" name="newphone" placeholder="Enter Your Phone Number" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for=usr>Create Login Name: </label>
    <div class="col-sm-6">
    <input id="newuname" type="text" class="form-control" name="newusername" placeholder="Create Your Login Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for=usr>Create Password: </label>
    <div class="col-sm-6">
    <input id="newpass" type="text" class="form-control" name="newpassword" placeholder="Create Your Password" required>
    </div>
  </div>

  <div class="container">
  <div class = "col-md-8 col-md-offset-2">
  <input type="submit" name="submit" value="Submit">
  </div>
  </div>
<form>
</div>

</html>
