<?php

include 'connect.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmPro Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

</head>
<body>

<div class="container">
<button class="btn btn-primary my-5"><a href="user.php "class="text-light">Add Manager</a>

</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Manager ID</th>
      <th scope="col">Manager Name</th>
      <th scope="col">Contact Number</th>
     
    </tr>
  </thead>
  <tbody>

<?php

$sql="Select * from `manager`";
$result=mysqli_query($con, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['Manager_ID'];
        $name=$row['Manager_Name'];
        $number=$row['Contact_Number'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$number.'</td>
        
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