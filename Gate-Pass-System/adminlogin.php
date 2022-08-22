<?php
session_start();
if(isset($_SESSION["mobile"])){
session_destroy();
}

include_once 'dbConnection.php';
$ref=@$_GET['q'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];




$result = mysqli_query($con,"SELECT * FROM admin WHERE mobile = '$mobile' and password = '$password'") or die('Error');

$count=mysqli_num_rows($result);



if($count==1)
{
while($row = mysqli_fetch_array($result)) {

	
	
}




header("location: viewvisitor.php");

}

else

header("location: admin.php");


?>