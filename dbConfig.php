<?php
//DB details
$dbHost     = 'localhost';
$dbUsername = 'egraminc_dbadmin';
$dbPassword = 'admin#1234';
$dbName     = 'egraminc_municipal';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}