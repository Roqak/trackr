<?php
session_start();
 require('config.php');
if (isset($_POST['track_id'])){
$track_id = $_POST['track_id'];
// $password = $_POST['password'];
$query = "SELECT * FROM `admissions` WHERE trackid='$track_id'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
// $_SESSION['username'] = $username;
// $_SESSION['admin'] = "yes";
$row = mysqli_fetch_assoc($result);
header('Content-type: application/json');  
$array = array('result' => "found",'message'=>"Application found, your tracking id is: ".$row['trackid']."and your application status is: ".$row['status']);
echo json_encode($array);
}else{
// echo "Invalid Login Credentials.";
$row = mysqli_fetch_assoc($result);
header('Content-type: application/json');  
$array = array('result' => "INVALID DETAILS",'message'=>"Sorry, your appliction id is INVALID. Please try a valid ID or register");
echo json_encode($array);
}
}
?>
