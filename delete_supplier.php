<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `supplier` where Supplier_ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_supplier.php');
    }else{
        die(mysqli_error($con));
    }
}

?>