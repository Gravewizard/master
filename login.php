<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is empty";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=md5($_POST['password']);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($link,$username);
$password = mysqli_real_escape_string($link,$password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($link,"select * from admin where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
} else {
$error = "Your Username or Password is invalid";
}
mysqli_close($link); // Closing Connection
}
}
?>