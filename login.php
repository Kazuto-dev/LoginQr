<?php
session_start();

$con = mysqli_connect('localhost', 'root', ''); // connection database

mysqli_select_db($con, 'inputs'); //Selecting database

$studentId = $_POST['studentId']; //Student ID
$pass = $_POST['password']; //POST pass

$s = "SELECT * FROM infos WHERE studentId = '$studentId' && password = '$pass'";

$result = mysqli_query($con, $s); 
$num = mysqli_num_rows ($result); 

if($num==1){

       $_SESSION['studentId'] = $studentId;
       $_SESSION['password'] = $pass;

        header("location: code.php"); //if email and pass is = 1 then successful login

} 
else{

       echo "Check your credentials if corrent or go to Signup page!"; // if your credentials is = 0 u cant log in

    }
?>