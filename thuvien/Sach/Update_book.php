<?php
   include("connect.php");

$username = $_POST['username'];
$manv = $_POST['manv'];
$password = $_POST['password'];

if (isset($_POST["capnhat"])) {
    $query = "UPDATE admin SET username='$username', password ='$password' WHERE manv='$manv'";
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
?>