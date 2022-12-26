<?php
include 'dataFetch.php';

$id = $_GET['id'];

$q = "DELETE FROM `signup` WHERE id=$id";
//print_r($q);
$a = mysqli_query($conn, $q);
// print_r($a);
header('location:form.php');
exit();

?>