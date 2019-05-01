<?php
include_once 'config.php';
$sen=$_POST['sender'];
$rec=$_POST['receicer'];
$msg=$_POST['Message'];
$stmt=mysqli_prepare($con,"Insert into Messages values ('$sen','$rec','$msg')");
mysqli_execute($stmt);
header("Location:ViewMessages.php?sender=all");
?>