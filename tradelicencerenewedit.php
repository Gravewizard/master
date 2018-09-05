<?php
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

$id=intval($_GET['id']);
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

 $p_applicantname = mysqli_real_escape_string($link, $_POST['p_applicantname']);
 $p_fathersname = mysqli_real_escape_string($link, $_POST['p_fathersname']);
 $p_mobile = mysqli_real_escape_string($link, $_POST['p_mobile']);
 $oldtrade = mysqli_real_escape_string($link, $_POST['oldtrade']);
 $tradename = mysqli_real_escape_string($link, $_POST['p_tradename']);
 $arrearupto = mysqli_real_escape_string($link, $_POST['arrearupto']);
 $demand	= mysqli_real_escape_string($link, $_POST['demand']);
 $total= mysqli_real_escape_string($link, $_POST['total']);
 $ward= mysqli_real_escape_string($link, $_POST['ward']);
 $road= mysqli_real_escape_string($link, $_POST['road']);
 $bheti= mysqli_real_escape_string($link, $_POST['bheti']);
 $natureoftrade= mysqli_real_escape_string($link, $_POST['natureoftrade']);
 

 $sql="UPDATE tradecopyrenewal SET name='$p_applicantname', fathersname='$p_fathersname', mobile='$p_mobile', licenceno='$oldtrade', tradename='$tradename', arrearupto='$arrearupto', demand='$demand', total='$total', ward='$ward', road='$road', bheti='$bheti', natureoftrade='$natureoftrade', photo='$filename' WHERE id='$id'";
 if(mysqli_query($link, $sql)){
 ?>
	 <script>alert('Your data Is Uploaded');</script>
 <?php

	  }else{

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
					                        		$product_array = "SELECT * FROM tradecopyrenewal where id='$id'";
							                        $rs = mysqli_query($link,$product_array);
							                        $row = mysqli_fetch_array($rs);
					                        ?>
										<h4><center>Trade License & Trade NOC Form 2017-2018</center></h4>
                                        <form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<?php
										           
					                        		$product_array = "SELECT * FROM tradecopyrenewal where id='$id'";
							                        $rs = mysqli_query($link,$product_array);
							                        while($row = mysqli_fetch_array($rs)) { 
					                        ?>
										<div class="card-box">
											<h4>Personal Details</h4><br>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name of the Proprietor</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" value="<?php echo $row['name']; ?>">
												</div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Father/Husband Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_fathersname" name="p_fathersname" value="<?php echo $row['fathersname']; ?>">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_mobile" name="p_mobile" value="<?php echo $row['mobile']; ?>">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Trade License No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="oldtrade" name="oldtrade" value="<?php echo $row['licenceno']; ?>">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Trade Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_tradename" name="p_tradename" value="<?php echo $row['tradename']; ?>" >
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Arrear Upto</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="arrearupto" name="arrearupto" value="<?php echo $row['arrearupto']; ?>" >
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Demand</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="demand" name="demand" value="<?php echo $row['demand']; ?>" >
                                                </div>
                                            </div>
											<?php $total= $row['arrearupto']+$row['demand']; ?>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Total</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="total" name="total" value="<?php echo $total; ?>" >
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Ward</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="ward" name="ward" value="<?php echo $row['ward']; ?>" >
                                                </div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Road</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="road" name="road" value="<?php echo $row['road']; ?>" >
                                                </div>
                                            </div>
											<div class="form-group">
												<label class="col-md-2 control-label">Bheti</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="bheti" name="bheti" value="<?php echo $row['bheti']; ?>">
                                                </div>
                                            </div>
											<div class="form-group">
												<label class="col-md-2 control-label">Nature Of Trade</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="natureoftrade" name="natureoftrade" value="<?php echo $row['natureoftrade']; ?>" >
                                                </div>
                                            </div>
											<div class="form-group">
												<label class="col-md-2 control-label">Passport Photo</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control" id="file" name="file" >
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