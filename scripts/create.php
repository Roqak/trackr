<?php 
include "config.php"
//Insert record into database
$result = mysqli_query("INSERT INTO `admission`(`firstname`, `Age`, `RecordDate`) VALUES('" . $_POST["Name"] . "', " . $_POST["Age"] . ",now());");
 
//Get last inserted record (to return to jTable)
$result = mysqli_query("SELECT * FROM people WHERE PersonId = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);
 
//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);
?>