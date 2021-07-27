<?php

include('connection.php');

if(isset($_POST['submit'])){//isset go ha check krta ha form ma koi null value to nahi ha

$name = $_POST['name'];
$password = $_POST['password'];
$lname = $_POST['lname'];
$cnic = $_POST['cnic'];
$email = $_POST['email'];
$image=$_FILES['image']['name'];
$tempimage=$_FILES['image']['tmp_name'];

$directory="image/".$image;

$result=move_uploaded_file($tempimage, $directory);
if (!$result) {
	
	die("Image not stored in folder".mysql_error());
}
else{

    
    $sql="INSERT INTO user ( `name`,`image`, `password`,`lname`,`cnic`,`email`) VALUES ('$name','$image', '$password', '$lname','$cnic','$email')";


    if(mysqli_query($conn, $sql)) {
        
    }
    else{
    
        echo"data  inserted successfully";
    }

    
}



}
?>