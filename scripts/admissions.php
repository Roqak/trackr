<?php
session_start();
 require('config.php');
//Get records from database
$query = "SELECT * FROM admissions";
$result = mysqli_query($conn, $query);
// $result = mysqli_query("SELECT * FROM admissions");
 
//Add all records to an array
$rows = array();
while($row = mysqli_fetch_array($result))
{
    $rows[] = $row;
}
 
//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Records'] = $rows;
echo json_encode($jTableResult);
?>
