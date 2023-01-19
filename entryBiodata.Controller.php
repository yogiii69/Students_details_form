<?php
include_once "./config.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$date=$_POST["date"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$hobby=$_POST["hobby"];

$hobbyInString=serialize($hobby);

$sql="Insert into details(first_name,last_name,email,dob,gender,address,hobbies) values('$fname','$lname','$email','$date','$gender','$address','".$hobbyInString."')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./biodata.php");
}
else{
    echo "Unsuccessful!!";
}


?>