<?php
include('php/login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}else if(isset($_SESSION['login_user1'])){
header("location: customeraccess.php");
}
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
<form action="" method="post">
  <div class="input-group col-xs-4">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="name" type="text" class="form-control" name="username" placeholder="User Name" required>
  </div>
  <div class="input-group col-xs-4" >
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
  <div>
  <input type="submit" name="submit" value="Login">
  <span><?php echo $error; ?></span>
  </div>
<form>
</div >

</html>
