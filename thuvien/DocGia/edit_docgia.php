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


$madg = $_GET['madg'];

$query = "SELECT * FROM docgia WHERE madg ='$madg'";
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
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3" href="../Sach/book.php"> &nbspSách</a>
                <a class="bi bi-person-lines-fill list-group-item list-group-item-action list-group-item-light p-3" href="docgia.php"> &nbspĐộc giả</a>
                <a class="bi bi-info list-group-item list-group-item-action list-group-item-light p-3" href="#!"> &nbspAbout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="bi bi-list btn btn-primary" id="sidebarToggle"></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="logout.php">Đăng Xuất</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- content -->
            <form class="p-md-3" action="Update_docgia.php" method="post">
                <h3 class="text-center">Chỉnh Sửa Thông Tin Độc Giả</h3>

                <div class="mb-2">
                    <label for="exampleInputMaNV" class="form-label">Mã Độc Giả</label>
                    <input class="form-control" type="text" name="madg" placeholder="Mã Sách" value="<?php echo $row['madg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Tên Sách</label>
                    <input class="form-control" type="text" name="tendg" placeholder="Tên Độc Giả" value="<?php echo $row['tendg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Năm Xuất Bản</label>
                    <input class="form-control" type="text" name="diachidg" placeholder="Địa Chỉ" value="<?php echo $row['diachidg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Tình Trạng</label>
                    <input class="form-control" type="number" name="sothe" placeholder="Số Thẻ" value="<?php echo $row['sothe']; ?>">
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" name="capnhat">
                </div>
            </form>
</body>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>