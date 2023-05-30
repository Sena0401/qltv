<?php
include('connect.php');

$masach = $_GET['masach'];
$mamt = $_GET['mamt'];

mysqli_query($connect, "DELETE FROM sach WHERE masach = '$masach'");
// mysqli_query($connect, "DELETE FROM sach,muontra WHERE mamt = '$mamt' and sach.masach = muontra.masach ");

header('location:book.php');
