<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="form.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Talha Khan</title>
    
    <link rel="icon" href="image/icon.png">


</head>
<body style="background-color:grey">
    <script>
function myfun(){
            var b = /^[A-Za-z]+$/;
            var a = document.getElementById("name").value;
            var c = document.getElementById("password").value;
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
            else{
       alert("Your data has been inserted");
       return true;
     }
            }
        
        </script>
    <form action="image.php" method="POST" enctype="multipart/form-data" onsubmit="return myfun()" style="margin-top:25px;"> 
    <section class="intro">

        <div class="inner" >

            <div class="content" style="background-color:lightblue">

             <img src="image/icon.png" alt="" style="border-radius:30px; height:200px"><br><br>

             <input type="text" placeholder="Firstname" class="input" id="name" name="name" style="border-radius:30px;"><br>
             <span id="message"></span><br>
        
             <input type="text" placeholder="LastName" class="input" id="lname" name="lname" style="border-radius:30px;"><br>
             <span id="message"></span><br>

             <input type="text" placeholder="Cnic" class="input" id="cnic" name="cnic" style="border-radius:30px;"><br>
             <span id="message"></span><br>

             <input type="text" placeholder="Email" class="input" id="email" name="email" style="border-radius:30px;"><br>
             <span id="message"></span><br>

             <input type="password" placeholder="Password" class="input" id="password" name="password" style="border-radius:30px; background-color:orange"><br>
             <span id="message1"></span>
              
             <label for="image">Image</label>
				          <span id="Image" class="required"></span><br>
				          <input type = "file" id="image" name="image"><br><br><br><br>
                          
             

             

              
            
             <a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Submit" style="border-radius:50px; width:150px; height:50px"> <br></a>
            
           
            </div>
       
        </div>
    </section>
    </form>
    <br><br><br><br><br><br><br>
    
<section style="background:#fff; margin-top:-20px;">
<h1 style="text-align:center; background:#36304A;color:#fff; padding:2px;margin-bottom:1px;">Members of our Club</h1>
<table style="margin-left:0px;text-align:center; width:100%;">
   <thead style="background:#F5F5F5;">
       <td style="margin-left:70px">Id</td>
       <td>Name</td>
       <td>LastName</td>
       <td>Cnic</td>
       
       
   </thead>
   <?php
    include('connection.php');
    $record="SELECT * FROM user";
    $x=(mysqli_query($conn,$record));
    while($row=mysqli_fetch_array($x)){
        ?>
     <tbody>   
    <tr>
    <td style="margin-left:70px">
     <?php echo $row['name']; ?></td>
        <td> <?php echo $row['lname']; ?></td>

        <td> <?php echo $row['email']; ?></td>

        <td> <?php echo $row['cnic']; ?></td>
       
       
       
    </tr>  
    </tbody>  
    <?php
    }
   ?>
</table>
</section>
<a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Main" style="border-radius:50px; width:150px; height:50px; margin-top:20px"> <br></a>
<script>
$('.counter-count').each(function () {
        $(this).prop('Counter',1).animate({
            Counter: $(this).text()
        }, {
            duration: 200000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    </script>
</body>
</html>