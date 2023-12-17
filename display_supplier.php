<?php

include 'connect.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmPro Display Supplier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

</head>
<body>

<div class="container">
<button class="btn btn-primary my-5"><a href="user_supplier.php "class="text-light">Add Supplier</a>

</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Supplier ID</th>
      <th scope="col">Supplier Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql="Select * from `supplier`";
$result=mysqli_query($con, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['Supplier_ID'];
        $supplier_name=$row['Supplier_Name'];
        $number=$row['Contact_Number'];
        $email=$row['Email'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$supplier_name.'</td>
        <td>'.$number.'</td>
        <td>'.$email.'</td>
        
        <td>
    <button class="btn btn-primary"><a href="update_supplier.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete_supplier.php?deleteid='.$id.'" class="text-light">Delete</a></button>
</td> 

      </tr>';
    }
}
 
?>


  </tbody>
</table>
</div>
    
</body>
</html>