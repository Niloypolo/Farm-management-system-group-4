<?php

include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `manager` where Manager_ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Manager_Name'];
$number=$row['Contact_Number'];


if(isset($_POST['submit'])){
  $name=$_POST['Manager_Name'];
  $number=$_POST['Contact_Number'];

  $sql="update `manager` set Manager_ID='$id',Manager_Name='$name', Contact_Number='$number' where Manager_ID=$id";



  $result=mysqli_query($con,$sql);
  if($result){
    header('location:display.php');
    

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

    <title>FarmPro Update</title>
  </head>
  <body>
    
    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="Manager_Name" autocomplete="off">
  </div>

  <div class="form-group">
    <label >Contact Number</label>
    <input type="text" class="form-control"  placeholder="Enter Number" name="Contact_Number" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    </div>
   
  </body>
</html>