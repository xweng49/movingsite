<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "mydb");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user1'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select username from C_Users where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
