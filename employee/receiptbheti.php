
<?php
require_once("dbconnect.php");
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
.table-bordered {
    border: 1px solid black;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid black;
    padding: 4px;
    line-height: 1;
    font-size: 14px;
}
h4{ font-size: 14px; }
.card-box {
    background: rgba(0, 0, 0, 0.4);
    padding: 1px 10px 1px 10px;
    margin-bottom: 1px; }
.indiapride img{
    margin-left:17%;
}
@page { size: auto;  margin: 0mm; }
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
						     		<?php
					                        		$product_array = "SELECT * FROM bhetipay where id='$id'";
							                        $rs = mysql_query($product_array);
							                        
							                        $row = mysql_fetch_array($rs);
					                        ?>
						     				<div class="headreceipt" style="padding-bottom: 20px;">
						     					<div class="left" style="float:left;">
						     						<p>SL No. : DMB/36/2017-18/00015<?php echo $row['id']; ?> </p>
						     					</div>
						     					<div class="right" style="float:right;">
						     						<p>Date : 29/08/2017</p>
						     					</div>
						     				</div>
						     				<div class="indiapride">
						     			<img src="images/ashok.png" />
						     			</div>
										<h4><center>DHING MUNICIPAL BOARD</center></h4>
										<p><center style="font-size:11px; line-height:1">dhingmb@rediffmail.com,Dhing, Nagaon(Assam)</center></p>
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										    <?php
					                        		$product_array = "SELECT * FROM bhetipay where id='$id'";
							                        $rs = mysql_query($product_array);
							                        
							                        while($row = mysql_fetch_array($rs)) { 
					                        ?>
										<div class="card-box">
											<h4>Reference no : <?php echo $row['referno']; ?></h4>
											
											<p>As per the following</p>
										
											<table class="table table-bordered">
                                            <thead style="border: 1px solid black;">
                                                <tr>
                                                <th>SL No.</th>
                                                <th>On Account Of</th>
                                                <th>Rs</th>
                                                <th>P</th>
                                                </tr>
                                            </thead>
                                            <tbody style="border: 1px solid black;">
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">1</th>
                                                <td>Paid Amount Of (<?php echo $row['b_bhetino']; ?>)</td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td>00</td>
                                                </tr>
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">2</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">3</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                                
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">4</th>
                                                <td>Late Fine</td>
                                                <td><?php echo $row['latefine']; ?></td>
                                                <td>00</td>
                                                </tr>
                                                <?php $total=$row['amount']+$row['latefine']; ?>
                                                <tr style="border: 1px solid black;">
                                                <th scope="row"></th>
                                                <td>Net Amount</td>
                                                <td>Rs. <?php echo $total; ?> </td>
                                                <td>00</td>
                                                </tr>
                                            </tbody>
                                            </table>
										</div>
										<p>The Sum of Rupees : <?php 
										$number = $total;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  echo $result . "Rupees Only ";
										?></p>
										<p>Payment Mode : Cash</p>
                                        <?php }  ?>
                                        <div class="sign" style="padding-top: 1%;">
                                            <div class="left" style="float:left;">
                                            	<p>________________________</p>
                                            	<p style="text-align: center;">JANMONI</p>
                                            </div>
                                            <div class="right" style="float:right;">
                                            	<p>________________________</p>
                                            	<p style="text-align: center;">Vice Chairman/E.O.</p>
                                            </div>
                                        </div>
                                        </form>
                               							
                                    </div>
						</div>
						
						<div class="row">
						     <div class="col-md-12">
						     		<?php
					                        		$product_array = "SELECT * FROM bhetipay where id='$id'";
							                        $rs = mysql_query($product_array);
							                        
							                        $row = mysql_fetch_array($rs);
					                        ?>
						     				<div class="headreceipt" style="padding-bottom: 20px;">
						     					<div class="left" style="float:left;">
						     						<p>SL No. : DMB/36/2017-18/00015<?php echo $row['id']; ?> </p>
						     					</div>
						     					<div class="right" style="float:right;">
						     						<p>Date : 29/08/2017</p>
						     					</div>
						     				</div>
						     				<div class="indiapride">
						     			<img src="images/ashok.png" />
						     			</div>
										<h4><center>DHING MUNICIPAL BOARD</center></h4>
										<p><center style="font-size:11px; line-height:1">dhingmb@rediffmail.com,Dhing, Nagaon(Assam)</center></p>
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										    <?php
					                        		$product_array = "SELECT * FROM bhetipay where id='$id'";
							                        $rs = mysql_query($product_array);
							                        
							                        while($row = mysql_fetch_array($rs)) { 
					                        ?>
										<div class="card-box">
											<h4>Reference no : <?php echo $row['referno']; ?></h4>
											
											<p>As per the following</p>
										
											<table class="table table-bordered">
                                            <thead style="border: 1px solid black;">
                                                <tr>
                                                <th>SL No.</th>
                                                <th>On Account Of</th>
                                                <th>Rs</th>
                                                <th>P</th>
                                                </tr>
                                            </thead>
                                            <tbody style="border: 1px solid black;">
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">1</th>
                                                <td>Paid Amount Of (<?php echo $row['b_bhetino']; ?>)</td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td>00</td>
                                                </tr>
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">2</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">3</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                                
                                                <tr style="border: 1px solid black;">
                                                <th scope="row">4</th>
                                                <td>Late Fine</td>
                                                <td><?php echo $row['latefine']; ?></td>
                                                <td>00</td>
                                                </tr>
                                                <?php $total=$row['amount']+$row['latefine']; ?>
                                                <tr style="border: 1px solid black;">
                                                <th scope="row"></th>
                                                <td>Net Amount</td>
                                                <td>Rs. <?php echo $total; ?> </td>
                                                <td>00</td>
                                                </tr>
                                            </tbody>
                                            </table>
										</div>
										<p>The Sum of Rupees : <?php 
										$number = $total;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  echo $result . "Rupees Only ";
										?></p>
										<p>Payment Mode : Cash</p>
                                        <?php }  ?>
                                        <div class="sign" style="padding-top: 1%;">
                                            <div class="left" style="float:left;">
                                            	<p>________________________</p>
                                            	<p style="text-align: center;">JANMONI</p>
                                            </div>
                                            <div class="right" style="float:right;">
                                            	<p>________________________</p>
                                            	<p style="text-align: center;">Vice Chairman/E.O.</p>
                                            </div>
                                        </div>
                                        <div class="print" style="padding-top: 6%;">
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
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
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