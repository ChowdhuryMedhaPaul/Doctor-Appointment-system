<html>
<?php
session_start();
include("connection.php");
$sql="SELECT * FROM doctor order by d_id ASC";
$result = mysqli_query($connect,$sql);
echo "<br><h2>TOTAL DOCTORS INFORMATIONS=<b>".mysqli_num_rows($result)."</b></h2><br>";
echo "<table>
<tr>
<th>Doctor Name  </th>
<th>Address  </th>
<th>Contact Number  </th>
<th>Email  </th>
<th>Specialized  </th>
<th>Visiting days </th>
<th>Visiting hours  </th>
<th>Available  </th>
<th> Operations </th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo '<tr>';
	
    echo "<td>Dr. " . $row['d_name'] . "</td>";
	echo "<td>" . $row['d_address'] . "</td>";
	echo "<td>" . $row['d_number'] . "</td>";
	echo "<td>" . $row['d_email'] . "</td>";
	echo "<td>" . $row['specialized'] . "</td>";
	echo "<td>" . $row['visitingdays'] . "</td>";
	echo "<td>" . $row['visitinghours'] . "</td>";
	echo "<td>" . $row['available'] . "</td>";
	echo '<td>
	<form action="update.php" method="post">
	<input type="hidden"  name ="d_id" value="'.$row['d_id'].'">
	<input type="hidden"  name ="d_name" value="'.$row['d_name'].'">
	<input type="hidden"  name ="d_address" value="'.$row['d_address'].'">
	<input type="hidden"  name ="d_number" value="'.$row['d_number'].'">
	<input type="hidden"  name ="d_email" value="'.$row['d_email'].'">
	<input type="hidden"  name ="specialized" value="'.$row['specialized'].'">
	<input type="hidden"  name ="visitingdays" value="'.$row['visitingdays'].'">
	<input type="hidden"  name ="visitinghours" value="'.$row['visitinghours'].'">
	<input type="submit" value="update">
	</form>
	</td>';
   echo '</tr>';
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
        <link rel="stylesheet"  type="text/css" href="viewdoctorliststyle.css">
    </head>

</body>
</html>
        

