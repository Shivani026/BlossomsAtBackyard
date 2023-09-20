<?php

session_start();


$con = mysqli_connect('localhost' , 'root');
if($con){
	header("location:feedback.php");
}else{
	echo "no connection...";
}

mysqli_select_db($con, 'userdata');

$name = $_POST['name'];
$em = $_POST['email'];
$cont = $_POST['contact'];
$com = $_POST['comment'];


$q = "select * from feedbackdata where name = '$name' && email = '$em' && contact = '$cont'  && comment = '$com'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"data already taken";
}else{
	$qy = "insert into feedbackdata(name, email, contact, comment) values ('$name' , '$em' , '$cont' , '$com')";
	mysqli_query($con, $qy);
}
?>