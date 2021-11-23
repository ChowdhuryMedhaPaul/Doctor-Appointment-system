<?php
 session_start();
 include ("connection.php");
 $d_id=$_POST['d_id'];
$sql="SELECT * from doctor where d_id='$d_id'";
 $result=mysqli_query($connect,$sql);
 while($res=mysqli_fetch_array($result))
 {

	$d_name=$res['d_name'];
	$d_address=$res['d_address'];
	$d_number=$res['d_number'];
	$d_email=$res['d_email'];
	$specilized=$res['specialized'];
	$visitingdays=$res['visitingdays'];
	$visitinghours=$res['visitinghours'];
	$available=$res['available'];
 }
 ?>

<html>


<title>update Docotors</title>
<head>
    <link  rel="stylesheet" type="text/css" href="adddoctorstyle.css">
</head>

<body>
<header>
<h6 class="hearder">Update <span>Doctor Informations</span></h6>
</header>

 <form  method="POST">

 <input type="hidden" name="d_id" value="<?php echo $d_id; ?>"/>

	<div class="name">
		<label>Name</label>
		<input type="text" name="d_name" value="<?php echo $d_name; ?>"/>


	</div>

    
    <div class="address">
		<label>Address</label>
		<input type="text" name="d_address" value="<?php echo $d_address; ?>"/>

	</div>

    
    <div class="number">
		<label>Number</label>
		<input type="text" name="d_number" value="<?php echo $d_number; ?>"/>


	</div>


	<div class="email">
		<label>Email</label>
		<input type="text" name="d_email" value="<?php echo $d_email; ?>"/>

	</div>


    <div class="specialized">
	<label>Specilized</label>
	   	<select name="specialized" class="xd" value="<?php echo $specialized; ?>">
	   		<option value="Orthopedic" >Orthopedic</option>
	   		<option value="Heart Surgeon">Heart Surgeon</option>
	   		<option value="Dentist">Dentist</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>

	   		</select>
			   </div>

			   <div class="visitingdays">
		<label>VisitDays</label>
		<input type="text" name="visitingdays" value="<?php echo $visitingdays; ?>"/>

	</div>

	<div class="visitinghours">
		<label>VisitHours</label>
		<input type="text" name="visitinghours" value="<?php echo $visitinghours; ?>"/>

	</div>
	<div class="available">
		<label>available</label>
		<input type="text" name="available" value="<?php echo $available; ?>"/>

	</div>
    
           <div class="btn">
		<input type="submit" name="submit" class="btn" value="update"/>
	</div>
	
</form>


<?php
   if(isset($_POST['submit']))
   {
	$d_id=$_POST['d_id'];
	$d_name = $_POST['d_name'];
	$d_address = $_POST['d_address'];
	$d_number = $_POST['d_number'];
	$specialized = $_POST['specialized'];
	$visitingdays=$_POST['visitingdays'];
	$visitinghours=$_POST['vistinghours'];
	$available=$_POST['available'];

	$sql1=mysqli_query($connect,"UPDATE doctor SET  d_name='$d_name', d_address='$d_address',d_number='$d_number',d_email='$d_email',specialized='$specialized',visitingdays='$visitingdays',visitinghours='$visitinghours',avialable='$available' where d_id='$d_id'");

    $data= mysqli_query($connect,$sql1);
    
    if($data){
	  echo "updated";
	  header("location: adminview.php");
  }
  else{
	  echo "Failed";
	  header("location: update.php");
  }

}
else
{
    echo "";
}

?>

</body>

</html>