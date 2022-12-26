<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$id = $_POST["id1"];
$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];
$contact2 = $_POST['contact1'];
$Gender2 = $_POST['gender1'];
$course2 = $_POST['course1'];
$Education = $_POST['edu1'];


$query = "UPDATE `signup` SET `name`='$name2',`email`='$email2',`password`='$password2',`contact`='$contact2',`Gender`='$Gender2',`course`='$course2',`edu`='$Education' WHERE id= $id";

if (mysqli_query($conn, $query)) {
    echo 1;
}


mysqli_close($conn);

?>