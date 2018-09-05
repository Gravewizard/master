<?php
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

$id=intval($_GET['id']);


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
										        <h4 style="float:left;">ISHDP Form Print and Receipt</h4>
										        <div id="receipt"><a href="ishdpreceipt.php?sid=<?php echo $id; ?>"><button type="submit" style="float:right;" name="submit" id="submit" class="btn btn-primary">Print Receipt</button></a></div>
										</div><br><br>
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<?php
					                        		$product_array = "SELECT * FROM ishdp_collection where id='$id'";
							                        $rs = mysqli_query($link,$product_array);
							                        while($row = mysqli_fetch_array($rs)) {
					                    ?>
										<div class="card-box">
											<h4>Details</h4><br>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Applicant Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" value="<?php echo $row['p_applicantname']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_mobile" name="p_mobile"  value="<?php echo $row['p_mobile']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Address</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_address" name="p_address" value="<?php echo $row['p_address']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Amount Payable For</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_amountpayable" name="p_amountpayable" value="<?php echo $row['p_amountpayable']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Allotment No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_allotmentno" name="p_allotmentno" value="<?php echo $row['p_allotmentno']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Reference No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_referno" name="p_referno" value="<?php echo $row['p_referno']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Amount</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_amount" name="p_amount" value="<?php echo $row['p_amount']; ?>" readonly>
                                                </div>
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
										<div class="print" style="padding-top: 10%;">
					<button id="printpagebutton" class="btn btn-primary" onclick="printpage()">Print</button>
					</div>
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