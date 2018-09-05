<html>
<head>
	<title>Dhing MB</title>
	<style>
		.panel-default{ border-color: #fff !important; }
	</style>
</head>
<body>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="exportDataroom.php" class="btn btn-success pull-right">Export Data</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Fathers Name</th>
                      <th>Phone</th>
                      <th>Room No</th>
                      <th>Arrear</th>
                      <th>Demand</th>
                      <th>Paid Amount</th>
                      <th>Due Amount</th>
                      <th>Ward</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM roomownership ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ 
                          if($row['demandupto']!=$row['paidamount']){?>                
                    <tr>
                      <td><?php echo $row['o_ownername']; ?></td>
                      <td><?php echo $row['o_ownerfathername']; ?></td>
                      <td><?php echo $row['o_ownerphone']; ?></td>
                      <td><?php echo $row['r_roomno']; ?></td>
                      <td><?php echo $row['arrearupto']; ?></td>
                      <td><?php echo $row['demandupto']; ?></td>
                      <td><?php echo $row['paidamount']; ?></td>
                      <td><?php echo ($row['arrearupto']+$row['demandupto']); ?></td>
                      <td><?php echo $row['ward']; ?></td>
                    </tr>
                    <?php }  } }else{ ?>
                    <tr><td colspan="5">No data found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>