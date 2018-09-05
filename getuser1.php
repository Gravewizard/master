<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
 $i=intval($_GET['get_option1']);
 $host = 'localhost';
 $user = 'egraminc_dbadmin';
 $pass = 'admin#1234';
 $db = 'egraminc_municipal'; 
 mysqli_connect($host, $user, $pass, $db);


 $select=mysqli_query($link,"select * from master where bookno='$i'");
  $row=mysqli_fetch_array($select);
  foreach (range($row['snofrom'], $row['snoto']) as $number) {
  	 // $select1=mysqli_query($link,"select * from offpayment");
  	  //while($row1=mysqli_fetch_array($select1)){
  	  //if($row1['sno']==$number){
  	  	//echo "<option disabled>".$number."</option>";
  	  //}
  	  //else{
      echo "<option>".$number."</option>";
  } 
 exit;
?>