<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','aroy','aroy','COMP3540_aroy');

if(isset($_POST['user'])){
$name = $_POST['user'];
}

if (isset($_POST['password'])){
$pass = $_POST['password'];
}

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username already taken";
} else {
	$reg = " insert into usertable(name, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>