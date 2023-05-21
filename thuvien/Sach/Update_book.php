<?php
include("connect.php");

$masach = $_POST['masach'];
$tensach = $_POST['tensach'];
$matheloai = $_POST['matheloai'];
$tacgia = $_POST['tacgia'];
$manxb = $_POST['manxb'];
$namxuatban = $_POST['namxuatban'];
$hientrang = $_POST['hientrang'];

if (isset($_POST["capnhat"])) {
    $query = "UPDATE sach SET masach='$masach', tensach='$tensach', matheloai='$matheloai', tacgia='$tacgia',
                              manxb='$manxb', namxuatban='$namxuatban', hientrang='$hientrang' WHERE masach='$masach'";
    $ketqua = mysqli_query($connect, $query);
}

echo "<script>";
if ($ketqua) {
    echo  "alert ('Cập nhật thành công !!');";
} else {
    echo "alert ('Cập nhật không thành công !!');";
}
echo "window.location='book.php';";
echo "</script>";
