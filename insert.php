<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "Employee";
$con= new mysqli($hostname,$username,$password,$db);
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}
if(isset($_POST["submit"])){
$RegNo = $_POST["RegNo"];
$FirstName = $_POST['FirstName'];
$DOB = $_POST['DOB'];
$course = $_POST['course'];
$Gender = $_POST['Gender'];

$sql= "INSERT INTO tblemp VALUES('$RegNo','$FirstName','$DOB','$course','$Gender')";
if($con->query($sql))
{
echo "<script>alert('Record inserted ')</script>";
}
else {
echo "<script>alert('Record insert failed ')</script>";
}
$con->close();
}
?>
