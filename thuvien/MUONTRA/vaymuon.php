<!DOCTYPE html>

<head>
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<?php
include('../connect.php');


$masach = $_GET['masach'];

$query = "SELECT * FROM sach WHERE masach ='$masach'";
$ketqua = mysqli_query($connect, $query);
$row = mysqli_fetch_array($ketqua);
?>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><img height="200px" width="200px" src="img/logo.png"></div>
            <div class="list-group list-group-flush">
                <a class="bi bi-house-door-fill list-group-item list-group-item-action list-group-item-light p-3" href="../home.php"> &nbspTrang Chủ</a>
                <a class="bi bi-journal-plus list-group-item list-group-item-action list-group-item-light p-3" href=""> &nbspMượn Trả</a>
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3" href="../Sach/book.php"> &nbspSách</a>
                <a class="bi bi-person-lines-fill list-group-item list-group-item-action list-group-item-light p-3" href="#!"> &nbspĐộc giả</a>
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

            <!-- content -->
            <form class="p-md-3" action="muon.php" method="post">
                <h3 class="text-center">Mượn Sách</h3>

                <div class="mb-3">
                    <label for="exampleInput" class="form-label">Mã Mượn Trả</label>
                    <input class="form-control" type="text" name="mamt" placeholder="Mã Mượn Trả">
                </div>
                <div class="mb-3">
                    <div class="control-group">
                        <label class="control-label" for="inputdocgia">Tên Độc Giả</label>
                        <select class="form-select" name="madg">
                            <option></option>
                            <?php
                            include("../connect.php");
                            $dg_query = mysqli_query($connect, "select * from docgia");
                            while ($dg_row = mysqli_fetch_array($dg_query)) {
                            ?>
                                <option value="<?php echo $dg_row['madg']; ?>"><?php echo $dg_row['tendg']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Ngày Trả</label>
                    <input class="form-control" type="date" name="ngaytra" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Mã Sách Bạn Mượn</label>
                    <input class="form-control" type="text" name="masach" value="<?php echo $row['masach']; ?>">
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" name="muon" value="Mượn Sách">
                </div>
            </form>
</body>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>