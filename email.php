<?php

include('connection.php');

if(isset($_POST['submit'])){//isset go ha check krta ha form ma koi null value to nahi ha


$email = $_POST['email'];

$emailquery = "select * from user where email='$email'";

$query = mysqli_query($conn,$emailquery);

$emailcount = mysqli_num_rows($query);

if($emailcount){

$userdata = mysqli_fetch_array($query);

$username = $userdata['username'];

$token = $userdata['token'];

    $subject = "Email Activation";

    $body = "Hi , $username. Click here to reset your password http://localhost/6mid/reset_password.php?token=$token";

    $sender_email = "From: muhammadtalhakhan@gmail.com";
    if(mail($email,$subject,$body,$sender_email)){
        $_SESSION['msg']="Check your mail to reset your password $email";
        header('location:form.php');
    }else{
        echo"Email sending failed";
    }
}
else{
    "No email found";
}
}
?>