<?php
 include('connection.php');

 if(count($_POST)>0){// count go ha wo table ma data ko count krta ha
    $username=$_POST['username'];
    $cnic=$_POST['cnic'];
    $shopname=$_POST['shopname'];
$totalamount=$_POST['totalamount'];
$amountpay=$_POST['amountpay'];
$remainingamount=$_POST['remainingamount'];
$date=$_POST['date'];


 
 $up="UPDATE financial set username= '$username',shopname='$shopname',totalamount='$totalamount',amountpay='$amountpay',remainingamount='$remainingamount',date='$date' WHERE cnic='".$_POST['cnic']."'";
 
 
if(mysqli_query($conn,$up)){
    header('location:welcome.php');
}
else {
    echo "Data is not updated";
}
 }

 $record="SELECT * FROM financial WHERE cnic='".$_GET['cnic']."'";
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
    
    
</head>
<body style="background-color:lightblue">
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
    

        

           

             <img src="image/icon.png" alt="" style="border-radius:30px; height:160px ; background-color:lightblue"><br><br><br><br>

             <h1>CNIC :</h1>
             <input type="text"  placeholder="Cnic"  id="cnic" name="cnic"  style="border-radius:30px; font-size:20px " value="<?php echo $row['cnic']; ?>
" ><br>
             <span id="message2"></span><br><br>

             <h1>User Name :</h1>
             <input type="text" placeholder="User_name" class="input" id="username" name="username" style="border-radius:30px; font-size:20px"  value="<?php echo $row['username']; ?>
"><br>
             <span id="message"></span><br><br>

             <h1>Shop name :</h1>
             <input type="text" placeholder="shopname" class="input" id="shopname" name="shopname" style="border-radius:30px; font-size:20px"  value="<?php echo $row['shopname']; ?>
"><br>
             <span id="message"></span><br><br>

 
             <h1>Total Amount :</h1>
             <input type="text" placeholder="totalamount" class="input" id="totalmount" name="totalamount" style="border-radius:30px; font-size:20px" value="<?php echo $row['totalamount']; ?>
"  ><br>
             <span id="message1"></span><br><br>
             
             <h1>Amount Pay :</h1>
             <input type="text" placeholder="Amount Pay" class="input" id="Amount pay" name="amount Pay" style="border-radius:30px; font-size:20px" value="<?php echo $row['amountpay']; ?>
"  ><br>
<span id="message1"></span><br><br>
            
<h1>Remaining Amount :</h1>
<input type="text" placeholder="remainingamount" class="input" id="remainingmount" name="remainingamount" style="border-radius:30px; font-size:20px" value="<?php echo $row['remainingamount']; ?>
"  ><br>
<span id="message1"></span><br><br>


<h1>Date :</h1>
<input type="text" placeholder="Date" class="input" id="Date" name="date" style="border-radius:30px; font-size:20px" value="<?php echo $row['date']; ?>
"  ><br><br><br>
<button onclick="window.print()">Print this Report</button><br>
              
            
            
           
    
       
    </form>
        </body>
</html>