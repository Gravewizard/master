<?php
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");



	 // Check connection

	 if($link === false){

			 die("ERROR: Could not connect. " . mysqli_connect_error());

	 }
 define ("MAX_SIZE","4000");

 $errors=0;


 if($_POST)
 {
 
 $holder = mysqli_real_escape_string($link, $_POST['holder']);
 $empno = mysqli_real_escape_string($link, $_POST['empno']);
 $bookno = mysqli_real_escape_string($link, $_POST['bookno']);
 $snofrom = mysqli_real_escape_string($link, $_POST['snofrom']);
 $snoto = mysqli_real_escape_string($link, $_POST['snoto']);
 $date = mysqli_real_escape_string($link, $_POST['date']);

 $sql="INSERT INTO master(holder,bookno,snofrom,empno,snoto,date) VALUES('$holder','$bookno','$snofrom','$empno','$snoto','$date')";

 if(mysqli_query($link, $sql)){
 ?>
	 <script>alert('Your data Is Uploaded');</script>
 <?php

	 }
	 else{

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
		
		    <script language = "Javascript">
function check()
{

    var pass1 = document.getElementById('mobile');


    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";

    if(mobile.value.length!=10){

        mobile.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!"
    }
    
}
</script>
    </head>


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
            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php @include('header.php') ?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container-fluid"  style="height: 700px;overflow: hidden;overflow-y: scroll;">
                        
						<div class="row">
                            <div class="col-sm-12">
                                    <h4 class="m-t-0">Offline Master Entry</h4>
                            </div>
                        </div><br>
                       
						<div class="row">
						     <div class="col-md-12">
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<div class="card-box">
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Receipt Copy Holder Employee</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="holder" id="holder">
                                                        <option value="">Select</option>
                                                        <option value="GaneshDutta">Ganesh Dutta</option>
                                                        <option value="JanmoniDas">Janmoni Das</option>
                                                        <option value="LakhyaSharma">Lakhya Pratim Sharma</option>
                                                        <option value="NepalDas">Nepal Das</option>
                                                        <option value="DeepDas">Deep Kumar Das</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Employee No</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="empno" id="empno" readonly></select>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-1 control-label">Book No</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="bookno" name="bookno" placeholder="Book Number" required>
                                                </div>
												<label class="col-md-1 control-label">Date</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="date" name="date" placeholder="Today Date" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-1 control-label">SI No.(From)</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="snofrom" name="snofrom"  placeholder="Start of Serial no" required>
                                                </div>
												<label class="col-md-1 control-label">SI No.(To)</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="snoto" name="snoto"  placeholder="End of Serial no" required>
                                                </div>
                                            </div>
                                            
										</div>
											
                                    
										
                                    
										
										<div class="form-group">
												<div class="col-md-12 col-sm-offset-5">
												<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
												</div>
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
        
         <script>
        function fillForm2() {
            document.getElementById( 'o_ownername' ).value = document.getElementById( 'p_applicantname' ).value;
            document.getElementById( 'o_ownerfathername' ).value = document.getElementById( 'p_fathersname' ).value;
            document.getElementById( 'o_ownermobile' ).value = document.getElementById( 'p_mobile' ).value;
            document.getElementById( 'o_ownervillage' ).value = document.getElementById( 'p_village' ).value;
            document.getElementById( 'o_ownerholding' ).value = document.getElementById( 'p_holding' ).value;
            document.getElementById( 'o_ownerroad' ).value = document.getElementById( 'p_goli' ).value;
            
        }
        function clearForm2() {
            document.getElementById( 'o_ownername' ).value = "";
            document.getElementById( 'o_ownerfathername' ).value = "";
            document.getElementById( 'o_ownermobile' ).value = "";
            document.getElementById( 'o_ownervillage' ).value = "";
            document.getElementById( 'o_ownerholding' ).value = "";
            document.getElementById( 'o_ownerroad' ).value = "";
        }
        </script>
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
<script>
    (function() {

  //setup an object fully of arrays
  //alternativly it could be something like
  //{"yes":[{value:sweet, text:Sweet}.....]}
  //so you could set the label of the option tag something different than the name
  var bOptions = {
    "GaneshDutta": ["1"],
    "JanmoniDas": ["2"],
    "LakhyaSharma": ["3"],
    "NepalDas": ["4"],
    "DeepDas": ["5"]
    
  };

  var A = document.getElementById('holder');
  var B = document.getElementById('empno');

  //on change is a good event for this because you are guarenteed the value is different
  A.onchange = function() {
    //clear out B
    B.length = 0;
    //get the selected value from A
    var _val = this.options[this.selectedIndex].value;
    //loop through bOption at the selected value
    for (var i in bOptions[_val]) {
      //create option tag
      var op = document.createElement('option');
      //set its value
      op.value = bOptions[_val][i];
      //set the display label
      op.text = bOptions[_val][i];
      //append it to B
      B.appendChild(op);
    }
  };
  //fire this to update B on load
  A.onchange();

})();
</script>
    </body>
</php>