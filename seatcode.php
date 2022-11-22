<?php
session_start();

$con = mysqli_connect('localhost', 'root', ''); // connection database

mysqli_select_db($con, 'seatcode'); //Selecting database

$seatCodeId = $_GET['seatCodeId']; //Student ID

$s = "SELECT * FROM codes WHERE code = '$seatCodeId' ";

$result = mysqli_query($con, $s); 
$num = mysqli_num_rows ($result); 

if($num == 1){

       $_SESSION['seatCodeId'] = $seatCodeId;
        echo "Well Done"; //if code is = 1 then booked successfully

}

else{

       echo "Check your Seatcode and Try again!"; // if your credentials is = 0 u cant log in

    }
?>