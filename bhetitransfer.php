<?php
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

$id=intval($_GET['id']);

	 // Check connection

	 if($link === false){

			 die("ERROR: Could not connect. " . mysqli_connect_error());

	 }
 define ("MAX_SIZE","4000");

 $errors=0;


 if($_POST)
 {
     		//$target_file1 = basename($_FILES["pan"]["name"]);
           // $uploadOk = 1;
		//	$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
			//move_uploaded_file($_FILES["pan"]["tmp_name"], "docs/" . $target_file1);
			
			
            
			
			
 
 $b_bhetino = mysqli_real_escape_string($link, $_POST['b_bhetino']);
 $b_bhetiname = mysqli_real_escape_string($link, $_POST['b_bhetiname']);
 $b_bhetiaddress = mysqli_real_escape_string($link, $_POST['b_bhetiaddress']);
 $o_ownername = mysqli_real_escape_string($link, $_POST['o_ownername']);
 $o_ownerphone = mysqli_real_escape_string($link, $_POST['o_ownerphone']);
 $o_owneraddress = mysqli_real_escape_string($link, $_POST['o_owneraddress']);
 $transfername = mysqli_real_escape_string($link, $_POST['transfername']);
 $transferno = mysqli_real_escape_string($link, $_POST['transferno']);
 $transferaddress = mysqli_real_escape_string($link, $_POST['transferaddress']);
 $referno = mysqli_real_escape_string($link, $_POST['referno']);
 

 $sql="INSERT INTO bhetitransfer(b_bhetino,b_bhetiname,b_bhetiaddress,o_ownername,o_ownerphone,o_owneraddress,transfername,transferno,transferaddress,referno) VALUES('$b_bhetino','$b_bhetiname','$b_bhetiaddress','$o_ownername','$o_ownerphone','$o_owneraddress','$transfername','$transferno','$transferaddress','$referno')";

 if(mysqli_query($link, $sql)){
 ?>
	 <script>alert('Your data Is Uploaded');</script>
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

                    <div class="container-fluid" style="
height: 700px;
overflow: hidden;
overflow-y: scroll;">
                        
						<div class="row">
                            <div class="col-sm-12">
                                
                                    <h4 class="m-t-0">APPLICATION FOR TRANSFER OF BHETI</h4>
                                    
                                
                            </div>
                        </div><br>
                       
						<div class="row">
						     <div class="col-md-12">
										<h4><center>Application form for transfer of bheti 2017-2018</center></h4>
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										        <?php
					                        		$product_array = "SELECT * FROM bhetiownership where id='$id'";
							                        $rs = mysqli_query($link,$product_array);
							                        while($row = mysqli_fetch_array($rs)) {
					                            ?>
										<div class="card-box">
											<h4>Bheti Details</h4><br>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Bheti No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="b_bhetino" id="b_bhetino" class="form-control" value="<?php echo $row['b_bhetino']; ?>"  readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Bheti Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="b_bhetiname" id="b_bhetiname" class="form-control" value="<?php echo $row['b_bhetiname']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Bheti Address/Details</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_bhetiaddress" name="b_bhetiaddress" value="<?php echo $row['b_bhetiaddress']; ?>" readonly>
                                                </div>
                                            </div>
											
										</div>
                                        <div class="card-box">
											<h4>Owner Details</h4><br>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Owner Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="o_ownername" id="o_ownername" class="form-control" value="<?php echo $row['o_ownername']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Owner Phone No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="o_ownerphone" id="o_ownerphone" class="form-control" value="<?php echo $row['o_ownerphone']; ?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Owner Address/Details</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_owneraddress" name="o_owneraddress" value="<?php echo $row['o_owneraddress']; ?>" readonly>
                                                </div>
                                            </div>
											
										</div>
										<div class="card-box">
											<h4>Transfer To Whom</h4><br>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Reference No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="referno" id="referno" class="form-control" placeholder="Reference No." required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="transfername" id="transfername" class="form-control" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="transferno" id="transferno" class="form-control" placeholder="No." required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Address/Details</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="transferaddress" name="transferaddress" placeholder="Address" required>
                                                </div>
                                            </div>
											
										</div>
                                        <?php } ?>
										
                                    
										
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
    "1": ["DHING  BAZAR TO CHARIALI(M.G.ROAD)", "DHING CHARIALI TO PAPER MILL (GNB ROAD)", "CHARIALI TO BILOTIA ( NCB ROAD)","CHARIALI TO SAMABAY OFFICE (KHAIRA MARI ROAD)","NEPALI BASTI ROAD","NCB ROAD TO KHAIRAMARI ROAD ( NCB SUBWAY)","BISHNU PRASAD RABHA ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "2": ["DHING  BAZAR TO CHARIALI  ( M.G. ROAD)", "DOMDOMIA ROAD", "DOMDOMIA SUBWAY 1","TOLIBOR PAR ROAD (S. BOSE ROAD)","NAYAK NAGAR ROAD","NAYAK PATTY ROAD","SINGI MARI ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "3": ["DAGAON ROAD", "CHAMUA-DAGAON ROAD", "NB PWD TO PAN BARI ROAD","DHING BAZAR TO NAGAON ROAD","NB PWD TO JONARAM NATH HOUSE ROAD","IHSDP COLONY ROAD","ERA BARI ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "4": ["DHING BAZAR TO NAGAON ROAD", "N. THAKURIA ROAD (CHAMUA GAON ROAD)", "B.S. RAJA ROAD (BALI GAON)","SCHOOL RESERVE / PUJA BARI ROAD","HALA DHAR BHUYAN ROAD WARD NO 4","SANKAR NAGAR ROAD","SUTRA DHAR PATTY ROAD","BIDYA NAGAR / JYOTI NAGAR ROAD","BET KATI- BALI GAON ROAD","BHETA PUKHURI EAST ROAD","BHETA PUKHURI SOUTH ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "5": ["DHING  BAZAR TO CHARIALI  ( M.G. ROAD)", "RKB ROAD WARD NO 5 (M.G. ROAD TO ATHAGAON0", "RKB ROAD (LACK LONGIA GAON)","HEM BARUAH ROAD (CHARIALI TO BHAKOT GAON)","GUSAI PATTY ROAD","MAHA BIR JOIN ROAD","MODAK PATTY ROAD","BANIK PATTY ROAD","LAK LONGIA GOAN ROAD","LAK LONGIA GAON TO STATION ROAD","SHILPI NAGAR ROAD","M.S.B. ROAD ( M.G. ROAD TO LAKLONGIA GAON)","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "6": ["HALADHAR BHUYAN ROAD BHAKOT GAON 6", "KANAK LATA ROAD (BRUHA NAMGHAR TO BHAKOT GAON LAST)", "OTAL ROAD (BURHA NAMGHAR TO P.H.E. ROAD","LACHIT BARPHUKON ROAD","PUKHURI CHOK ROAD","HALADHAR BHUYAN TO LACHIT BAR PHOKAN (SUBWAY 1)","HALADHAR BHUYAN SUBWAY 2","HALADHAR BHUYAN SUBWAY 3","KANAK LATA SUBWAY 1","KANAK LATA TO LACHIT BARPHOKAN ROAD SUBWAY 2","HALADHAR BHUYAN TO KANAKLATA ROAD SUBWAY","OTAL SUBWAY 1 & 2","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "7": ["R.K.B. ROAD", "HEM BARUAH ROAD (CHARIALI TO BHAKOT GAON) 5", "LAU KHUA SUBURI ROAD","R.K.B. ROAD SUBWAY 7","DHING MOIRABARI ROAD SUBWAY 1","KULA DHAR SALIHA ROAD","NB PWD ROAD TO  PARAG HAZARIKA ROAD SUBWAY","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 5","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 6","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 7","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 8","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 9 JUR NAMGHAR","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 9 BSNL OFFICE"],
    "8": ["HALADHAR BHUYAN ROAD BHAKOT GAON 8", "HALADHAR BHUYAN ROAD BHAKOT GAON 8 SUBWAY 1", "MUKALI BARI ROAD","PHUKHURI CHOK ROAD"],
    "9": ["DHING MOIRABARI ROAD", "JNV ROAD", "SMASHAN ROAD","GANESH MANDIR ROAD","SUTIPAR ROAD","LAHAKOR ROAD NEAR ASOM JYOTI SANGHA","R.K.B. ROAD","R.K.B. ROAD TO BSNL OFFICE SUBWAY 1","BHUDHAR BORKAKOTI ROAD","MONIRAM DEWAN ROAD","ETA BBHATA ROAD","RKB TO DHING MOIRABARI ROAD NEAR ATHGAON SHIV MANDIR","RKB TO RAIL LINE ROAD SUBWAY"],
    "10": ["DHING MOIRABARI ROAD", "ATHGAON BHATI KHANDA ROAD WARD NO. 10", "DHING MOIRABARI ROAD SUBWAY 1 (STATION ROAD)","DHING MOIRABARI ROAD SUBWAY 2 NIZ DHING","DHING MOIRABARI ROAD TO GAYAN GAON SUBWAY 3","DHING MOIRABARI ROAD SUBWAY 1","DHING MOIRABARI ROAD SUBWAY 2","DHING MOIRABARI ROAD SUBWAY 3"]
  };

  var A = document.getElementById('b_wardno');
  var B = document.getElementById('b_road');

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