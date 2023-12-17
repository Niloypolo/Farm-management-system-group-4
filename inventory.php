<?php

include 'connect.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

</head>
<body>

<div class="container">
<!-- <button class="btn btn-primary my-5"><a href="user.php "class="text-light">Add Inventory</a>

</button> -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Inventory ID</th>
      <th scope="col">Room Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Quality</th>
      <th scope="col">Supplier_ID</th>
      <th scope="col">Owner_ID</th>
      <th scope="col">Purchase_Date</th>
      <th scope="col">Expired_Date</th>
      
     
    </tr>
  </thead>
  <tbody>

<?php

$sql="Select * from `inventory`";
$result=mysqli_query($con, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['Inventory_ID'];
        $room=$row['Room_Name'];
        $Quantity=$row['Quantity'];
        $Quality=$row['Quality'];
        $Supplier=$row['Supplier_ID'];
        $Owner_ID=$row['Owner_ID'];
        $Purchase_Date=$row['Purchase_Date'];
        $Expired_Date=$row['Expired_Date'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$room.'</td>
        <td>'.$Quantity.'</td>
        <td>'.$Quality.'</td>
        <td>'.$Supplier.'</td>
        <td>'.$Owner_ID.'</td>
        <td>'.$Purchase_Date.'</td>
        <td>'.$Expired_Date.'</td>
        
       <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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