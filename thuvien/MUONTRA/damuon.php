<!DOCTYPE html>

<head>
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><img height="200px" width="200px" src="img/logo.png">
            </div>
            <div class="list-group list-group-flush">
                <a class="bi bi-house-door-fill list-group-item list-group-item-action list-group-item-light p-3"
                    href="../home.php"> &nbspTrang Chủ</a>
                <a class="bi bi-journal-plus list-group-item list-group-item-action list-group-item-light p-3" href="">
                    &nbspMượn Trả</a>
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3"
                    href="../Sach/book.php"> &nbspSách</a>
                <a class="bi bi-person-lines-fill list-group-item list-group-item-action list-group-item-light p-3"
                    href="../DocGia/docgia.php"> &nbspĐộc giả</a>
                <a class="bi bi-info list-group-item list-group-item-action list-group-item-light p-3" href="#!">
                    &nbspAbout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary bi bi-list" id="sidebarToggle"></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="logout.php">Đăng Xuất</a></li>

                        </ul>
                    </div>
                </div>
            </nav>

            <!-- content -->
            <?php
            include('../connect.php');
            $madg = $_GET['madg'];

            $query = "SELECT * FROM muontra WHERE muontra.madg ='$madg' ";
            $ketqua = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($ketqua);
            ?>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col"> Mã Mượn </th>
                        <th scope="col">Mã Độc Giả</th>
                        <th scope="col">Ngày Mượn</th>
                        <th scope="col">Ngày Trả</th>
                        <th scope="col">Trạng Thái</th>



                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                        while ($row = mysqli_fetch_array($ketqua)) {
                            echo "<tr>";
                            echo "<td>" . $row["mamt"] . "</td>";
                            echo "<td>" . $row["madg"] . "</td>";
                            echo "<td>" . $row["ngaymuon"] . "</td>";
                            echo "<td>" . $row["ngaytra"] . "</td>";
                            echo "<td>" . $row["trangthai"] . "</td>";
                            echo "<td><center><a class=\"text-decoration-none bi bi-journal-minus btn btn-danger \" href=\"../DocGia/Trasach.php?mamt=" . $row["mamt"] . "\"> Trả Sách</a> </center> </td>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- end content -->
    </div>
    </div>
</body>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>