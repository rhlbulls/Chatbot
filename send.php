<?php
session_start();
$con = mysqli_connect('localhost','root','rahul2000');
mysqli_select_db($con,'contactus');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$s = "SELECT * FROM messages WHERE name = '$name'";
$result=mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num==1)
{
    header('location:temp.html');
}
else
{
    $reg="INSERT INTO messages (name,email,messages) VALUES ('$name','$email','$message')";
    mysqli_query($con,$reg);
    header('location:temp.html');
}
?>