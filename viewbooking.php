<html>
<?php
session_start();
include("connection.php");
$sql="SELECT * FROM booking order by booking_id ASC";
$result = mysqli_query($connect,$sql);
echo "<br><h2>TOTAL DOCTORS INFORMATIONS=<b>".mysqli_num_rows($result)."</b></h2><br>";
echo "<table>
<tr>
<th>Booking ID  </th>
<th>Patient ID  </th>
<th>Patient Name  </th>
<th>Patient Email  </th>
<th>Doctor ID  </th>
<th>Doctor Name  </th>
<th>Address  </th>
<th>Contact Number  </th>
<th>Email  </th>
<th>Specialized  </th>
<th>visiting days </th>
<th>visiting hours  </th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['booking_id'] . "</td>";
    echo "<td>" . $row['p_id'] . "</td>";
	echo "<td>" . $row['p_name'] . "</td>";
	echo "<td>" . $row['p_email'] . "</td>";
	echo "<td>" . $row['d_id'] . "</td>";
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
mysqli_close($connect);
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "location: adminview.php"); 
	}
?>
    <title> Doctor Views</title>
    <head>
        <link rel="stylesheet"  type="text/css" href="viewbookingstyle.css">
    </head>

</body>
<br>
<a href="patient.php">click to back</a>

</html>
        