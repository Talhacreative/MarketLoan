<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Pakistan textile</title>
    
    <link rel="icon" href="image/icon.png">
    <link rel="stylesheet" href="entry.css">
</head>
<body style="background-color:grey">
  <h1 style="color:blue; text-align:center; margin-top:20px"> Form Fill By Admin</h1>
  <center><img src="image/icon.png" alt="" style="border-radius:30px; height:200px"></center>
<form action="entryinsert.php" method="POST" class="form" enctype="multipart/form-data" onsubmit="return validation()" style="padding-left:20px; background-color:lightblue">
              <div class="row">
                <div class="col-sm-6">

                  <h4 style="color:darkblue">User Name</h4>
                  <span id="username" class="required"></span><br>
                  <input type="text" id="username" name ="username" placeholder="enter Username"><br><br>
                  
                  <h4 style="color:darkblue">CNIC</h4>
                  <span id="cnic" class="required"></span><br>
                  <input type="text" id="cnic" name ="cnic" placeholder="enter CNIC"><br><br>

                  <h4 style="color:darkblue">Shop Name </h4>
                  <span id="shop" class="required"></span><br>
                  <input type="text" id="shop" name ="shop" placeholder="enter Total Amount"><br><br>

                  <h4 style="color:darkblue">Total Amount</h4>
                  <span id="totalamount" class="required"></span><br>
                  <input type="text" id="totalamount" name ="totalamount" placeholder="enter Total Amount"><br><br>
                  
                  
                </div>
                <div class="col-sm-6">

                <h4 style="color:darkblue">Amount Pay</h4>
                  <span id="amountpay" class="required"></span><br>
                  <input type="text" id="amountpay" name ="amountpay" placeholder="enter Amount Pay"><br><br>

                  

                  <h4 style="color:darkblue">Date</h4>
                  <span id="Datebirth" class="required"></span><br>
                  <input type = "date" id="date"  name="date" placeholder = "enter Date" ><br><br>


                  <input type="submit" name="submit" value="Submit" style="color: blue; backgroundcolor: darkblue">

                </div>
              </div>
            </form>
</body>
</html>