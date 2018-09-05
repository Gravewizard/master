


<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
?>
<html>
<head>
	<title>Dhing MB</title>
	<style>
		.panel-default{ border-color: #fff !important; }
    tr,td { font-size: 10px; }
	</style>
</head>
<body>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            
            <a href="exportDuelicence.php" class="btn btn-success pull-left">Export Data(Current Year)</a>
            <a href="exportDuelicencer.php" class="btn btn-success pull-right">Export Data(Renewal)</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Fathers Name</th>
                      <th>Phone</th>
                      <th>Licence No</th>
                      <th>Trade Type</th>
                      <th>Trade Name</th>
                      <th>Ward</th>
                      <th>Holding</th>
                      <th>Village</th>
                      <th>Demand</th>
                      <th>Arrear</th>
                      <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                  <h3>CURRENT YEAR AND RENEWAL DUE SHEET</h3>
                <?php
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM applytrade WHERE payment=0 ORDER BY b_tradetype  ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['p_applicantname']; ?></td>
                      <td><?php echo $row['p_fathersname']; ?></td>
                      <td><?php echo $row['p_mobile']; ?></td>
                      <td><?php echo $row['licenceno']; ?></td>
                      <td>
                        <?php
                                      $idd = $row['b_tradetype'];
                                      $product_array = "SELECT * FROM tradetype where id='$idd'";
                                      $rs = mysqli_query($link,$product_array);
                                      $row1 = mysqli_fetch_array($rs);
                                      echo $row1['name'];
                                  ?></td>
                      <td><?php echo $row['b_tradename']; ?></td>
                      <td><?php echo $row['b_wardno']; ?></td>
                      <td><?php echo $row['b_holding']; ?></td>
                      <td><?php echo $row['b_village']; ?></td>
                      <td><?php echo $row['b_cost']; ?></td>
                      <td>0</td>
                      <td><?php echo ($row['b_cost']+0); ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No data found.....</td></tr>
                    <?php } ?>
                </tbody>
                <tbody>
                <?php
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM renewtrade WHERE payment=0 ORDER BY natureoftrade ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['p_applicantname']; ?></td>
                      <td><?php echo $row['p_fathersname']; ?></td>
                      <td><?php echo $row['p_mobile']; ?></td>
                      <td><?php echo $row['oldtrade']; ?></td>
                      <td>
                        <?php
                                      echo $row['natureoftrade'];
                                  ?></td>
                      <td><?php echo $row['tradename']; ?></td>
                      <td><?php echo $row['ward']; ?></td>
                      <td><?php echo $row['road']; ?></td>
                      <td><?php echo $row['bheti']; ?></td>
                      <td><?php echo $row['demand']; ?></td>
                      <td><?php echo $row['arrearupto']; ?></td>
                      <td><?php echo ($row['demand']+$row['arrearupto']); ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No data found.....</td></tr>
                    <?php } ?>
                </tbody>
                
                
            </table>
        </div>
    </div>
</div>
</body>
</html>