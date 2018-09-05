<?php
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */
   session_start();// Starting Session
   include('session.php');
   $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

   $id=intval($_GET['id']);
   if($link === false){
		 die("ERROR: Could not connect. " . mysqli_connect_error());
         	 }
 define ("MAX_SIZE","4000");
 $errors=0;

 if($_POST)
 {
 $select=mysqli_query($link,"SELECT COUNT(*) FROM  paytrade");
 $row=mysqli_fetch_array($select);
 $total = $row[0];
 //echo "Total rows: " . $total;
 $s=$total+1;	

$select1=mysqli_query($link,"SELECT COUNT(*) FROM  roommonthly");
 $row1=mysqli_fetch_array($select1);
 $total1 = $row1[0];
 //echo "Total rows: " . $total;
 $s1=$total1+1;   

 $rid = mysqli_real_escape_string($link, $_POST['rid']);
 $o_ownername = mysqli_real_escape_string($link, $_POST['p_applicantname']);
 $o_ownerfathername = mysqli_real_escape_string($link, $_POST['p_fathersname']);
 $o_ownerphone = mysqli_real_escape_string($link, $_POST['p_mobile']);
 $r_roomno = mysqli_real_escape_string($link, $_POST['roomno']);
 $arrearupto = mysqli_real_escape_string($link, $_POST['arrearupto']);
 $demandupto = mysqli_real_escape_string($link, $_POST['demand']);
 $paidamount= mysqli_real_escape_string($link, $_POST['paidamount']);
 $dueamount= mysqli_real_escape_string($link, $_POST['dueamount']);
 $payableamount= mysqli_real_escape_string($link, $_POST['payableamount']);
 $amount = mysqli_real_escape_string($link, $_POST['amount']);
 $month = mysqli_real_escape_string($link, (implode(',', $_POST['month']))); 
 $dueamount = mysqli_real_escape_string($link, $_POST['dueamount']);
 $fine = mysqli_real_escape_string($link, $_POST['fine']);
 $rebate = mysqli_real_escape_string($link, $_POST['rebate']);
 $photo= mysqli_real_escape_string($link, $_POST['file']);
 $date=date('Y-m-d');
 $dateofupload = $date;
 $netamountpaid = $amount+$paidamount;
 $ridd=$s+$rid+$s1;
 //$sql="INSERT INTO renewroom(id,p_applicantname,p_fathersname,p_mobile,roomno,arrearupto,demand,total,date,ward,road,photo) VALUES($s,'$p_applicantname','$p_fathersname','$p_mobile','$roomno','$arrearupto','$demand','$total','$dateofupload','$ward','$road','$photo')";
 $sql="INSERT INTO paytrade(id,roomno,p_applicantname,arrear,demand,totaldue,fine,rebate,rid,dateofupload,nameuser) VALUES($s,'$r_roomno','$o_ownername','$arrearupto','$demandupto','$amount','$fine','$rebate','$ridd','$dateofupload','$login_session')";
 $sql1="UPDATE roomownership SET arrearupto='0',demandupto='$demandupto',paidamount='$netamountpaid',amount='$amount',month='$month',fine='$fine',rebate='$rebate',dateofupload='$dateofupload',rid='$ridd',dueamount='$dueamount' WHERE id='$id'";
 $sql2="INSERT INTO roommonthly(r_roomno,o_ownername,o_ownerfathername,o_ownerphone,arrearupto,demandupto,paidamount,amount,month,fine,rebate,dateofupload,rid,dueamount) VALUES('$r_roomno','$o_ownername','$o_ownerfathername','$o_ownerphone','$arrearupto','$demandupto','$netamountpaid','$amount','$month','$fine','$rebate','$dateofupload','$ridd','$dueamount')";
 if(mysqli_query($link, $sql)){
      if(mysqli_query($link, $sql1)){
        if(mysqli_query($link, $sql2)){
 header("Location: receiptafterroompayment.php"); /* Redirect browser */
 exit();
    }else{
		 echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
	 } }
     else{
     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
   } }
     else {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   } 
 }

 ?>

