<?php
include("connection.php");
$d_id=$_GET['d_id'];
$sql="DELETE from booking where d_id='$d_id'";
$data = mysqli_query($connect,$sql);

if($data)
{
    echo "Successful deleted";
    header("location:patient.php");
}
else{
    echo "Failed";
   
}

?>