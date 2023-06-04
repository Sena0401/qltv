<!doctype html>
<html lang="en">

<head>
    <title>Quản lý thư viện</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS v5.2.1 -->

    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <section class="login-block">
        <div class="container bg-light bg-gradient">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Login
                        <img class="col-md-4" src="img/logo.png" alt="logo">
                    </h2>

                    <!-- login -->
                    <form class="login-form" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail" class="text-uppercase">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="text-uppercase">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="">
                        </div>


                        <div class="form-check">
                            <button name="submit" type="submit" class="btn btn-login float-right ">Login</button>

                        </div>
                        <?php
                        include("connect.php");
                        if (isset($_POST['submit'])) {
                            session_start();
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                            $result = mysqli_query($connect, $query);
                            $num_row = mysqli_num_rows($result);
                            $row = mysqli_fetch_array($result);
                            if ($num_row > 0) {
                                header('location:thuvien/home.php');
                                $_SESSION['id'] = $row['user_id'];
                            } else { ?>
                                <br>
                                <br>
                                <div class="alert alert-danger">Access Denied</div>
                        <?php
                            }
                        }
                        ?>
                    </form>
                </div>

                <!-- slider -->
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="img/img2.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="img/img1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </script>
    </body>

</html>