<!DOCTYPE php>
<php lang="en">
    <head>
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
</style>
    </head>


    <body id="particles-js">

        <div id="page-wrapper">


            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php @include('header.php') ?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container" style="height: 700px;overflow: hidden;overflow-y: scroll;">
                        
						<div class="row">
                            <div class="col-sm-12">
                                
                                    <h4 class="m-t-0">APPLICATION FOR THE RENEWAL ROOMS</h4>
                                    
                                
                            </div>
                        </div><br>
						<div class="row">
						     <div class="col-md-12">
						         <?php
					                        		$product_array = "SELECT * FROM roomownership where id='$id'";
							                        $rs = mysqli_query($link,$product_array);
							                        $row = mysqli_fetch_array($rs);
					                        ?>
										<h4><center>ROOM REGISTRAR 2017-2018</center></h4>
                                        <form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<?php
										           
					                        		$product_array = "SELECT * FROM roomownership where id='$id'";
							                        $rs = mysqli_query($link,$product_array);
							                        while($row = mysqli_fetch_array($rs)) { 
					                        ?>
										<div class="card-box">
											<h4>Personal Details</h4><br>
                                                <div class="hidden" style="display:none;">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">R-Id</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" name="rid" id="rid" class="form-control" value="<?php echo ($row['id']+2500000); ?>" readonly>
                                                </div>
                                                </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name of the Proprietor</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" value="<?php echo $row['o_ownername']; ?>" readonly>
												</div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Father/Husband Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_fathersname" name="p_fathersname" value="<?php echo $row['o_ownerfathername']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_mobile" name="p_mobile" value="<?php echo $row['o_ownerphone']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Room No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="roomno" name="roomno" value="<?php echo $row['r_roomno']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Arrear</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="arrearupto" name="arrearupto" value="<?php echo $row['arrearupto']; ?>">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Demand</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="demand" name="demand" value="<?php echo $row['demandupto']; ?>">
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                            function add() {
  a = Number(document.getElementById('payableamount').value);
  b = Number(document.getElementById('amount').value);
  d= a-b; 
  e= Number(document.getElementById('arrearupto').value);
  f = d-e; 
  document.getElementById('dueamount').value = d;
} </script>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Already Paid Amount</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="paidamount" name="paidamount" value="<?php echo $row['paidamount']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Amount Payable</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="payableamount" name="payableamount" value="<?php echo ($row['demandupto']-$row['paidamount']+$row['arrearupto']); ?>" readonly>
                                                </div>
                                            </div>
                                            <?php 
                                            $amountpayable = ($row['demandupto']-$row['paidamount']);
                                            if( $amountpayable != 0) {?>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Pay Amount</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter the amount you want to pay" onKeyUp="add()">
                                                </div>
                                            </div>
                                            <div class="form-group" style="display: none;">
                                                <label class="col-md-2 control-label">Update Amount</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="updateamount" name="updateamount" value="<?php echo ($row['paidamount']+$row['amount']); ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Months</label>
                                                <div class="col-md-10">
                                                    <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                    <?php if(($row1['month'])=='april') { ?><label class="checkbox-inline"><input type="checkbox" name="month[]" id="month[]" value="april" disabled checked>April</label><?php } ?>
                                                <?php } ?>
                                                <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='may') { ?><label class="checkbox-inline"><input type="checkbox" value="may" name="month[]" id="month[]" disabled checked>May</label><?php } } ?>
                                                <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='june') { ?><label class="checkbox-inline"><input type="checkbox" value="june" name="month[]" id="month[]" disabled checked>June</label><?php } } ?>
                                                    <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='july') { ?><label class="checkbox-inline"><input type="checkbox" value="july" name="month[]" id="month[]" disabled checked>July</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='august') { ?><label class="checkbox-inline"><input type="checkbox" value="august" name="month[]" id="month[]" disabled checked>August</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='september') { ?><label class="checkbox-inline"><input type="checkbox" value="september" name="month[]" id="month[]" disabled checked>September</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='october') { ?><label class="checkbox-inline"><input type="checkbox" value="october" name="month[]" id="month[]" disabled checked>October</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='november') { ?><label class="checkbox-inline"><input type="checkbox" value="november" name="month[]" id="month[]" disabled checked>November</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='december') { ?><label class="checkbox-inline"><input type="checkbox" value="december" name="month[]" id="month[]" disabled checked>December</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='january') { ?><label class="checkbox-inline"><input type="checkbox" value="january" name="month[]" id="month[]" disabled checked>January</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='february') { ?><label class="checkbox-inline"><input type="checkbox" value="february" name="month[]" id="month[]" disabled checked>February</label><?php } } ?>
                                                     <?php
                                                    $r = $row['r_roomno'];
                                                    $product_array = "SELECT * FROM roommonthly where r_roomno='$r'";
                                                    $rs = mysqli_query($link,$product_array);
                                                    while($row1 = mysqli_fetch_array($rs)) {

                                            ?>
                                                     <?php if(($row1['month'])=='march') { ?><label class="checkbox-inline"><input type="checkbox" value="march" name="month[]" id="month[]" disabled checked>March</label><?php } } ?>

                                                    <label class="checkbox-inline"><input type="checkbox" value="april" name="month[]" id="month[]">April</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="may" name="month[]" id="month[]">May</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="june" name="month[]" id="month[]">June</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="july" name="month[]" id="month[]">July</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="august" name="month[]" id="month[]">August</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="september" name="month[]" id="month[]">September</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="october" name="month[]" id="month[]">October</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="november" name="month[]" id="month[]">November</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="december" name="month[]" id="month[]">December</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="january" name="month[]" id="month[]">January</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="february" name="month[]" id="month[]">February</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="march" name="month[]" id="month[]">March</label>
                                               

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Due Amount</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="dueamount" name="dueamount" readonly >
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Fine</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="fine" name="fine" value="<?php echo $row['fine']; ?>">
                                                </div>
                                              </div>
                                                <div class="form-group">
                                                <label class="col-md-2 control-label">Rebate</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="rebate" name="rebate" value="<?php echo $row['rebate']; ?>">
                                                </div>
                                            </div>
											<?php } ?> 
                                          
											<div class="form-group">
												<label class="col-md-2 control-label">Photo Location</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="file" name="file" value="<?php echo $row['photo']; ?>" readonly>
                                                </div>
                                            </div>
										</div>	
										<div class="form-group">
												<div class="col-md-12 col-sm-offset-5">
												<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit Request</button>
												</div>
										</div>
                                         
										<?php } ?>
                                        </form>
                                    </div>
						</div>
                    </div>
                    <!-- end container -->


                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
		        
                                   <script type="text/javascript">
    var con,mysql;

        "use strict";

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 700
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);
</script>

