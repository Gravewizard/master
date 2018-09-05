<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
if( isset( $_POST['bheti_no'] ) )
{

$no = $_POST['bheti_no'];

$host = 'localhost';
$user = 'egraminc_dbadmin';
$pass = 'admin#1234';
$db = 'egraminc_municipal';

mysqli_connect($host, $user, $pass, $db);

$selectdata = "SELECT * FROM bhetirenewal WHERE bhetino='$no' AND renewed=0";

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
      <input type="text" name="o_ownerphone" id="o_ownerphone" class="form-control" value="<?php echo $row['phone']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Total Area</label>
      <div class="col-md-4">
      <input type="text" name="total_area" id="total_area" class="form-control" value="<?php echo $row['total_area']; ?>" readonly>
	  </div>
  </div> 
   <div class="form-group">
      <label class="col-md-2 control-label">Demand</label>
      <div class="col-md-4">
      <input type="text" name="demand" id="demand" class="form-control" value="<?php echo $row['demand']; ?>" readonly>
    </div>
    <label class="col-md-2 control-label">Arrear</label>
      <div class="col-md-4">
      <input type="text" name="arrear" id="arrear" class="form-control" value="<?php echo $row['arrear']; ?>">
    </div>
  </div>   
  <div class="form-group">
	  <label class="col-md-2 control-label">Total</label>
      <div class="col-md-4">
      <input type="text" name="total" id="total" class="form-control" value="<?php echo $row['total']; ?>">
	  </div>
	  <label class="col-md-2 control-label">R-Id</label>
      <div class="col-md-4">
      <input type="text" name="rid" id="rid" class="form-control" value="<?php echo ($row['id']+1); ?>" readonly>
	  </div>
  </div>                                       
<?php
}
}

?>