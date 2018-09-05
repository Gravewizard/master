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
            <a href="exportDuebhetic.php" class="btn btn-success pull-left">Export Data(Current Year)</a>
            <a href="exportDuebheticr.php" class="btn btn-success pull-right">Export Data(Renewal)</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Fathers Name</th>
                      <th>Phone</th>
                      <th>Bheti No</th>
                      <th>Breadth(feet)</th>
                      <th>Breadth(inch)</th>
                      <th>Length(feet)</th>
                      <th>Length(inch)</th>
                      <th>Total Area</th>
                      <th>Demand</th>
                      <th>Arrear</th>
                      <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                  <h3>CURRENT YEAR AND RENEWAL DUE SHEET</h3>
                <?php
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM bhetiownership WHERE payment=0 ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['ownername']; ?></td>
                      <td><?php echo $row['ownerfathersname']; ?></td>
                      <td><?php echo $row['ownerphone']; ?></td>
                      <td><?php echo $row['bhetino']; ?></td>
                      <td><?php echo $row['b_in_feet']; ?></td>
                      <td><?php echo $row['b_in_inch']; ?></td>
                      <td><?php echo $row['l_in_feet']; ?></td>
                      <td><?php echo $row['l_in_inch']; ?></td>
                      <td><?php echo $row['total_area']; ?></td>
                      <td><?php echo $row['demand']; ?></td>
                      <td>0</td>
                      <td><?php echo ($row['demand']); ?></td>
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
                    $query = $db->query("SELECT * FROM bhetirenewal WHERE renewed=0 AND offpayment=0 ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['fathersname']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['bhetino']; ?></td>
                      <td><?php echo $row['area_b_feet']; ?></td>
                      <td><?php echo $row['area_b_inch']; ?></td>
                      <td><?php echo $row['area_l_feet']; ?></td>
                      <td><?php echo $row['area_l_inch']; ?></td>
                      <td><?php echo $row['total_area']; ?></td>
                      <td><?php echo $row['demand']; ?></td>
                      <td><?php echo $row['arrear']; ?></td>
                      <td><?php echo ($row['arrear']+$row['demand']); ?></td>
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