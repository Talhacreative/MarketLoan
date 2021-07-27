<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pakistan textile</title>
    
    <link rel="icon" href="image/icon.png">
  </head>
  <body>

  <button onclick="window.print()" style=" margin-left:30px">Print record</button>
               <div class="card" style="margin-bottom: 100px;">
                   <div class="card-header mt-4">
                       <h4 class="cardtitle">Fetch or Search data by it cnic</h4>
                   </div>
                   <div class="card-body">
                       
                           <div class="col-md-6">
                               <form action="" method="post">
                               <div class="form-group">
                                   <input type="text" name="cnic" placeholder="Enter CNIC" class="from-control" required>
                               </div>
                               <button type="search" name="search_by_id" class="btn btn-primary">Search</button>
                               </form>
                           </div>
                       
                       <?php
                           include('connection.php');

if(isset($_POST['search_by_id']))
{
    $cnic = $_POST['cnic'];
    $query ="SELECT * FROM financial where cnic = '$cnic' ";
    $query_run =(mysqli_query($conn,$query));
   
?>

                       <div class="table_responsive">
                       <table class="table table-bordered">
  <thead>
    <tr>
    <th>Cnic</th>
                      
                      
                      <th>Username</th>
                      <th>Shop</th>
                      <th>Total Amount</th>
                      <th>Pay Amount</th>
                      <th>Remaining</th>
                      <th>Date</th>
                      <th>Delete</th>
                      <th>Updates</th>
                      <th>Report</th>
    </tr>
  </thead>
  <tbody>
      <?php
           if(mysqli_num_rows($query_run)>0){
            while( $row = mysqli_fetch_array($query_run))
            {

?>
    <tr>
                      <td><?php echo $row['cnic']; ?></td>

                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['shopname']; ?></td>
                        <td><?php echo $row['totalamount']; ?></td>
                        <td><?php echo $row['amountpay']; ?></td>
                        <td><?php echo $row['remainingamount']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        

                        <td><a href="delete.php?cnic=<?php echo $row['cnic']; ?>" class="btn btn-danger btn-sm text-light">Delete</a></td>
                        <td><a href="userupdate.php?cnic=<?php echo $row['cnic']; ?>" class="btn btn-success btn-sm text-light">Update</a></td>

                        <td><a href="report.php?cnic=<?php echo $row['cnic']; ?>" class="btn btn-success btn-sm text-light">Record</a></td>


                    </tr>
    <?php
          }
        
        }
        else
        {
            ?>
            <tr><td colspan="6">No record found</td></tr>
            <?php
        }
    ?>
  </tbody>
</table>
                       </div>
                       <?php

    }
                       ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
