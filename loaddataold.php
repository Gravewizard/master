<?php
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");
if( isset( $_POST['licence_no'] ) )
{

$no = $_POST['licence_no'];

$host = 'localhost';
$user = 'egraminc_dbadmin';
$pass = 'admin#1234';
$db = 'egraminc_municipal';

mysqli_connect($host, $user, $pass, $db);

$selectdata = "SELECT * FROM tradecopyrenewal WHERE licenceno='$no' AND payment=0";

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
      <input type="text" name="p_applicantname" id="p_applicantname" class="form-control" value="<?php echo $row['name']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Owner Father's Name</label>
      <div class="col-md-4">
      <input type="text" name="o_ownerfathername" id="o_ownerfathername" class="form-control" value="<?php echo $row['fathersname']; ?>" readonly>
	  </div>
  </div>
   <div class="form-group">
      <label class="col-md-2 control-label">Owner Phone</label>
      <div class="col-md-4">
      <input type="text" name="o_ownerphone" id="o_ownerphone" class="form-control" value="<?php echo $row['mobile']; ?>" readonly>
	  </div>
	  <label class="col-md-2 control-label">Trade Name</label>
      <div class="col-md-4">
      <input type="text" name="b_tradename" id="b_tradename" class="form-control" value="<?php echo $row['tradename']; ?>" readonly>
	  </div>
  </div> 
   <div class="form-group">
      <label class="col-md-2 control-label">Demand</label>
      <div class="col-md-4">
      <input type="text" name="demand" id="demand" class="form-control" value="<?php echo $row['demand']; ?>" readonly>
    </div>
    <label class="col-md-2 control-label">Arrear</label>
      <div class="col-md-4">
      <input type="text" name="arrear" id="arrear" class="form-control" value="<?php echo $row['arrearupto']; ?>" readonly>
    </div>
  </div>   
  <div class="form-group">
      <label class="col-md-2 control-label">Total</label>
      <div class="col-md-4">
      <input type="text" name="total" id="total" class="form-control" value="<?php echo $row['total']; ?>" readonly>
    </div>
    <label class="col-md-2 control-label">R-Id</label>
      <div class="col-md-4">
      <input type="text" name="rid" id="rid" class="form-control" value="201817<?php echo ($row['id']+1); ?>" readonly>
	  </div>
  </div>                                       
<?php
}
}

?>
