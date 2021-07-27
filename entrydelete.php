
<?php
include ('connection.php');

$sql="DELETE FROM financial WHERE cnic='" .$_GET['cnic']. "'";

if(mysqli_query($conn, $sql)){

	//header('location:user_table.php');
	echo "delete successfully";
}
else{


	//header('location:user_table.php');
	echo "error";
}

?>