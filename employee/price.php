<?php 
require_once("dbconnect.php");
if (isset($_POST['package'])) {
    $qry = "select * from tradetype where id=" . $_POST['package'];
    $rec = mysql_query($qry);
    if (mysql_num_rows($rec) > 0) {
        while ($res = mysql_fetch_array($rec)) {
            echo $res['price'];
        }
    }
}
die();
?>