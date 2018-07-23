<?php
include "config.php";

$result = mysqli_query($conn,"DELETE FROM `admissions` WHERE id = " . $_POST["id"] . ";");
 
//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>