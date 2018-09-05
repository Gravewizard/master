<?php
//$_SESSION["userId"] = "24";
session_start();// Starting Session
//echo $_SESSION['login_user'];
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
if(count($_POST)>0) {
$result = mysqli_query($link,"SELECT * from admin WHERE username='" . $_SESSION['login_user'] . "'");
$row=mysqli_fetch_array($result);
//echo $row["password"];
if(md5($_POST["currentPassword"]) == $row["password"]) {
mysqli_query($link,"UPDATE admin set password='" . md5($_POST["newPassword"]) . "' WHERE username='" . $_SESSION['login_user'] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
<html>
<head>
<title>Change Password</title>
 <meta charset="utf-8" />
        <title>Dhing MB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
		<script src="assets/js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="tools/particles.js"></script>
		<script>
			$(document).ready(function(){
				$("#navbar-frame").load("navbar.php");
			});
		</script>
<style type="text/css">
body{
background: #0e1d3a url(../images/bg.png) top center no-repeat;
font-family: Helvetica Neue, Helvetica, Arial;
color: #F5F3F3;
}
.sidebar-navigation:hover {
    overflow-y: hidden;
}
table tr {height: 50px;}
</style>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
</head>
    <body id="particles-js">

        <div id="page-wrapper">


            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <?php @include('header.php') ?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                	<div class="container-fluid" style="
height: 700px;
overflow: hidden;
overflow-y: scroll;">
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2"><h2>Change Password</h2></td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField" style="
    color: black;"/><span id="currentPassword"  class="required"></span>
</td>
</tr>

<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField" style="
    color: black;"/><span id="newPassword" class="required"></span></td>
</tr>

<tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField" style="
    color: black;"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit" style="color:black;"></td>
</tr>
</table>
</div>
</form>
</div></div></div></div>
</body></html>