<?php
include('../connect.php');
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}
mysqli_query($connect, "SET NAMES 'utf8'");

$madg = $_POST['madg'];
$ngaytra  = $_POST['ngaytra'];
$mamt  = $_POST['mamt'];
$masach = $_POST['masach'];


if (isset($_POST["muon"])) {
    //    insert bảng mượn trả

    $sql = "INSERT INTO muontra VALUES('$mamt','$madg',NOW(),'$ngaytra','$masach')";
    $ketqua = mysqli_query($connect, $sql);


    
}
header("location: ../Sach/book.php");
