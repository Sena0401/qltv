<?php
include("connect.php");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}
mysqli_query($connect, "SET NAMES 'utf8'");

$masach = $_POST['masach'];
$tensach = $_POST['tensach'];
$matheloai = $_POST['matheloai'];
$tacgia = $_POST['tacgia'];
$manxb = $_POST['manxb'];
$namxuatban = $_POST['namxuatban'];
$hientrang = $_POST['hientrang'];

if (isset($_POST["capnhat"])) {
    $sql = "INSERT INTO sach VALUES ('$masach','$tensach','$matheloai','$tacgia','$manxb','$namxuatban','$hientrang')";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:book.php');
