<?php
//include database configuration file
include 'dbConfig.php';
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

//get records from database
$query = $db->query("SELECT * FROM applytrade WHERE payment=0 ORDER BY b_tradetype ASC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "licenceduecurrent_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('Name', 'Father Name', 'Phone', 'Licence No', 'Trade Type', 'Trade Name', 'Ward', 'Holding', 'Road', 'Demand', 'Arrear','Total');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

                                      $idd = $row['b_tradetype'];
                                      $product_array = "SELECT * FROM tradetype where id='$idd'";
                                      $rs = mysqli_query($link,$product_array);
                                      $row1 = mysqli_fetch_array($rs);
                                      $tradetype = $row1['name'];

        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['p_applicantname'], $row['p_fathersname'], $row['p_mobile'], $row['licenceno'], $tradetype ,$row['b_tradename'], $row['b_wardno'], $row['b_holding'], $row['b_village'], $row['b_cost'],0, ($row['b_cost']+0));
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>