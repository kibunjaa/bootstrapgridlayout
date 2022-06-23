<?php
$response=""; 
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitbutton"]))
{
    //1. fetch form data
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    //2. submit form data
    $insertData = mysqli_query($conn,"INSERT INTO contactus(firstname,lastname,phonenumber,email,message) VALUES('$firstname','$lastname','$phonenumber','$email','$message') ");

if($insertData)
{
    $response= "Data submitted successfully";
} 
else{
    $response= "Error occurred";
}
}
?>