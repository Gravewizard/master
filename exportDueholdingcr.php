<?php
//include database configuration file
include 'dbConfig.php';
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

//get records from database
$query = $db->query("SELECT * FROM holdingrenewal WHERE renewed=0 AND offpayment=0 ORDER BY id ASC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "holdingduerenewal_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('Name', 'Father Name', 'Phone', 'Holding No', 'Ward No', 'Arrear(P.Tax)', 'Arrear(L.Tax)', 'Demand(P.Tax)', 'Demand(L.Tax)', 'Total(P.Tax)', 'Total(L.Tax)','Total');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['name'], $row['fathersname'], $row['mobile'], $row['oldholdingno'], $row['wardno'] ,$row['arrearptax'], $row['arrearltax'], $row['demandptax'], $row['demandltax'],$row['totalptax'],$row['totalltax'] , ($row['totalltax']+$row['totalptax']));
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