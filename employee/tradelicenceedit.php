
<?php
require_once("dbconnect.php");
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

$id=intval($_GET['id']);
if($_POST)
 {
 $p_applicantname = mysqli_real_escape_string($link, $_POST['p_applicantname']);
 $p_fathersname = mysqli_real_escape_string($link, $_POST['p_fathersname']);
 $p_mobile = mysqli_real_escape_string($link, $_POST['p_mobile']);
 $p_village = mysqli_real_escape_string($link, $_POST['p_village']);
 $p_holding = mysqli_real_escape_string($link, $_POST['p_holding']);
 $p_goli = mysqli_real_escape_string($link, $_POST['p_goli']);
 $p_others = mysqli_real_escape_string($link, $_POST['p_others']);
 $b_tradetype = mysqli_real_escape_string($link, $_POST['b_tradetype']);
 $b_tradename = mysqli_real_escape_string($link, $_POST['b_tradename']);
 $b_wardno = mysqli_real_escape_string($link, $_POST['b_wardno']);
 $b_holding = mysqli_real_escape_string($link, $_POST['b_holding']);
 $b_village = mysqli_real_escape_string($link, $_POST['b_village']);
 $b_holdingorward = mysqli_real_escape_string($link, $_POST['b_holdingorward']);
 $b_po = mysqli_real_escape_string($link, $_POST['b_po']);
 $b_dist = mysqli_real_escape_string($link, $_POST['b_dist']);
 $b_road = mysqli_real_escape_string($link, $_POST['b_road']);
 $b_others = mysqli_real_escape_string($link, $_POST['b_others']);
 $o_ownrent = mysqli_real_escape_string($link, $_POST['o_ownrent']);
 $o_ownername = mysqli_real_escape_string($link, $_POST['o_ownername']);
 $o_ownerfathername	= mysqli_real_escape_string($link, $_POST['o_ownerfathername']);
 $o_ownermobile = mysqli_real_escape_string($link, $_POST['o_ownermobile']);
 $o_monthlyrent = mysqli_real_escape_string($link, $_POST['o_monthlyrent']);
 $o_ownervillage = mysqli_real_escape_string($link, $_POST['o_ownervillage']);
 $o_ownerholding = mysqli_real_escape_string($link, $_POST['o_ownerholding']);
 $o_ownerroad = mysqli_real_escape_string($link, $_POST['o_ownerroad']);
 $o_ownerothers = mysqli_real_escape_string($link, $_POST['o_ownerothers']);
 $b_cost = mysqli_real_escape_string($link, $_POST['b_cost']);

 $sql="UPDATE applytrade SET p_applicantname='$p_applicantname',p_fathersname='$p_fathersname',p_mobile='$p_mobile',p_village='$p_village',p_holding='$p_holding',p_goli='$p_goli',p_others='$p_others',b_tradetype='$b_tradetype',b_tradename='$b_tradename',b_wardno='$b_wardno',b_holding='$b_holding',b_village='$b_village',b_holdingorward='$b_holdingorward',b_po='$b_po',b_dist='$b_dist',b_road='$b_road',b_others='$b_others',o_ownrent='$o_ownrent',
 o_ownername='$o_ownername',o_ownerfathername='$o_ownerfathername',o_ownermobile='$o_ownermobile',o_monthlyrent='$o_monthlyrent',o_ownervillage='$o_ownervillage',o_ownerholding='$o_ownerholding',o_ownerroad='$o_ownerroad',o_ownerothers='$o_ownerothers',b_cost='$b_cost' WHERE id='$id'";

 if(mysqli_query($link, $sql)){
 ?>
	 <script>alert('Your data Is Updated');</script>
 <?php

	 } else{

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
    </head>


        <style type="text/css">
body{
background: #0e1d3a url(../images/bg.png) top center no-repeat;
font-family: Helvetica Neue, Helvetica, Arial;
color: #F5F3F3;
}
h4{ font-size: 14px; }
.card-box {
    background: rgba(0, 0, 0, 0.4);
    padding: 1px 10px 1px 10px;
    margin-bottom: 1px; }
  .form-control {  height: 30px; }
  .form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;
    line-height:1.5;
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
    line-height:1.5;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}
.form-control{ border-color: black;}
 @media print {
     .container-fluid {
display: block;
width: auto;
height: auto;
overflow: visible;
}
    }
</style>
    </head>


    <body id="particles-js">

        <div id="page-wrapper">
            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php @include('header.php') ?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container-fluid">
                        
						
                       
						<div class="row">
						     <div class="col-md-12">
						                <div class="head">
										        <h4 style="float:left;">Edit of Trade License & Trade NOC Form 2017-2018</h4>
										</div>
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<?php
					                        		$product_array = "SELECT * FROM applytrade where id='$id'";
							                        $rs = mysql_query($product_array);
							                        while($row = mysql_fetch_array($rs)) {
					                    ?>
										<div class="card-box">
											<h4 style="margin-top:4%; background: rgb(101, 158, 72);
    padding: 4px;text-align: center;
    ">Personal Details</h4>
											
                                            <div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Applicant Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" value="<?php echo $row['p_applicantname']; ?>">
                                                </div>
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Father/Husband Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="p_fathersname" name="p_fathersname" value="<?php echo $row['p_fathersname']; ?>">
                                                </div>
                                                
                                            </div>
											
											<div class="form-group">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Mobile No.</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="p_mobile" name="p_mobile" value="<?php echo $row['p_mobile']; ?>">
                                                </div>
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Holding/Ward No.</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="p_holding" name="p_holding" value="<?php echo $row['p_holding']; ?>">
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Village</label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" id="p_village" name="p_village" value="<?php echo $row['p_village']; ?>">
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Road/Goli Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="p_goli" name="p_goli" value="<?php echo $row['p_goli']; ?>">
                                                </div>
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Others</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="p_others" name="p_others" value="<?php echo $row['p_others']; ?>">
                                                </div>
                                            </div>
											
											
										</div>
                                    
										<div class="card-box">
											<h4 style="background: rgb(101, 158, 72);
    padding: 4px;text-align: center;
    ">Business Details</h4>
											<?php $tradetype= $row['b_tradetype']; 
                                            //echo $tradetype;
                                            ?>
											<?php
                                                 $qry = "select * from tradetype where id= '$tradetype'";
    $rec = mysql_query($qry);
   // echo $rec;
    if (mysql_num_rows($rec) > 0) {
        //$test=mysql_num_rows($rec);
        //echo $test;
        while ($res = mysql_fetch_array($rec)) {
      //echo $res['price'];
      ?>
                                            <div class="form-group">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Trade Type</label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" name="b_tradetype" id="b_tradetype" class="form-control" value="<?php echo $res['name']; ?>">
                                                </div>
                                                
                                            </div>
                                           <div class="form-group">
                                               
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Amount</label>
                                                
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" name="b_cost" id="b_cost" class="form-control" value="<?php echo $res['price']; ?>">
                                                </div>
                                            </div>
                                            <?php   }
    }?>
											<div class="form-group">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Trade Name</label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" id="b_tradename" name="b_tradename" value="M/S <?php echo $row['b_tradename']; ?>">
                                                </div>
                                                
                                            </div>
										    <div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Ward No.</label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" id="b_wardno" name="b_wardno" value="<?php echo $row['b_wardno']; ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Road/Goli Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="b_road" name="b_road" value="<?php echo $row['b_road']; ?>">
                                                </div>
                                                <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Holding/Room/Bheti No</label>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    <input type="text" class="form-control" id="b_holding" name="b_holding" value="<?php echo $row['b_holding']; ?>">
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Village</label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" id="b_village" name="b_village" value="<?php echo $row['b_village']; ?>">
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Holding/Ward No</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="b_holdingorward" name="b_holdingorward" value="<?php echo $row['b_holdingorward']; ?>">
                                                </div>
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Post Office & Pin</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="b_po" name="b_po" value="<?php echo $row['b_po']; ?>">
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Dist & State</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="b_dist" name="b_dist" value="<?php echo $row['b_dist']; ?>">
                                                </div>
                                                 <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Others</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="b_others" name="b_others" value="<?php echo $row['b_others']; ?>">
                                                </div>
                                            </div>
											
											
											
										</div>
                                    
										<div class="card-box">
											<h4 style="background: rgb(101, 158, 72);
    padding: 4px;text-align: center;
    ">Holding/Room/Bheti Ownership Details</h4>
											<div class="form-group">
											        <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Own/Rented</label>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        <input type="text" class="form-control" name="o_ownrent" id="o_ownrent" value="<?php echo $row['o_ownrent']; ?>">
                                                    </div>
                                                    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label"> Owner Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" name="o_ownername" id="o_ownername" class="form-control" value="<?php echo $row['o_ownername']; ?>">
                                                </div>
											</div>
                                            
											<div class="form-group">
											    <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label"> Owner's Fathers Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="o_ownerfathername" name="o_ownerfathername" value="<?php echo $row['o_ownerfathername']; ?>">
                                                </div>
											    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Mobile No.</label>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    <input type="text" class="form-control" id="o_ownermobile" name="o_ownermobile" value="<?php echo $row['o_ownermobile']; ?>" >
                                                </div>
                                                
                                                
                                            </div>
											
											<div class="form-group">
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Monthly Rent</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="o_monthlyrent" name="o_monthlyrent" value="<?php echo $row['o_monthlyrent']; ?>">
                                                </div>
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Holding/Ward No</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="o_ownerholding" name="o_ownerholding" value="<?php echo $row['o_ownerholding']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Village</label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" id="o_ownervillage" name="o_ownervillage" value="<?php echo $row['o_ownervillage']; ?>" >
                                                </div>
                                            </div>
										
											<div class="form-group">
                                                
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Road/Goli Name</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="o_ownerroad" name="o_ownerroad" value="<?php echo $row['o_ownerroad']; ?>" >
                                                </div>
                                                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Others</label>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <input type="text" class="form-control" id="o_ownerothers" name="o_ownerothers" value="<?php echo $row['o_ownerothers']; ?>">
                                                </div>
                                            </div>
											
										
										</div>
                                    
										<div class="row">
											    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											    <h5>Adhar Card(Original) : <?php echo $row['adharcard']; ?></h5>
											    <h5>Voter Card(Original) : <?php echo $row['votercard']; ?></h5>
											    <h5>Pan Card(Original) : <?php echo $row['pancard']; ?></h5>
											    <h5>Others(Original) : <?php echo $row['others']; ?></h5>
											    </div>
											    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											    <h5>Bank Passbook(Original) : <?php echo $row['bankpassbook']; ?></h5>
											    <h5>Driving License(Original) : <?php echo $row['drivinglicense']; ?></h5>
											    <h5>NOC from Land Owner(Original) : <?php echo $row['nocfromlandowner']; ?></h5>
											    
											    </div>
												
                                                
											
											
										</div>
										<?php } ?>
									<!--	<div class="container"><br>
	<div class="row">
            <div class="form-group">
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>
                    <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-default btn-xs active">
                    Adhar Card
                </label>
            </div>
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>
                    <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-default btn-xs active">
                    Voter Card
                </label>
            </div>
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>
                    <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-default btn-xs active">
                    Pan Card
                </label>
            </div>
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>
                    <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-default btn-xs active">
                    Bank Passbook
                </label>
            </div>
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>
                    <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-default btn-xs active">
                    Driving License
                </label>
            </div>
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>
                    <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="btn btn-default btn-xs active">
                    NOC From Land Owner
                </label>
            </div>
        </div>
        

	</div>
</div>-->
										
					<button type="submit" class="btn btn-primary" >Update</button>
				
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
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        var hidereceipt = document.getElementById("receipt");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        hidereceipt.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
        hidereceipt.style.visibility = 'visible';
    }
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