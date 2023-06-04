<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


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
                <a class="bi bi-book-half list-group-item list-group-item-action list-group-item-light p-3" href="Sach/book.php"> &nbspSách</a>
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
                            <li class="nav-item active"><a class="nav-link" href="logout.php">Đăng Xuất</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <?php
            include("connect.php");

            //sách mượn nhiều nhất
            $maxsach = "SELECT MAX(tensach) as max_sach FROM sach,muontra where sach.masach = muontra.masach";
            $query = mysqli_query($connect, $maxsach);
            $sach = mysqli_fetch_array($query);
            // Độc gỉa mượn nhiều sách nhất
            $topdg = "SELECT MAX(tendg) as top_dg FROM docgia,muontra where docgia.madg = muontra.madg";
            $query = mysqli_query($connect, $topdg);
            $dg = mysqli_fetch_array($query);

            ?>

            <div class="d-flex justify-content-center">
                <div class="card me-5 bg-success bg-gradient" style="width: 24rem;">
                    <img src="img/img1.jpg" class="card-img-top">
                    <div class="card-body ">
                        <h4 class="card-title text-light text-center">Sách Được Mượn Nhiều Nhất</h4>

                        <h2 class="card-title text-light text-center"><?php echo $sach['max_sach'];  ?></h2>
                    </div>
                </div>
                <div class="card bg-warning bg-gradient" style="width: 24rem;">
                    <img src="img/img2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title text-center">Độc Giả Mượn Nhiều Sách Nhất</h4>
                        <h2 class="card-text  text-center"><?php echo $dg['top_dg'];  ?></h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="d-flex justify-content-around ">
                    
                    <div class="">
                        <div class="d-flex bg-info bg-gradient">
                            <div class="mt-1 ms-1  row">
                                <h2>3</h2>

                                <h2>BOOK</h2>
                            </div>
                            <div class="mt-2" style="width: 100px; height: 150px;"><i class="bi bi-journal-text" style="font-size:100px; color:gray;"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>