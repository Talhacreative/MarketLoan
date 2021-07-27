<?php
 include('connection.php');

 if(count($_POST)>0){// count go ha wo table ma data ko count krta ha
$cnic=$_POST['cnic'];
$password=$_POST['password'];
$name=$_POST['name'];
$lname=$_POST['lname'];



 $up="UPDATE user set name= '$name',lname='$lname',password='$password' WHERE cnic='".$_POST['cnic']."'";
 
 
if(mysqli_query($conn,$up)){
    header('location:welcome.php');
}
else {
    echo "Data is not updated";
}
 }

 $record="SELECT * FROM user WHERE cnic='".$_GET['cnic']."'";
    $x=(mysqli_query($conn,$record));
    $row=mysqli_fetch_array($x);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="form.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Textile Pakistan</title>
    <link rel="icon" href="image/icon.png">
    <link rel="stylesheet" href="userupdate.css">
    
</head>
<body>
<script>
function myfun(){
            var b = /^[A-Za-z]+$/;
            var a = document.getElementById("name").value;
            var c = document.getElementById("password").value;
            var d = document.getElementById("cnic").value;
            if(a==""){
                document.getElementById("message").innerHTML="** Please Fill username";
                return false;
            }
            if(a.length<3){
                document.getElementById("message").innerHTML="** Please Enter username greater then 3 character";
                return false;
            }
            if(a.match(b))
                true;
                else{
                    document.getElementById("message").innerHTML="** Only Alphabets are allowed";
                    return false;
                }
                if(c==""){
                document.getElementById("message1").innerHTML="Please Fill pasword";
                return false;
            }
            if(c.length<3){
                document.getElementById("message1").innerHTML="** Please Enter Password greater then 3 character";
                return false;
            }
            if(d==""){
                document.getElementById("message2").innerHTML="** Please Fill  cnic";
                return false;
            }
            }
        
        </script>
  
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return myfun()"> 
    <section class="intro">

        <div class="inner" >

            <div class="content" style="background-color:lightblue">

             <img src="image/icon.png" alt="" style="border-radius:30px; height:160px"><br><br><br><br>
             
             <input type="hidden"  placeholder="Cnic"  id="cnic" name="cnic"  style="border-radius:30px; " value="<?php echo $row['cnic']; ?>
" ><br>
             <span id="message2"></span><br><br>

             <input type="text" placeholder="First_name" class="input" id="name" name="name" style="border-radius:30px;"  value="<?php echo $row['name']; ?>
"><br>
             <span id="message"></span><br><br>

             <input type="text" placeholder="Last_name" class="input" id="lname" name="lname" style="border-radius:30px;"  value="<?php echo $row['lname']; ?>
"><br>
             <span id="message"></span><br><br>


             <input type="password" placeholder="Password" class="input" id="password" name="password" style="border-radius:30px;" value="<?php echo $row['password']; ?>
"  ><br>
             <span id="message1"></span><br><br>

              <label for="Image">image</label><br><br>
             <input type="file" class="input" name="image" style=" width:150px; height:30px;" ><br><br><br>
            
             <a href="http://localhost/6mid/updatebyuser.php">  <input type="submit" class="btn" name="submit" value="submit" style="border-radius:50px; width:150px; height:50px ;  background-color: rgb(28, 58, 97); font-size:20px"> <br></a>
            
           
            </div>
       
        </div>
    </section>
    </form>
    <a href="http://localhost/6mid/updatebyuser.php">  <input type="submit" class="btn" name="submit" value="Previous Page" style="border-radius:50px; width:150px; height:50px"> <br></a>
</body>
</html>