<?php
//include database configuration file
include 'dbConfig.php';

//get records from database
$query = $db->query("SELECT * FROM bhetirenewal ORDER BY id ASC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "bhetidemandrenewal_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ID', 'Name', 'Father Name', 'Phone', 'Bheti No', 'Breadth(feet)', 'Breadth(inch)', 'Length(feet)', 'Length(inch)', 'Total Area', 'Demand', 'Arrear','Total Amount');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['id'], $row['name'], $row['fathersname'], $row['phone'], $row['bhetino'], $row['area_b_feet'], $row['area_b_inch'], $row['area_l_feet'], $row['area_l_inch'], $row['total_area'], $row['demand'], $row['arrear'],($row['arrear']+$row['demand']));
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