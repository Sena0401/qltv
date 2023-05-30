<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />



    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><img height="200px" width="200px" src="img/logo.png"></div>
            <div class="list-group list-group-flush">
                <a class="bi bi-house-door-fill list-group-item list-group-item-action list-group-item-light p-3 " href="../home.php"> &nbspTrang Chủ</a>
                <a class="bi bi-person-fill list-group-item list-group-item-action list-group-item-light p-3" href="../admin.php"> &nbspUser</a>
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3" href="../Sach/book.php"> &nbspSách</a>
                <a class="bi bi-person-lines-fill list-group-item list-group-item-action list-group-item-light p-3" href="docgia.php"> &nbspĐộc giả</a>
                <a class="bi bi-info list-group-item list-group-item-action list-group-item-light p-3" href=""> &nbspAbout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="bi bi-list btn btn-primary" id="sidebarToggle"></button>
                    <a class="ms-2 bi bi-arrow-return-left btn btn-info" href="docgia.php"></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item "><a class="nav-link" href="../logout.php">Đăng Xuất</a></li>


                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container-fluid ">
                <h1 class="text-center">Danh Sách Mượn Sách</h1>
                <?php
                include("connect.php");
                $query = "SELECT * FROM sach,docgia,muontra WHERE muontra.madg = docgia.madg AND sach.masach = muontra.masach";
                $ketqua = mysqli_query($connect, $query);
                $num = mysqli_num_rows($ketqua);
                $sum_mt = "SELECT count(mamt) as sum_mt FROM muontra ";
                $query = mysqli_query($connect, $sum_mt);
                $mt = mysqli_fetch_array($query);
                echo " <h3> Tổng số sách mượn là ". $mt['sum_mt'] ."</h3>" ;
                ?>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col"> Mã Mượn </th>
                            <th scope="col">Tên Sách</th>
                            <th scope="col">Tên Độc Giả</th>
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
                                echo "<td>" . $row["tensach"] . "</td>";
                                echo "<td>" . $row["tendg"] . "</td>";
                                echo "<td>" . $row["ngaymuon"] . "</td>";
                                echo "<td>" . $row["ngaytra"] . "</td>";
                                echo "<td>" . $row["trangthai"] . "</td>";
                                echo "<td><center><a class=\"text-decoration-none bi bi-journal-minus btn btn-danger \" href=\"Trasach.php?mamt=" . $row["mamt"] . "\"> Trả Sách</a> </center> </td>";
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end content -->
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>