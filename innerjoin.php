<!DOCTYPE html>
<html>
<head>
	<title>Finace Table</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="style.css">
      <title>Pakistan textile</title>
    
    <link rel="icon" href="image/icon.png">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS  "SELECT * FROM signup INNER JOIN finance_entry ON signup.cnic=finance_entry.cnic WHERE signup.cnic='$cnic'";      -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              User Finance Data</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Cnic</th>
                      <th>Image</th>
                      <th>FirstName</th>
                      <th>LastName</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Username</th>
                      <th>Shop</th>
                      <th>Total Amount</th>
                      <th>Pay Amount</th>
                      <th>Remaining</th>
                      <th>Date</th>
                      <th>Delete</th>
                      <th>Updates</th>

                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>Cnic</th>
                      <th>Image</th>
                      <th>FirstName</th>
                      <th>LastName</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Username</th>
                      <th>Shop</th>
                      <th>Total Amount</th>
                      <th>Pay Amount</th>
                      <th>Remaining</th>
                      <th>Date</th>
                      <th>Delete</th>
                      <th>Update</th>

                    </tr>
                  </tfoot>
                  <?php
                    include ('connection.php');

                    $record="SELECT * FROM user Right JOIN financial ON user.cnic=financial.cnic";

                    $x= (mysqli_query($conn, $record));

                    while ($row= mysqli_fetch_array($x)) {
                      ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row['cnic']; ?></td>
                        <td><img src="image/<?php echo $row['image']; ?>" style="width: 50px; height: 50px;"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>

                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['shopname']; ?></td>
                        <td><?php echo $row['totalamount']; ?></td>
                        <td><?php echo $row['amountpay']; ?></td>
                        <td><?php echo $row['remainingamount']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        

                        <td><a href="delete.php?cnic=<?php echo $row['cnic']; ?>" class="btn btn-danger btn-sm text-light">Delete</a></td>
                        <td><a href="userupdate.php?cnic=<?php echo $row['cnic']; ?>" class="btn btn-success btn-sm text-light">Update</a></td>


                    </tr>
                  </tbody>
                  

                  <?php

                    }


                    ?>
                </table>
              </div>
            </div>
            
          </div>

        </div>

</body>
</html>