<script type="text/javascript">
var $_GET = {};  

$( document ).ready(function() {
if(document.location.toString().indexOf('?') !== -1) {
    var query = document.location
                   .toString()
                   // get the query string
                   .replace(/^.*?\?/, '')
                   // and remove any existing hash string (thanks, @vrijdenker)
                   .replace(/#.*$/, '')
                   .split('&');

    for(var i=0, l=query.length; i<l; i++) {
       var aux = decodeURIComponent(query[i]).split('=');
       $_GET[aux[0]] = aux[1];
    }
}
//get the 'index' query parameter
//alert($_GET['email']);
    mysql=require("mysql");
    con=mysql.createConnection({
  
   host:"localhost",
   user:"root",
   password:"",   
   database:"dhingmb"
});
con.connect(function(err){
    if(err){
      var clicked = function(){
        location.reload();
     };

$.fallr.show({
  buttons : {
    button1 : {text: 'OK', danger: true, onclick: clicked}
  },
  content : '<p>Please start the server</p>',
  icon    : 'error'
});

        //alert("Please start mysql server");
        
    }

});

    con.query("select * from admin where email='"+$_GET['email']+"'",function(err,rows){
                if(err)throw err;
                
                //alert();
                
                //alert(rows);
                if(rows.length==1){
                     document.getElementById("adminname").innerphp=rows[0].name;
                     document.getElementById("type").innerphp=rows[0].type;
                }
                else{
                }
                //alert(did);
                }); 

});
function homepage(){
    //preventDefault();
    location.replace('index.php?email='+$_GET['email']);
}

</script>
    </body>
</php>