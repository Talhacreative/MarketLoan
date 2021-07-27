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
    <form action="email.php" method="POST" enctype="multipart/form-data" onsubmit="return myfun()" style="margin-top:25px;"> 
    <section class="intro">

        <div class="inner" >

            <div class="content" style="background-color:lightblue">

            

             <input type="text" placeholder="Email" class="input" id="email" name="email" style="border-radius:30px;"><br>
             <span id="message"></span><br><br><br><br><br>

            

             

              
            
             <a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Send Mail" style="border-radius:50px; width:150px; height:50px"> <br></a>
            
           
            </div>
       
        </div>
    </section>
    </form>
    <br><br><br><br><br><br><br>
    

<a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Main" style="border-radius:50px; width:150px; height:50px; margin-top:20px"> <br></a>

</body>
</html>