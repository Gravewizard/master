


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
            <a href="exportDemandholdingc.php" class="btn btn-success pull-left">Export Data(Current Year)</a>
            <a href="exportDemandholdingcr.php" class="btn btn-success pull-right">Export Data(Renewal)</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Fathers Name</th>
                      <th>Phone</th>
                      <th>Holding No</th>
                      <th>Ward No</th>
                      <th>Arrear(P.Tax)</th>
                      <th>Arrear(L.Tax)</th>
                      <th>Demand(P.Tax)</th>
                      <th>Demand(L.Tax)</th>
                      <th>Total(P.Tax)</th>
                      <th>Total(L.Tax)</th>
                      <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                  <h3>CURRENT YEAR AND RENEWAL DEMAND SHEET</h3>
                <?php
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM holdingownership ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['fathersname']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['holding']; ?></td>
                      <td><?php echo $row['wardno']; ?></td>
                      <td><?php echo $row['arrearptax']; ?></td>
                      <td><?php echo $row['arrearltax']; ?></td>
                      <td><?php echo $row['demandptax']; ?></td>
                      <td><?php echo $row['demandltax']; ?></td>
                      <td><?php echo ($row['arrearptax']+$row['demandptax']); ?></td>
                      <td><?php echo ($row['arrearltax']+$row['demandltax']); ?></td>
                      <td><?php echo $row['total']; ?></td>
                      
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
                    $query = $db->query("SELECT * FROM holdingrenewal ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['fathersname']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['oldholdingno']; ?></td>
                      <td><?php echo $row['wardno']; ?></td>
                      <td><?php echo $row['arrearptax']; ?></td>
                      <td><?php echo $row['arrearltax']; ?></td>
                      <td><?php echo $row['demandptax']; ?></td>
                      <td><?php echo $row['demandltax']; ?></td>
                      <td><?php echo $row['totalptax']; ?></td>
                      <td><?php echo $row['totalltax']; ?></td>
                      <td><?php echo ($row['totalltax']+$row['totalptax']); ?></td>
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