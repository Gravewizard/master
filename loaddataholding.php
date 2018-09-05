<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
if( isset( $_POST['holding_no'] ) )
{

$no = $_POST['holding_no'];

$host = 'localhost';
$user = 'egraminc_dbadmin';
$pass = 'admin#1234';
$db = 'egraminc_municipal';

mysqli_connect($host, $user, $pass, $db);

$selectdata = "SELECT * FROM holdingrenewal WHERE oldholdingno='$no'";

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
      <input type="text" name="o_ownername" id="o_ownername" class="form-control" value="<?php echo $row['name']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Owner Father's Name</label>
      <div class="col-md-4">
      <input type="text" name="o_ownerfathername" id="o_ownerfathername" class="form-control" value="<?php echo $row['fathersname']; ?>" readonly>
	  </div>
  </div>
   <div class="form-group">
      <label class="col-md-2 control-label">Owner Phone</label>
      <div class="col-md-4">
      <input type="text" name="o_ownerphone" id="o_ownerphone" class="form-control" value="<?php echo $row['mobileno']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Demand (P.Tax)</label>
      <div class="col-md-4">
      <input type="text" name="demandptax" id="demandptax" class="form-control" value="<?php echo $row['demandptax']; ?>" readonly>
	  </div>
  </div> 
   <div class="form-group">
      <label class="col-md-2 control-label">Demand (L.Tax)</label>
      <div class="col-md-4">
      <input type="text" name="demandltax" id="demandltax" class="form-control" value="<?php echo $row['demandltax']; ?>" readonly>
    </div>
    <label class="col-md-2 control-label">Arrear (P.Tax)</label>
      <div class="col-md-4">
      <input type="text" name="arrearptax" id="arrearptax" class="form-control" value="<?php echo $row['arrearptax']; ?>" readonly>
    </div>
  </div>   
  <div class="form-group">
      <label class="col-md-2 control-label">Arrear (L.Tax)</label>
      <div class="col-md-4">
      <input type="text" name="arrearltax" id="arrearltax" class="form-control" value="<?php echo $row['arrearltax']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Total (P.Tax)</label>
      <div class="col-md-4">
      <input type="text" name="totalptax" id="totalptax" class="form-control" value="<?php echo $row['totalptax']; ?>" readonly>
	  </div>
  </div>
  <div class="form-group">
      <label class="col-md-2 control-label">Total (L.Tax)</label>
      <div class="col-md-4">
      <input type="text" name="totalltax" id="totalltax" class="form-control" value="<?php echo $row['totalltax']; ?>" readonly>
    </div>
    <label class="col-md-2 control-label">Total</label>
      <div class="col-md-4">
      <input type="text" name="total" id="total" class="form-control" value="<?php echo ($row['totalptax']+$row['totalltax']); ?>" readonly>
    </div>
  </div>
  <div class="form-group">
      
	  <label class="col-md-2 control-label">R-Id</label>
      <div class="col-md-4">
      <input type="text" name="rid" id="rid" class="form-control" value="<?php echo ($row['id']+1); ?>" readonly>
	  </div>
  </div>                                        
<?php
}
}

?>