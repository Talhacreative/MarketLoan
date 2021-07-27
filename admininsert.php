<?php


include('connection.php');

//$name=$_POST['name'];
//$password=$_POST['password'];
if( isset($_POST['submit'])) {
if($_POST['name'] == 'Talha' && $_POST['password'] == '1234567'){
    // display content here
  header("Location: adminpanel.php");
  
  }else{
    //echo "You're not authorized to visit this page";
    
    echo "<script>alert('Sorry! Invalid name or Password'); window.location='screen divider.php'</script>";
    header("Location: Mainpanel.php");
  }
  
    # code...
    
  
  
  
      
      }
?>