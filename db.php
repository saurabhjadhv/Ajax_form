<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$name2 = $_POST['name'];
$email2 = $_POST['email'];
$password2 = $_POST['password'];
$contact2 = $_POST['contact'];
$Gender2 = $_POST['gender'];
$course2 = $_POST['course'];
$Education = $_POST['edu'];



$sql = "select * from `signup` where email = '$email2'";
$res = mysqli_query($conn, $sql);


$num = mysqli_num_rows($res);
if ($num > 0) {
    echo "Email already exists";
} else
    $query = "insert into `signup`(name, email, password, contact, gender, course , edu) values ('$name2', '$email2', '$password2','$contact2','$Gender2', '$course2', '$Education')";

if (mysqli_query($conn, $query)) {
    echo "hogaya";
}




?>