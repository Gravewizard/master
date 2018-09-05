<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
if( isset( $_POST['room_no'] ) )
{

$no = $_POST['room_no'];

$host = 'localhost';
$user = 'egraminc_dbadmin';
$pass = 'admin#1234';
$db = 'egraminc_municipal';

mysqli_connect($host, $user, $pass, $db);

$selectdata = "SELECT * FROM roomownership WHERE r_roomno='$no'";

$query = mysqli_query($link,$selectdata);

while($row = mysqli_fetch_array($query))
{
?>
  <div class="form-group" style="display: none;">
      <label class="col-md-2 control-label">ID</label>
      <div class="col-md-4">
      <input type="text" name="id" id="id" class="form-control" value="<?php echo $row['id']; ?>" readonly>
	  </div>
	 
  </div>
  <div class="form-group">
      <label class="col-md-2 control-label">Name of the Proprietor</label>
      <div class="col-md-4">
      <input type="text" name="o_ownername" id="o_ownername" class="form-control" value="<?php echo $row['o_ownername']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Owner Father's Name</label>
      <div class="col-md-4">
      <input type="text" name="o_ownerfathername" id="o_ownerfathername" class="form-control" value="<?php echo $row['o_ownerfathername']; ?>" readonly>
	  </div>
  </div>
   <div class="form-group">
      <label class="col-md-2 control-label">Owner Phone</label>
      <div class="col-md-4">
      <input type="text" name="o_ownerphone" id="o_ownerphone" class="form-control" value="<?php echo $row['o_ownerphone']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Demand</label>
      <div class="col-md-4">
      <input type="text" name="demand" id="demand" class="form-control" value="<?php echo $row['demandupto']; ?>" readonly>
	  </div>
  </div>   
  <div class="form-group">
      <label class="col-md-2 control-label">Arrear</label>
      <div class="col-md-4">
      <input type="text" name="arrearupto" id="arrearupto" class="form-control" value="<?php echo $row['arrearupto']; ?>" readonly>
	  </div>
	<?php if($row['paidamount']!=$row['demandupto']) { ?>
	  <label class="col-md-2 control-label">Paid Amount</label>
      <div class="col-md-4">
      <input type="text" name="paidamount" id="paidamount" class="form-control" value="<?php echo $row['paidamount']; ?>" readonly>
	  </div>
  </div>
  <div class="form-group">
      <label class="col-md-2 control-label">Payable Amount</label>
      <div class="col-md-4">
      <input type="text" name="payableamount" id="payableamount" class="form-control" value="<?php echo $row['dueamount']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">R-Id</label>
      <div class="col-md-4">
      <input type="text" name="rid" id="rid" class="form-control" value="<?php echo ($row['rid']+1); ?>" readonly>
	  </div>
  </div>                                        
  <?php	
}
else{ ?>
	<div class="form-group"><h2>All Amount Is Paid</h2></div>
<?php }
}
}

?>