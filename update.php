<?php
 include('connection.php');

 if(count($_POST)>0){// count go ha wo table ma data ko count krta ha
$id=$_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];


 
 $up="UPDATE employcs set id='$id',name= '$name',password='$password' WHERE id='".$_POST['id']."'";
 
 
if(mysqli_query($conn,$up)){
    echo "Data updated";
}
else {
    echo "Data is not updated";
}
 }

 $record="SELECT * FROM employcs ";
    $x=(mysqli_query($conn,$record));
    $row=mysqli_fetch_array($x);
?>
