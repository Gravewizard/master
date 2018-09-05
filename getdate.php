<?php
 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
 $i1=($_GET['get_option1']);
 $i2=($_GET['get_option2']);
 $source1 = $i1;
 $source2 = $i2;
 $date1 = new DateTime($source1);
 $date2 = new DateTime($source2);
 //echo $date->format('d.m.Y'); 
 //echo $date1->format('Y-m-d');
 //echo $date2->format('Y-m-d');
 $host = 'localhost';
 $user = 'egraminc_dbadmin';
 $pass = 'admin#1234';
 $db = 'egraminc_municipal'; 
 mysqli_connect($host, $user, $pass, $db);

?>
<div class="card-box">
<h4 class="m-t-0">All Payment Reports Of This Date</h4>
<div class="table-responsive">
 <table style="font-size: 10px;" class="table table-bordered">
 
 <?php    
 
 $find=mysqli_query($link,"select * from paytrade where dateofupload BETWEEN '$i1' and '$i2'");
   	echo "<tr>";
   	echo "<th>";
  	echo "<b>Receipt No.</b>";
  	echo "</th>";
  	echo "<th>";
  	echo "<b>Date</b>";
  	echo "</th>";
  	echo "<th>";
  	echo "<b>HR No.</b>";
  	echo "</th>";
  	echo "<th>";
  	echo "<b>Details</b>";
  	echo "</th>";
  	echo "<th>";
  	echo "<b>Financial Year</b>";
  	echo "</th>";
  	echo "<th>";
  	echo "<b>Amount</b>";
  	echo "</th>";
    echo "<th>";
    echo "<b>Fine</b>";
    echo "</th>";
    echo "<th>";
    echo "<b>Rebate</b>";
    echo "</th>";
    echo "<th>";
    echo "<b>Net Amount</b>";
    echo "</th>";
  	echo "<th>";
  	echo "<b>User</b>";
  	echo "</th>";
  	echo "</tr>";


// echo "<p>Hello</p>";
$qty= 0;

 while($row=mysqli_fetch_array($find))
 {
  	//echo $row['p_applicantname']."<br>";
  	echo "<tr>";
    if($row['id']>295){
  	  echo "<td>DMB/36/2017-18/0".($row['id']-295)."(New)</td>";
    }
    else{
      echo "<td>DMB/36/2017-18/0".$row['id']."</td>";
    }
  	echo "<td>".$row['dateofupload']."</td>";
    echo "<td> </td>";
    if($row['oldholdingno']!=NULL){echo "<td>Holding No(".$row['oldholdingno'].")</td>";}
    elseif ($row['b_tradetype']!=NULL) {
     echo "<td>".$row['b_tradetype']."</td>";
    }
    elseif ($row['bhetino']!=NULL) {
     echo "<td>Bheti No(".$row['bhetino'].")</td>";
    }
    elseif ($row['oldtrade']!=NULL) {
     echo "<td>Trade License(".$row['oldtrade'].")</td>";
    }
    elseif ($row['roomno']!=NULL) {
     echo "<td>Room No(".$row['roomno'].")</td>";
    }
    echo "<td>2016-2017<br/>2017-2018</td>";
    if($row['oldtrade']!=NULL){echo "<td>".$row['demand']."</td>";}
    elseif ($row['totalptax']!=NULL) {
      echo "<td>".$row['total']."</td>";
    }
    elseif ($row['totaldue']!=NULL) {
      if(($row['arrear'])==NULL)
      { $arrear= 0; } 
      else { $arrear= $row['arrear']; }
     echo "<td>".$arrear."<br/>".$row['totaldue']."</td>";
    }
    else {
    if(($row['arrear'])==NULL)
      { $arrear= 0; } 
    else { $arrear= $row['arrear']; }
     echo "<td>".$arrear."<br/>".$row['b_cost']."</td>";
    }
    if(($row['fine']!=NULL) || ($row['rebate']!=NULL)){
        echo "<td>".$row['fine']."</td>";
        echo "<td>".$row['rebate']."</td>";
    }
    else{
    echo "<td>".$row['fine']."</td>";
    echo "<td>".$row['rebate']."</td>";
    }
    
    if($row['totalptax']!=NULL) {
    echo "<td>".($row['total']+$row['fine']+$row['rebate'])."</td>";
    }
    else {
    echo "<td>".($row['b_cost']+$row['arrear']+$row['fine']+$row['rebate']+$row['totaldue'])."</td>";
    }
    echo "<td>".$row['nameuser']."</td>";
    echo "</tr>";
    $num = mysqli_fetch_assoc ($find);
    $totalarrear += $num['arrear']+$num['arrearptax']+$num['arrearltax'];
    $totaldemand += $num['demand']+$num['b_cost']+$num['demandptax']+$num['demandltax']+$num['totaldue'];
    $totalfine += $num['fine'];
    $totalrebate += $num['rebate'];
    $totalcost += $num['arrear']+$num['arrearptax']+$num['arrearltax']+$num['demand']+$num['b_cost']+$num['demandptax']+$num['demandltax']+$num['fine']+$num['rebate'];
    

}
?>
</table>
</div>
</div>
    <div class="column" style="padding-left: 20%;">
    <h4>Total Arrear (2016-2017) :-</h4>
    <h4>Total Demand (2017-2018) :-</h4>
    <h4>Total Fine :-</h4>
    <h4>Total Rebate :-</h4>
    <h4>Total Amount :-</h4>    
  </div>
  <div class="column">
    <h4>Rs. <?php echo $totalarrear; ?></h4>
    <h4>Rs. <?php echo $totaldemand; ?></h4>
    <h4>Rs. <?php echo $totalfine; ?></h4>
    <h4>Rs. <?php echo $totalrebate; ?></h4>
    <h4>Rs. <?php echo $totalcost; ?></h4>
  </div>