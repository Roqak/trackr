<?php
session_start();
include "config.php";
// if($_GET["action"] == "update"){
// //Update record in database
// // $result = mysqli_query("UPDATE admissions SET `status` = '" . $_POST['status'] . " WHERE id = " . $_POST["id"] . ";");
// // $state = "UPDATE `admissions` SET `status`=".$_POST['status']
// // $state = $state."WHERE id=".$_POST['id'].";";
// // $result = mysqli_query($conn,"UPDATE `admissions` SET `status`=".$_POST['status']." WHERE id='".$_POST["id"]."';");
// // $result = mysqli_query($conn, "UPDATE records SET `status` = '". $_POST['status']." WHERE id = ". $_POST['id'] .";");
// // $result = mysqli_query($conn,$state);
$id = $_POST['id'];
$status = $_POST['status'];
// // $result = mysqli_query($conn,"UPDATE `admissions` SET `status`='".$_POST['status']."'WHERE `id`='".$_POST['id'].");
$result = mysqli_query($conn, "UPDATE `admissions` SET `status`='$status' WHERE `id`='$id'");
//  if(!$result){
//     //  echo "ssss";
//  }
// //Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);
// }

//Update record in database
// $result = mysqli_query($conn,"UPDATE `admissions` SET status = '" . $_POST["status"] . "', firstname = " . $_POST["firstname"] . " WHERE id = " . $_POST["id"] . ";");
 
// //Return result to jTable
// $jTableResult = array();
// $jTableResult['Result'] = "OK";
// print json_encode($jTableResult);
 ?>