<?php
//include database configuration file
include 'dbConfig.php';

//get records from database
$query = $db->query("SELECT  * FROM (SELECT * FROM roommonthly ORDER BY id DESC) AS room GROUP BY room.r_roomno");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "roomdemand_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ID', 'Name', 'Father Name', 'Phone', 'Room No', 'Arrear', 'Demand', 'Paid Amount', 'Due Amount', 'Ward');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['id'], $row['o_ownername'], $row['o_ownerfathername'], $row['o_ownerphone'], $row['r_roomno'], $row['arrearupto'], $row['demandupto'], $row['paidamount'], $row['dueamount'], $row['ward']);
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