<?php
include('connection.php');

//$name=$_POST['name'];
//$password=$_POST['password'];
if( isset($_POST['submit'])) {
if($_POST['name'] == 'umer' && $_POST['password'] == '1234567'){
    // display content here
  header("Location: welcome.php");
  
  }else{
    //echo "You're not authorized to visit this page";
    
    echo "<script>alert('Sorry! Invalid name or Password'); window.location='screen divider.php'</script>";
    header("Location: screen divider.php");
  }
  
    # code...
    
  
  
  
      
      }
/*if(isset($_POST['submit'])){   // is ma isset ga ha wo null value ko indicate krai ga

    $sql=" SELECT * from employcs WHERE name='$name'&&password='$password'";

    $result=(mysqli_query($conn,$sql));

    if($result->num_rows>0){

    header("Location:http://".$_SERVER['HTTP_HOST']."/5th sem project/welcome.php");
    echo"correct";
    }
    else{
        echo"error";
    }
}*/
?>