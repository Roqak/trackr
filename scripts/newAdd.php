<?php
session_start();
 require('config.php');
if (isset($_POST['firstname']) and isset($_POST['lastname'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email =$_POST['email'];
$track_id = md5($email);
$track_ids = substr($track_id, 0,10);
$query = "SELECT * FROM `admissions` WHERE email='$email'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 0){
// $_SESSION['username'] = $username;
////////////////////////////////
$query = "INSERT INTO `admissions`(`firstname`,`lastname`,`email`,`trackid`) VALUES('".$firstname."','".$lastname."','".$email."','".$track_ids."')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
    header('Content-type: application/json');  
    $array = array('result' => "Registered",'message'=>"Registration Succesfull your track_id is: "+$track_ids);
    echo json_encode($array);
}else{
    echo "errrr";

}
}else{
    header('Content-type: application/json');  
    $array = array('result' => "Not Registered",'message'=>"User Exists");
    echo json_encode($array);
}
    }else{
        echo "jargon";
    }

?>