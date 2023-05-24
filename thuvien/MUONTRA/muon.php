<?php
include('../connect.php');

$id = $_POST['selector'];
$madg = $_POST['madg'];
$ngaytra  = $_POST['ngaytra'];

if ($id == '') {
    header("location: vaymuon.php");

    mysqli_query($connect, "insert into muontra (madg,ngaymuon,ngaytra) values ('$madg',NOW(),'$ngaytra')");
    $query = mysqli_query($connect, "select * from muontra order by mamt DESC");
    $row = mysqli_fetch_array($query);
    $mamt  =$row['mamt'];



    $N = count($id);
    for ($i = 0; $i < $N; $i++) {
        mysqli_query($connect, "insert chitietmuontra (masach,mamt,trangthai) values('$id[$i]','$mamt','pending')");
    }
    header("location: vaymuon.php");
}
