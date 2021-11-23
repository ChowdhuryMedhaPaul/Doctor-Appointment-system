<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "admin";


$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($connect)
{
    echo "";

}

else{
    die("connection failed".mysqli_connect_error());
}

?>