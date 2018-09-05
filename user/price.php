<?php 
$link = mysqli_connect("localhost", "egraminc_dbadmin", "admin#1234", "egraminc_municipal");

if (isset($_POST['package'])) {
    $qry = "select * from tradetype where id=" . $_POST['package'];
    $rec = mysqli_query($link,$qry);
    if (mysqli_num_rows($rec) > 0) {
        while ($res = mysqli_fetch_array($rec)) {
            echo $res['price'];
        }
    }
}
die();
?>