<!DOCTYPE html>

<head>
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<?php
include('connect.php');


$manv = $_GET['manv'];

$query = "SELECT * FROM admin WHERE manv ='$manv'";
$ketqua = mysqli_query($connect, $query);
$row = mysqli_fetch_array($ketqua);
?>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><img height="200px" width="200px" src="img/logo.png"></div>
            <div class="list-group list-group-flush">
                <a class="bi bi-house-door-fill list-group-item list-group-item-action list-group-item-light p-3" href="home.php"> &nbspTrang Chủ</a>
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3" href="#!"> &nbspSách</a>
                <a class="bi bi-person-lines-fill list-group-item list-group-item-action list-group-item-light p-3" href="docgia/docgia.php"> &nbspĐộc giả</a>
                <a class="bi bi-info list-group-item list-group-item-action list-group-item-light p-3" href="#!"> &nbspAbout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary bi bi-list" id="sidebarToggle"></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="logout.php">Đăng Xuất</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-center p-md-2">Chỉnh Sửa Thông Tin Đăng Nhập Vào Trang Web</h1>


            <form class="p-md-3" action="Update_admin.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">UserName</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputMaNV" class="form-label">Mã nhân Viên</label>
                    <input  class="form-control" type="text" name="manv"  value="<?php echo $row['manv']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>">
                </div>
                <input class="btn btn-primary" type="submit" name="capnhat" value="Cập Nhật Lớp">
            </form>
</body>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>