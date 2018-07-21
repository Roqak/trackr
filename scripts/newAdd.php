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
//     $to = $email;
//     $subject = "Thanks for registering";
//     $txt = "You have successfully regigetred on our website\n your details are:\n
//      Firstname:".$firstname." Lastname: ".$lastname." tracking id: ".$track_ids;
//     $headers = "From: roqak1@gmail.com" . "\r\n" .
//     "CC: somebodyelse@example.com";

// mail($to,$subject,$txt,$headers);
//////////////
// $to = $email;
// $subject = 'Thanks for registering';
// $message = "You have successfully regigetred on our website\n your details are:\n
// Firstname:".$firstname." Lastname: ".$lastname." tracking id: ".$track_ids; 
// $from = 'roqak1@gmail.com';
// mail($to, $subject, $message);
// Sending email
// if(mail($to, $subject, $message)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }
//////
    header('Content-type: application/json');  
    $array = array('result' => "Registered",'message'=>"Registration Succesfull your track_id is: ".$track_ids);
    echo json_encode($array);
}else{
    // echo "errrr";
    header('Content-type: application/json');  
    $array = array('result' => "NRegistered",'message'=>"TOFU ");
    echo json_encode($array);

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