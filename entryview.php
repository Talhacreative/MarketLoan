<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakistan textile</title>
    
    <link rel="icon" href="image/icon.png">
</head>
<body style="background-color:gray">
<h1 style="text-align:center; font-size:50px; Color:Orange"> Update By Admin</h1>
<center><img src="image/icon.png" alt="" style="border-radius:30px; height:200px"></center>
    <table border="3" style="width: 1180px; height: 280px; margin-left:0px; margin-top:0px; color:black; margin-bottom:30px">
   <tr style="font-size:40px; background-color: rgb(28, 58, 97)">
   <td><center>image</center></td>
       <td><center>username</center></td>
       <td><center>cnic</td>
       <td><center>shopname</center></td>
       <td><center>Totalamount</center></td><br>
       <td><center>amountpay</center></td><br>
       <td><center>Remaining Amount</center></td><br>
       <td><center>Date</center></td><br>
       <td><center>email</center></td><br>
       <td><center>Delete</center></td><br>
       <td><center>Update</center></td><br>
       
   </tr>
   <?php
    include('connection.php');
    $record="SELECT * FROM user INNER JOIN financial ON user.cnic=financial.cnic";
    $x=(mysqli_query($conn,$record));
    while($row=mysqli_fetch_array($x)){
        ?>
        
    <tr>
    <td><img src="image/<?php echo $row['image']; ?>" style="width: 50px; height: 50px;"></td>
    <td> <center><?php echo $row['username']; ?></center></td>
        <td> <center><?php echo $row['cnic']; ?></center></td>
        <td> <center><?php echo $row['shopname']; ?></center></td>
        <td> <center><?php echo $row['totalamount']; ?></center></td>
        <td> <center><?php echo $row['amountpay']; ?></center></td>
        <td> <center><?php echo $row['remainingamount']; ?></center></td>
        <td> <center><?php echo $row['date']; ?></center></td>
        <td> <center><?php echo $row['email']; ?></center></td>
    
       
        <td><center><a href="entrydelete.php? cnic=<?php echo $row['cnic']; ?>" ><input type="submit" class="btn" name="submit" value="DELETE" style="border-radius:50px; width:110px; height:30px"> <br></a></center></td><br>
        <td><center><a href="combineupdate.php? cnic=<?php echo $row['cnic']; ?> "><input type="submit" class="btn" name="submit" value="UPDATE" style="border-radius:50px; width:110px; height:30px"> <br></a></center>  </td>
    </tr>    
    <?php
    }
   ?>
</table>
<a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Main" style="border-radius:50px; width:150px; height:50px"> <br></a>

</body>
</html>
