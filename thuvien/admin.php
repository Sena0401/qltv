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
                <a class="bi bi-house-door-fill list-group-item list-group-item-action list-group-item-light p-3" href="home.php"> &nbspTrang Chủ</a>
                <a class="bi bi-person-fill list-group-item list-group-item-action list-group-item-light p-3" href="admin.php"> &nbspUser</a>
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3" href="sach/book.php"> &nbspSách</a>
                <a class="bi bi-person-lines-fill list-group-item list-group-item-action list-group-item-light p-3" href="docgia/docgia.php"> &nbspĐộc giả</a>
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
                            <li class="nav-item "><a class="nav-link" href="logout.php">Đăng Xuất</a></li>


                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="text-center">Danh Sách Người Dùng</h1>
                <!-- add user -->
                <?php include("form_add_admin.php")  ?>
                <!-- add user -->


                <br>
                <table class="mt-2 table table-bordered">

                    <thead>

                        <tr>
                            <th class="text-center" scope="col">STT</th>
                            <th scope="col">Mã Nhân Viên</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include("connect.php");
                            $query = "SELECT * FROM admin";
                            $ketqua = mysqli_query($connect, $query);
                            $stt = 1;
                            while ($row = mysqli_fetch_array($ketqua)) {
                                echo "<tr>";
                                echo "<td><center>" . $stt . "</center></td>";
                                echo "<td>" . $row["manv"] . "</td>";
                                echo "<td>" . $row["username"] . "</td>";
                                echo "<td>" . $row["password"] . "</td>";
                                echo "<td><center><a class=\"text-decoration-none bi bi-trash3 btn btn-danger \" href=\"deleteadmin.php?manv=" . $row["manv"] . "\"> Xoá</a> </center> </td>";
                                echo "<td><center><a class=\"text-decoration-none bi bi-pen btn btn-info\" href=\"editadmin.php?manv=" . $row["manv"] . "\"> Cập nhật</a></center></td>";
                                echo "</tr>";
                                $stt++;
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