<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
if( isset( $_POST['licence_no'] ) )
{

$no = $_POST['licence_no'];

$host = 'localhost';
$user = 'egraminc_dbadmin';
$pass = 'admin#1234';
$db = 'egraminc_municipal';

mysqli_connect($host, $user, $pass, $db);

$selectdata = "SELECT * FROM applytrade WHERE licenceno='$no' AND payment=0";

$query = mysqli_query($link,$selectdata);

while($row = mysqli_fetch_array($query))
{
 echo "<b>Name :</b> <input type=".text." name=".p_applicantname." value=".$row['p_applicantname']."><br>";
 echo "<b>Trade Name :</b> <input type=".text." name=".b_tradename." value=".$row['b_tradename']."><br>";
 echo "<b>Cost :</b> <input type=".text." name=".b_cost." value=".$row['b_cost']."><br>";
 echo "<b>Trade Type :</b> <input type=".text." name=".b_tradetype." value=".$row['b_tradetype']."><br>";
 echo "<b>R-id :</b> <input type=".text." name=".rid." value=".$row['id']."><br>";
}

}
?>