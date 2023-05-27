<?php
include('../connect.php');
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}
$madg = $_POST['madg'];
$ngaytra  = $_POST['ngaytra'];
$mamt  = 1;
$masach = $_POST['masach'];
$mactmt = random_int(1, 100);


if ($_POST == ['muon']) {
    //    insert bảng mượn trả
    mysqli_query($connect, "INSERT INTO `muontra`(`mamt`, `madg`, `ngaymuon`, `ngaytra`, `masach`) 
                            VALUES ('$mamt','$madg','NOW()',''$ngaytra'','$masach')");
    $mamt  = $row['mamt'];

    //    insert bảng chi tiết mượn trả
    mysqli_query($connect, "INSERT INTO `chitietmuontra`(`mactmt`, `masach`, `mamt`, `trangthai`, `ngaytra`) 
                            VALUES ('$mactmt' ,'$masach','$mamt','Đã Mượn','$ngaytra')");
}
header("location: vaymuon.php");
?>