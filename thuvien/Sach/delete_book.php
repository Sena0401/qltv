<?php
include('connect.php');

$masach = $_GET['masach'];
$tensach = $_GET['tensach'];


mysqli_query($connect, "DELETE FROM sach WHERE masach = '$masach'") ;

header('location:book.php');
