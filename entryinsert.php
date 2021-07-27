<?php

include ('connection.php');

if(isset($_POST['submit']))
{

$username = $_POST['username'];
$cnic = $_POST['cnic'];
$shopname = $_POST['shop'];
$totalamount = $_POST['totalamount'];
$amountpay = $_POST['amountpay'];
$date = $_POST['date'];

if($totalamount<$amountpay){
    echo"your amount will be smaller then total amount";
}
else{
$remainingamount = $totalamount - $amountpay ;

$user="SELECT * FROM user WHERE cnic='$cnic'";
$query = mysqli_query($conn, $user);

	if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
		//echo "Username already exists!";

		$sql="INSERT INTO financial(`username`, `cnic`, `shopname`, `totalamount`, `amountpay`, `remainingamount`, `date`) VALUES ('$username', '$cnic', '$shopname','$totalamount','$amountpay','$remainingamount','$date')";

		if(mysqli_query($conn, $sql)) {
			
			
			//header('location:main.php?register');
			echo "data not insert";
		}
		else{

			echo "Error";
			//header('location:main.php?No_register');
		}
		
	}
	else{

		echo "chutti";
		//header('location:main.php?exists');

	}}
}
?>