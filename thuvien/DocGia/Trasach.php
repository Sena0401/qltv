<?php
include("connect.php");

$mamt = $_GET['mamt'];
$trangthai = $_GET['trangthai'];

$query = "UPDATE muontra SET trangthai='Đã Trả' WHERE mamt='$mamt'";
$ketqua = mysqli_query($connect, $query);

header('location:ShowSach.php');
