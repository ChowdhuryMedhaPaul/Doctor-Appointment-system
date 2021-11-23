<html>
<?php
session_start();
include("connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $p_name=$_SESSION['patient'];
$p_id=$_SESSION['p_id'];
$p_email=$_SESSION['p_email'];
$d_id=mysqli_real_escape_string($connect,$_POST['d_id']);
$d_name=mysqli_real_escape_string($connect,$_POST['d_name']);
$d_address=mysqli_real_escape_string($connect,$_POST['d_address']);
$d_number=mysqli_real_escape_string($connect,$_POST['d_number']);
$d_email=mysqli_real_escape_string($connect,$_POST['d_email']);
$specialized=mysqli_real_escape_string($connect,$_POST['specialized']);
$visitingdays=mysqli_real_escape_string($connect,$_POST['visitingdays']);
$visitinghours=mysqli_real_escape_string($connect,$_POST['visitinghours']);
$sql="UPDATE booking set p_id='$p_id',p_name='$p_name',p_email='$p_email',d_id='$d_id',d_name='$d_name',d_address='$d_address',d_number='$d_number',d_email='$d_number',specialized='$specialized',visitingdays='$visitingdays',visitinghours='$visitinghours'";
$result = mysqli_query($connect,$sql);


$sql1="SELECT * FROM booking order by booking_id ASC";
$result1 = mysqli_query($connect,$sql1);

echo "<br><h2>TOTAL DOCTORS INFORMATIONS=<b>".mysqli_num_rows($result1)."</b></h2><br>";
echo "<table>
<tr>
<th> patient ID </th>
<th> patient Name </th>
<th> patient Email </th>
<th>Doctor Name  </th>
<th>Address  </th>
<th>Contact Number  </th>
<th>Email  </th>
<th>Specialized  </th>
<th>visiting days </th>
<th>visiting hours  </th>

</tr>";
while($row = mysqli_fetch_array($result1)) {
    echo "<tr>";
    echo "<td>" . $row['p_id'] . "</td>";
	echo "<td>" . $row['p_name'] . "</td>";
	echo "<td>" . $row['p_email'] . "</td>";
    echo "<td>Dr. " . $row['d_name'] . "</td>";
	echo "<td>" . $row['d_address'] . "</td>";
	echo "<td>" . $row['d_number'] . "</td>";
	echo "<td>" . $row['d_email'] . "</td>";
	echo "<td>" . $row['specialized'] . "</td>";
	echo "<td>" . $row['visitingdays'] . "</td>";
	echo "<td>" . $row['visitinghours'] . "</td>";
    echo "</tr>";
}
echo "</table>";

}
mysqli_close($connect);
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "location: patient.php"); 
    }

?>
    <title> Doctor Views</title>
    <head>
        <link rel="stylesheet"  type="text/css" href="viewdoctorliststyle.css">
    </head>
</body>
</html>
        