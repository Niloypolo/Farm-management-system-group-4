<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $supplier_name=$_POST['Supplier_Name'];
  $number=$_POST['Contact_Number'];
  $email=$_POST['Email'];

  $sql="insert into `supplier` (Supplier_Name,Contact_Number, Email) values('$supplier_name','$number','$email')";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:display_supplier.php');

  }else{
    die(mysqli_error($con));
  }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>FarmPro Supplier User</title>
  </head>
  <body>
    
 
    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label >Supplier Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="Supplier_Name" autocomplete="off">
  </div>

  <div class="form-group">
    <label >Contact Number</label>
    <input type="text" class="form-control"  placeholder="Enter Number" name="Contact_Number" autocomplete="off">
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control"  placeholder="Enter Email" name="Email" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
   
  </body>
</html>