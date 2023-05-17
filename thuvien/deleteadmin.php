<?php
include('connect.php');

$manv = $_GET['manv'];

mysqli_query($connect, "delete from admin where manv='$manv'") ;

header('location:user.php');
