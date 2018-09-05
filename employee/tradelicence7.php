<?php
require_once("dbconnect.php");
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

$id=intval($_GET['sid']);
if($link === false){

			 die("ERROR: Could not connect. " . mysqli_connect_error());

	 }
 define ("MAX_SIZE","4000");

 $errors=0;


 if($_POST)
 {
      $image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name'];
		function getExtension($str) {

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
  if ($image) 
  {
  $filename = stripslashes($_FILES['file']['name']);
  $extension = getExtension($filename);
  $extension = strtolower($extension);
  if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
  {
		echo ' Unknown Image extension ';
		$errors=1;
  }
  else
  {
		$size=filesize($_FILES['file']['tmp_name']);
		if ($size > MAX_SIZE*1024)
		{
			echo "You have exceeded the size limit";
			$errors=1;
		}
 
		if($extension=="jpg" || $extension=="jpeg" )
		{
			$uploadedfile = $_FILES['file']['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($extension=="png")
		{
			$uploadedfile = $_FILES['file']['tmp_name'];
			$src = imagecreatefrompng($uploadedfile);
		}
		else 
		{
			$src = imagecreatefromgif($uploadedfile);
		}
 
		list($width,$height)=getimagesize($uploadedfile);

		$newwidth= 100;
		$newheight= 130;
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		

		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filename = "renewpassport/". $_FILES['file']['name'];

		imagejpeg($tmp,$filename,100);

		imagedestroy($src);
		imagedestroy($tmp);
}
}
 
            
			$target_file1 = basename($_FILES["signature"]["name"]);
            $uploadOk = 1;
			$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["signature"]["tmp_name"], "renewdocs/" . $target_file1);
			
			
            
			$vtarget_file = basename($_FILES["lasttl"]["name"]);
            $vuploadOk = 1;
			$vimageFileType = pathinfo($vtarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["lasttl"]["tmp_name"], "renewdocs/" . $vtarget_file);
			
			
			$ntarget_file = basename($_FILES["noc"]["name"]);
            $nuploadOk = 1;
			$nimageFileType = pathinfo($ntarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["noc"]["tmp_name"], "renewdocs/" . $ntarget_file);
			
			
			$otarget_file = basename($_FILES["others"]["name"]);
            $ouploadOk = 1;
			$oimageFileType = pathinfo($otarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["others"]["tmp_name"], "renewdocs/" . $otarget_file);
			
			$otarget_file_1 = basename($_FILES["others_1"]["name"]);
            $ouploadOk_1 = 1;
			$oimageFileType_1 = pathinfo($otarget_file_1,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["others_1"]["tmp_name"], "renewdocs/" . $otarget_file_1);
			
			
			
			
 
 $p_applicantname = mysqli_real_escape_string($link, $_POST['p_applicantname']);
 $p_fathersname = mysqli_real_escape_string($link, $_POST['p_fathersname']);
 $p_mobile = mysqli_real_escape_string($link, $_POST['p_mobile']);
 $oldtrade = mysqli_real_escape_string($link, $_POST['oldtrade']);
 $o_ownrent = mysqli_real_escape_string($link, $_POST['o_ownrent']);
 $o_ownername = mysqli_real_escape_string($link, $_POST['o_ownername']);
 $o_ownerfathername	= mysqli_real_escape_string($link, $_POST['o_ownerfathername']);
 $o_ownermobile = mysqli_real_escape_string($link, $_POST['o_ownermobile']);
 $o_monthlyrent = mysqli_real_escape_string($link, $_POST['o_monthlyrent']);
 $o_ownervillage = mysqli_real_escape_string($link, $_POST['o_ownervillage']);
 

 $sql="INSERT INTO renewtrade(p_applicantname,p_fathersname,p_mobile,oldtrade,o_ownrent,o_ownername,o_ownerfathername,o_ownermobile,o_monthlyrent,o_ownervillage,photo,signature,lasttl,noc,others,oothers) VALUES('$p_applicantname','$p_fathersname','$p_mobile','$oldtrade','$o_ownrent','$o_ownername','$o_ownerfathername','$o_ownermobile','$o_monthlyrent','$o_ownervillage','$filename','$target_file1','$vtarget_file','$ntarget_file','$otarget_file','$otarget_file_1')";
$sql1="UPDATE applytrade SET p_year='2017-2018' where id='$id'";
 if(mysqli_query($link, $sql)){
    if(mysqli_query($link, $sql1)){     
 ?>
	 <script>alert('Your data Is Uploaded');</script>
 <?php

	 } }else{

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

                    <div class="container" style="
height: 700px;
overflow: hidden;
overflow-y: scroll;">
                        
						<div class="row">
                            <div class="col-sm-12">
                                
                                    <h4 class="m-t-0">APPLICATION FOR THE RENEWAL TRADE LICENSE</h4>
                                    
                                
                            </div>
                        </div><br>
						<div class="row">
						     <div class="col-md-12">
						         <?php
					                        		$product_array = "SELECT * FROM applytrade where id='$id'";
							                        $rs = mysql_query($product_array);
							                        
							                        $row = mysql_fetch_array($rs);
					                        ?>
										<h4><center>Trade License & Trade NOC Form 2017-2018</center></h4>
                                        <form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<?php
										            $sl=65;
					                        		$product_array = "SELECT * FROM applytrade where id='$id'";
							                        $rs = mysql_query($product_array);
							                        $il=$row['id'];
							                        
							                        while($row = mysql_fetch_array($rs)) { 
					                        ?>
										<div class="card-box">
											<h4>Personal Details</h4><br>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name of the Proprietor</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" value="<?php echo $row['p_applicantname']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Father/Husband Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_fathersname" name="p_fathersname" value="<?php echo $row['p_fathersname']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_mobile" name="p_mobile" value="<?php echo $row['p_mobile']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Old Trade License No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="oldtrade" name="oldtrade" value="DMB/TL/2017-2018/<?php echo $il+$sl; ?>" readonly>
                                                </div>
                                            </div>
										</div>	
										
										<div class="card-box">
											<h4>Ownership Details</h4><br>
											<div class="form-group">
											<label class="col-md-2 control-label">Own/Rented</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownrent" name="o_ownrent" value="<?php echo $row['o_ownrent']; ?>" readonly>
                                                </div>
											</div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Owner Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownername" name="o_ownername" class="form-control" value="<?php echo $row['o_ownername']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Owner's Fathers Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownerfathername" name="o_ownerfathername" value="<?php echo $row['o_ownerfathername']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownermobile" name="o_ownermobile" value="<?php echo $row['o_ownermobile']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Monthly Rent</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_monthlyrent" name="o_monthlyrent" value="<?php echo $row['o_monthlyrent']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Address</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownervillage" name="o_ownervillage" value="<?php echo $row['o_ownervillage']; ?>" readonly>
                                                </div>
                                            </div>
											
										</div>
                                        
										<div class="card-box">
											<h4>Document Section</h4><br>
											<div class="form-group">
												<label class="control-label">Color PP Photo</label>
												<input type="file" class="filestyle" name="file" id="file" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">Scanned Signature</label>
												<input type="file" class="filestyle" name="signature" id="signature" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">Copy of Last TL </label>
												<input type="file" class="filestyle" name="lasttl" id="lasttl" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">NOC from Land Owner</label>
												<input type="file" class="filestyle" id="noc" name="noc" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">Other Documents - 1 </label>
												<input type="file" class="filestyle" id="others" name="others" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">Other Documents - 2  </label>
												<input type="file" class="filestyle" id="others_1" name="others_1" data-input="false">
											</div>
											
										</div>
										<div class="form-group">
												<div class="col-md-12 col-sm-offset-5">
												<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
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