<?php
include('session.php');
//header( "refresh:3;url=http://godaddy.com" );
?>
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
                                <div class="pull-left" style="padding-top: 10px;">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#" id="adminname"><i><?php echo strtoupper($login_session); ?></i> - Admin</a>
                                    <a href="changepassword.php"><button type="button" class="btn btn-danger btn-xs">Change Password</button></a>
                                    <a href="logout.php?logout"><button type="button" class="btn btn-danger btn-xs">Logout</button></a>

                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="home.php"><i class="ti-home"></i> Dashboard </a></li>
                                <li><a href="master.php"><i class="ti-files"></i> Master Entry <span class="fa arrow"></span></a></li>
                                <li>
                                    <a href="javascript: void(0);"><i class="ti-files"></i> Trade License <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav">
                                        <li><a href="tradelicence3.php">Applied Trade Licenses</a></li>
										<li><a href="renewtrade.php">Renewal Trade License</a></li>
                                        <li><a href="tradeonline.php">Online Section</a></li>
                                        <li><a href="tradeoffline.php">Offline Section</a></li>
                                        <li><a href="tradecopyrenew.php">Renew your Trade License(Old Data)</a></li>
                                        <li><a href="tradelicence5.php">Download Licence Copy</a></li>
                                        <li><a href="receiptafterpayment.php">Print receipt</a></li>
                                        <li><a href="exportdemandtrade.php">Export Demand</a></li>
                                        <li><a href="exportduetrade.php">Export Due</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Holding <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="holdingrenewalold.php">Old Holding Data</a></li>
                                        <li><a href="holdingrenewal.php">Renewal Holding Data</a></li>
                                        <li><a href="holdinghandover.php">New Holding Data Entry</a></li>
                                        <li><a href="holdingonline.php">Online Section</a></li>
                                        <li><a href="holdingoffline.php">Offline Section</a></li>
                                        <li><a href="receiptafterholdingpayment.php">Print receipt</a></li>
                                        <li><a href="exportdemandholding.php">Export Demand</a></li>
                                        <li><a href="exportdueholding.php">Export Due</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Bheti <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="bhetirenewalold.php">Old Bheti Data</a></li>
                                        <li><a href="bhetirenewal.php">Renewal Bheti Data</a></li>
                                        <li><a href="bhetihandover.php">New Bheti Data Entry</a></li>
                                        <li><a href="bhetionline.php">Online Section</a></li>
                                        <li><a href="bhetioffline.php">Offline Section</a></li>
                                        <li><a href="receiptafterbhetipayment.php">Print receipt</a></li>
                                        <li><a href="exporttocsv.php">Export Demand</a></li>
                                        <li><a href="exportduebheti.php">Export Due</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Rooms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="roomrenewalold.php">Old Rooms Data(Online)</a></li>
                                        <li><a href="roomhandover.php">New Room Data Entry</a></li>
                                        <li><a href="roompaymentoffline.php">Offline Section</a></li>
                                        <li><a href="receiptafterroompayment.php">Print receipt</a></li>
                                        <li><a href="exporttocsvroom.php">Export Demand</a></li>
                                        <!--<li><a href="exporttocsvdueroom.php">Export Due</a></li>-->
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Collection Report<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="reportdaily.php">Daily Report</a></li>
                                        <!--<li><a href="reportmonthly.php">Monthly Report</a></li>
                                        <li><a href="reportyearly.php">Yearly Report</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Miscellaneous Collection <span class="fa arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="misc.php">Apply/Collection</a></li>
                                        <li><a href="printformreceipt.php">Print Form & Receipt</a></li>
                                    </ul>
                                </li>
                                <li>
                                <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> ISHDP Room <span class="fa arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="miscishdp.php">Apply/Collection</a></li>
                                        <li><a href="printformreceiptishdp.php">Print Form & Receipt</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->