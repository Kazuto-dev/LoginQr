<?php

session_start(); // Start connect html and php

$con = mysqli_connect('localhost', 'root', ''); //connection to database

mysqli_select_db($con, 'inputs'); //registration is the database name

$name = $_POT['name']; //
$studentId = $_POST['studentId'];
$email = $_POST['email'];
$course = $_POST['course'];
$pass = $_POST['password']; //

$s = "SELECT * FROM infos WHERE studentId = '$studentId' && email = '$email'";// select email from DB

$result = mysqli_query($con, $s); //execute sql query
$num = mysqli_num_rows ($result); //Sql connection rows add and drop depend on the command


 
if ($num == 1) {

	$_SESSION['studentId'] = $studentId;
	$_SESSION['email'] = $email;
	echo "This one is taken, Create New!";

}
else{

		$reg = "insert into infos (name , studentId , email, course, password) values ('$name' , '$studentId', '$email', '$course', '$pass')";
		mysqli_query($con, $reg); //if your email is = 0 then your crendentials will inserted into the database

	   echo "Done Bitch, Look DB";
}
?>