<?php
include("connect.php");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}
mysqli_query($connect, "SET NAMES 'utf8'");

$manv = $_POST['manv'];
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST["capnhat"])) {
    $sql = "INSERT INTO admin VALUES ('$username','$manv','$password')";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:admin.php');
