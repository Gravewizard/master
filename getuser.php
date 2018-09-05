<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
 $i=($_GET['get_option']);
 $host = 'localhost';
 $user = 'egraminc_dbadmin';
 $pass = 'admin#1234';
 $db = 'egraminc_municipal'; 
 mysqli_connect($host, $user, $pass, $db);

 //echo $i;
 $find=mysqli_query($link,"select * from master where holder like '$i'");
 while($row=mysqli_fetch_array($find))
 {
  echo "<option>".$row['bookno']."</option>";
 }
 exit;
?>