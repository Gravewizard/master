<?php
	 /* Attempt MySQL server connection. Assuming you are running MySQL

	 server with default setting (user 'root' with no password) */

	 $link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
	 $select=mysqli_query($link,"SELECT COUNT(*) FROM applytrade");
	 $row=mysqli_fetch_array($select);
	 $total = $row[0];
	 //echo "Total rows: " . $total;
     $s=$total+2;


	 // Check connection

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
		$filename = "passport/". $_FILES['file']['name'];

		imagejpeg($tmp,$filename,100);

		imagedestroy($src);
		imagedestroy($tmp);
}
}
 
            
			$target_file1 = basename($_FILES["pan"]["name"]);
            $uploadOk = 1;
			$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["pan"]["tmp_name"], "docs/" . $target_file1);
			
			
            
			$vtarget_file = basename($_FILES["voter"]["name"]);
            $vuploadOk = 1;
			$vimageFileType = pathinfo($vtarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["voter"]["tmp_name"], "docs/" . $vtarget_file);
			
			
			$btarget_file = basename($_FILES["bank"]["name"]);
            $buploadOk = 1;
			$bimageFileType = pathinfo($vtarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["bank"]["tmp_name"], "docs/" . $btarget_file);
			
			
			$atarget_file = basename($_FILES["adhar"]["name"]);
            $auploadOk = 1;
			$aimageFileType = pathinfo($atarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["adhar"]["tmp_name"], "docs/" . $atarget_file);
			
			
			$dtarget_file = basename($_FILES["driving"]["name"]);
            $duploadOk = 1;
			$dimageFileType = pathinfo($dtarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["driving"]["tmp_name"], "docs/" . $dtarget_file);
			
			
			$otarget_file = basename($_FILES["others"]["name"]);
            $ouploadOk = 1;
			$oimageFileType = pathinfo($otarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["others"]["tmp_name"], "docs/" . $otarget_file);
			
			
			$ntarget_file = basename($_FILES["noc"]["name"]);
            $nuploadOk = 1;
			$nimageFileType = pathinfo($ntarget_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["noc"]["tmp_name"], "docs/" . $ntarget_file);
			
 $licenceno = mysqli_real_escape_string($link, $_POST['licenceno']);
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
 $p_year = mysqli_real_escape_string($link, $_POST['p_year']);
 $p_month = mysqli_real_escape_string($link, $_POST['p_month']);
 $b_cost = mysqli_real_escape_string($link, $_POST['b_cost']);
 $date=date('Y-m-d');
 $dateofupload = $date;

 $sql="INSERT INTO applytrade(licenceno,id,p_applicantname,p_fathersname,p_mobile,p_village,p_holding,p_goli,p_others,b_tradetype,b_tradename,b_wardno,b_holding,b_village,b_holdingorward,b_po,b_dist,b_road,b_others,o_ownrent,
 o_ownername,o_ownerfathername,o_ownermobile,o_monthlyrent,o_ownervillage,o_ownerholding,o_ownerroad,o_ownerothers,p_year,p_month,b_cost,photo,pancard,votercard,bankpassbook,adharcard,drivinglicense,others,nocfromlandowner,dateofupload) VALUES('$licenceno',$s,'$p_applicantname','$p_fathersname','$p_mobile','$p_village','$p_holding','$p_goli','$p_others','$b_tradetype','$b_tradename','$b_wardno','$b_holding',
 '$b_village','$b_holdingorward','$b_po','$b_dist','$b_road','$b_others','$o_ownrent','$o_ownername','$o_ownerfathername','$o_ownermobile','$o_monthlyrent','$o_ownervillage','$o_ownerholding',
 '$o_ownerroad','$o_ownerothers','$p_year','$p_month','$b_cost','$filename','$target_file1','$vtarget_file','$btarget_file','$atarget_file','$dtarget_file','$otarget_file','$ntarget_file','$dateofupload')";

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
                                
                                    <h4 class="m-t-0">APPLICATION FOR NEW TRADE LICENSE</h4>
                                    
                                
                            </div>
                        </div><br>
                       
						<div class="row">
						     <div class="col-md-12">
										<h4><center>Trade License & Trade NOC Form 2017-2018</center></h4>
										<form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">
										<div class="card-box">
											<h4>Personal Details</h4><br>
											<div class="form-group" style="display:none;">
											    <?php 
											    $sl=67;
											    $cnt = mysqli_num_rows(mysqli_query($link,"SELECT * FROM applytrade"));
                                                //echo $cnt;
                                                ?>
                                                <label class="col-md-2 control-label">Trade Licence No</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="licenceno" id="licenceno" class="form-control" value="DMB/TL/2017-2018/<?php echo ($cnt+$sl+1); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Applicant Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" placeholder="Applicant Name" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Father/Husband Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_fathersname" name="p_fathersname" placeholder="Applicant's Father/Husband name" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_mobile" name="p_mobile"  placeholder="Mobile no." required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Passport Photo Upload</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control" id="file" name="file" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Village</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_village" name="p_village" placeholder="Village" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Holding/Ward No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_holding" name="p_holding" placeholder="Holding/Ward no." required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Road/Goli Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_goli" name="p_goli" placeholder="Road/Goli name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Session Upto</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_year" name="p_year" placeholder="Write down the year e.g. 2015-2016" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Rent From</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_month" name="p_month" placeholder="Write down the months e.g. July to August" required>
                                                </div>
                                            </div>
                                            
											<div class="form-group">
                                                <label class="col-md-2 control-label">Others</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="p_others" name="p_others" placeholder="Others">
                                                </div>
                                            </div>
										</div>
                                    
										<div class="card-box">
											<h4>Business Details</h4><br>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Trade Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="b_tradetype" id="b_tradetype">
                                                        <option value="">Select</option>
                  <?php
                $qry = "select * from tradetype";
                $rec = mysqli_query($link,$qry );
                if( mysqli_num_rows($rec) > 0)
                {
                    while($res = mysqli_fetch_array($rec))
                    {
                        echo "<option value='".$res['id']."'>".$res['name']."</option>";
                    }
                } 
                ?>
                                                    </select>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Amount</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_cost" name="b_cost" readonly>
                                                </div>
                                            </div>
                                            <script>
    $('#b_tradetype').change(function(){
        //alert('a');
var package = $(this).val();
//alert(package);
$.ajax({
   type:'POST',
   data:{package:package},
   url:'price.php',
   success:function(data){
       $('#b_cost').val(data);
   } 

});
});
</script>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Trade Name "M/S"</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_tradename" name="b_tradename" placeholder="Trade name" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Ward No.</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="b_wardno" id="b_wardno">
                                                         <option value='1' selected='selected'>Ward no 1
                                                         <option value='2'>Ward no 2
                                                         <option value='3'>Ward no 3
                                                         <option value='4'>Ward no 4
                                                         <option value='5'>Ward no 5
                                                         <option value='6'>Ward no 6
                                                         <option value='7'>Ward no 7
                                                         <option value='8'>Ward no 8
                                                         <option value='9'>Ward no 9
                                                         <option value='10'>Ward no 10
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Road/Goli Name</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="b_road" id="b_road"></select>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Holding/Room/Bheti No</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_holding" name="b_holding" placeholder="holding/room/bheti no" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Village</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_village" name="b_village" placeholder="Village" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Holding/Ward No</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_holdingorward" name="b_holdingorward" placeholder="Holding/Ward no" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Post Office & Pin</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_po" name="b_po" placeholder="Pin no" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Dist & State</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_dist" name="b_dist" placeholder="Dist and State" required>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="col-md-2 control-label">Others</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="b_others" name="b_others" placeholder="Others">
                                                </div>
                                            </div>
										</div>
                                    
										<div class="card-box">
											<h4>Holding/Room/Bheti Ownership Details</h4><br>
											<div class="form-group">
											    <label class="col-md-2 control-label">Own or Rented</label>
                                                <div class="col-md-10">
                                                    <input type="radio" id="o_ownrent" name="o_ownrent" value="own" onclick="if( this.checked ) { fillForm2(); }"> Own &nbsp;&nbsp;
                                        <input type="radio" id="o_ownrent" name="o_ownrent" value="rented" onclick="if( this.checked ) { clearForm2(); }"> Rented
												</div>
											</div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Holding/Room/Bheti Owner Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="o_ownername" id="o_ownername" class="form-control" placeholder="Name of owner">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Holding/Room/Bheti Owner's Fathers Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownerfathername" name="o_ownerfathername" placeholder="Owner Father name">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Mobile No.</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownermobile" name="o_ownermobile" placeholder="Owner's Phone no">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Monthly Rent</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_monthlyrent" name="o_monthlyrent" placeholder="rent" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Village</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownervillage" name="o_ownervillage" placeholder="Village" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Holding/Ward No</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownerholding" name="o_ownerholding" placeholder="Holding/Ward no" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Road/Goli Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownerroad" name="o_ownerroad" placeholder="Road/Goli name" required>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-2 control-label">Others</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="o_ownerothers" name="o_ownerothers" placeholder="Others">
                                                </div>
                                            </div>
                                            
										</div>
                                    
										<div class="card-box">
											<h4>Document Section</h4><br>
											<div class="form-group">
												<label class="control-label">Adhar Card(Original)</label>
												<input type="file" name="adhar" class="filestyle" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">Voter Card(Original)</label>
												<input type="file" name="voter" class="filestyle" data-input="false" >
											</div>
											<div class="form-group">
												<label class="control-label">Pan Card(Original)</label>
												<input type="file" name="pan" class="filestyle" data-input="false" >
											</div>
											<div class="form-group">
												<label class="control-label">Bank Passbook(Original)</label>
												<input type="file" name="bank" class="filestyle" data-input="false" >
											</div>
											<div class="form-group">
												<label class="control-label">Driving License(Original)</label>
												<input type="file" name="driving" class="filestyle" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">Others(Original)</label>
												<input type="file" name="others" class="filestyle" data-input="false">
											</div>
											<div class="form-group">
												<label class="control-label">NOC form land owner(Original)</label>
												<input type="file" name="noc" class="filestyle" data-input="false">
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
    "1": ["DHING  BAZAR TO CHARIALI(M.G.ROAD)", "DHING CHARIALI TO PAPER MILL (GNB ROAD)", "CHARIALI TO BILOTIA ( NCB ROAD)","CHARIALI TO SAMABAY OFFICE (KHAIRA MARI ROAD)","NEPALI BASTI ROAD","NCB ROAD TO KHAIRAMARI ROAD ( NCB SUBWAY)","BISHNU PRASAD RABHA ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "2": ["DHING  BAZAR TO CHARIALI  ( M.G. ROAD)", "DOMDOMIA ROAD", "DOMDOMIA SUBWAY 1","TOLIBOR PAR ROAD (S. BOSE ROAD)","NAYAK NAGAR ROAD","NAYAK PATTY ROAD","SINGI MARI ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "3": ["DAGAON ROAD", "CHAMUA-DAGAON ROAD", "NB PWD TO PAN BARI ROAD","DHING BAZAR TO NAGAON ROAD","NB PWD TO JONARAM NATH HOUSE ROAD","IHSDP COLONY ROAD","ERA BARI ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "4": ["DHING BAZAR TO NAGAON ROAD", "N. THAKURIA ROAD (CHAMUA GAON ROAD)", "B.S. RAJA ROAD (BALI GAON)","SCHOOL RESERVE / PUJA BARI ROAD","HALA DHAR BHUYAN ROAD WARD NO 4","SANKAR NAGAR ROAD","SUTRA DHAR PATTY ROAD","BIDYA NAGAR / JYOTI NAGAR ROAD","BET KATI- BALI GAON ROAD","BHETA PUKHURI EAST ROAD","BHETA PUKHURI SOUTH ROAD","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "5": ["DHING  BAZAR TO CHARIALI  ( M.G. ROAD)", "RKB ROAD WARD NO 5 (M.G. ROAD TO ATHAGAON0", "RKB ROAD (LACK LONGIA GAON)","HEM BARUAH ROAD (CHARIALI TO BHAKOT GAON)","GUSAI PATTY ROAD","MAHA BIR JOIN ROAD","MODAK PATTY ROAD","BANIK PATTY ROAD","LAK LONGIA GOAN ROAD","LAK LONGIA GAON TO STATION ROAD","SHILPI NAGAR ROAD","M.S.B. ROAD ( M.G. ROAD TO LAKLONGIA GAON)","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "6": ["HALADHAR BHUYAN ROAD BHAKOT GAON 6", "KANAK LATA ROAD (BRUHA NAMGHAR TO BHAKOT GAON LAST)", "OTAL ROAD (BURHA NAMGHAR TO P.H.E. ROAD","LACHIT BARPHUKON ROAD","PUKHURI CHOK ROAD","HALADHAR BHUYAN TO LACHIT BAR PHOKAN (SUBWAY 1)","HALADHAR BHUYAN SUBWAY 2","HALADHAR BHUYAN SUBWAY 3","KANAK LATA SUBWAY 1","KANAK LATA TO LACHIT BARPHOKAN ROAD SUBWAY 2","HALADHAR BHUYAN TO KANAKLATA ROAD SUBWAY","OTAL SUBWAY 1 & 2","MOTI RAM BORA ROAD WARD NO.04.","MAHA BIR JOIN ROAD","M.G. ROAD","S. BOSE ROAD","SANI MANDIR GOLI WARD NO. 04","MADHYA GOLI WARD NO.04","MITHOI MAHAL GOLI","FISH MAHAL GOLI","DHING BHURAGAON ROAD","DHING NAGAON ROAD","RICE MARKE","SONARI MAHAL","MADHYA GOLI CONNECTED ROAD"],
    "7": ["R.K.B. ROAD", "HEM BARUAH ROAD (CHARIALI TO BHAKOT GAON) 5", "LAU KHUA SUBURI ROAD","R.K.B. ROAD SUBWAY 7","DHING MOIRABARI ROAD SUBWAY 1","KULA DHAR SALIHA ROAD","NB PWD ROAD TO  PARAG HAZARIKA ROAD SUBWAY","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 5","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 6","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 7","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 8","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 9 JUR NAMGHAR","DHING MOIRA BARI ROAD TO R.K.B. ROAD SUBWAY 9 BSNL OFFICE"],
    "8": ["HALADHAR BHUYAN ROAD BHAKOT GAON 8", "HALADHAR BHUYAN ROAD BHAKOT GAON 8 SUBWAY 1", "MUKALI BARI ROAD","PHUKHURI CHOK ROAD","KANAKLATA ROAD"],
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