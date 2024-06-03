<?php
require 'function.php';

$row = $_GET['fullname'];
mysqli_query($conn, "DELETE FROM users WHERE fullname='$row'");
header("location: hlmnadmin.php");

?>