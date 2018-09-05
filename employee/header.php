<style type="text/css">
#boxscroll {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #006633;
	overflow: auto;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script>
  $(document).ready(function() {
  
	var nice = $("html").niceScroll();  // The document page (body)
	
	$("#div1").html($("#div1").html()+' '+nice.version);
    
    $("#boxscroll").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});
   
  });
</script>
<!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper" id="boxscroll">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#" id="adminname">ABC</a>
                                    <p class="text-muted m-0" id="type">Employee</p>
                                    <a href="logout.php?logout"><button type="button" class="btn btn-danger btn-xs">Logout</button></a>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="home.php"><i class="ti-home"></i> Dashboard </a></li>
                                 <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Forms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="forms-general.php">General Elements</a></li>
                                        <li><a href="forms-advanced.php">Advanced Form</a></li>
                                    </ul>
                                </li>




                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Property Tax <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="propertytax1.php">Search your name</a></li>
                                        <li><a href="propertytax2.php">Know your dues</a></li>
                                        <li><a href="pages-forget-password.php">Pay online</a></li>
                                        <li><a href="pages-lock-screen.php">Apply online for mutation</a></li>
                                        <li><a href="pages-blank.php">Apply online for seperation</a></li>
                                        <li><a href="pages-404.php">Apply online for change of name</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Trade License <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tradelicence1.php">Procedure of getting a Trade License</a></li>
                                        <li><a href="tradelicence2.php">Trade License fees</a></li>
                                        <li><a href="tradelicence3.php">Know your Trade License Details</a></li>
                                        <li><a href="tradelicence4.php">Know your Trade License Dues</a></li>
                                        
                                        <li><a href="tradelicence5.php">Download Trade License</a></li>
                                        <li><a href="tradecopyrenew.php">Renew your Trade License</a></li>
                                        
                                        <li><a href="tradelicence8.php">Status of your Trade License Application</a></li>
                                        
                                        
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Bheti <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="bhetihandover.php">Surrender to office</a></li>
                                        <!--<li><a href="bheti1.php">Search your name</a></li>-->
                                        <li><a href="bheti2.php">Pay Bheti amount</a></li>
                                        <li><a href="bhetireceipt.php">Bheti Pay Receipt</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Rooms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="roomhandover.php">Surrender to office</a></li>
                                        <!--<li><a href="room1.php">Search your name</a></li>-->
                                        <li><a href="room2.php">Pay Room Rent</a></li>
                                        <li><a href="roomreceipt.php">Rent Pay Receipt</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="collection.php" aria-expanded="true"><i class="ti-files"></i> Collection <span class="fa arrow"></span></a>
                                </li>
                                <li>
                                <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Miscellaneous Collection <span class="fa arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="misc.php">Apply/Collection</a></li>
                                        <li><a href="printformreceipt.php">Print Form & Receipt</a></li>
                                    </ul>
                                </li>
                                
                                <!--
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-widget"></i> Miscellaneous <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="allotmentbheti.php">Allotment of Bazar Bheti</a></li>
                                        <li><a href="allotmentbazar.php">Allotment of Bazar Room</a></li>
                                        <li><a href="leaseamountmarket.php">Lease Amount of Market</a></li>
                                        <li><a href="leaseamountparking.php">Lease Amount of Parking</a></li>
                                        <li><a href="nocfess.php">NOC Fees</a></li>
                                        <li><a href="recordcorrectionholding.php">Record Correction Fees of Holding</a></li>
                                        <li><a href="leaseamountbeel.php">Lease amount of Beel/Ghat</a></li>
                                        <li><a href="recordcorrectionbheti.php">Record correction of Bazar Bheti</a></li>
                                        <li><a href="recordcorrectionroom.php">Record Correction of Room</a></li>
                                        <li><a href="tenderform.php">Tender Form Fee</a></li>
                                        <li><a href="applicationform.php">Application form fee</a></li>
                                        <li><a href="childrenpark.php">Children Park Fee</a></li>
                                        <li><a href="bilding.php">Building Permission fee</a></li>
                                        <li><a href="mutation.php">Mutation Fee</a></li>
                                        <li><a href="others.php">Others</a></li>
                                    </ul>
                                </li>
                                -->
                                
                                <li><a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Beneficiary List <span class="fa arrow"></span></a></li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->