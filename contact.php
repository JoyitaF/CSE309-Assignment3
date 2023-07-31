<?php
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['message'];
echo $fname;
echo $lname;
echo $email;
echo $phone;
echo $msg;

/*Attempt MySQL server connection assuming default settting (user 'root' with not password) */
$link = mysqli_connect("localhost", "root", "", "contactDB");

//Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

//Attempt insert query execution
$sql = "INSERT INTO messageTable (firstName, lastName, email, phone, msg) VALUES ('$fname', '$lname', '$email', '$phone', '$msg')";
if(mysqli_query($link, $sql)){
    echo "Message Received!";
} else{
    echo "ERROR: Could not execute the message" . mysqli_error($link);
}

//Close connection
$link->close();

?>