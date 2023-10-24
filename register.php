<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="js/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/styledk.css">
    <link rel="shortcut icon" href="#" />
</head>

<body>
    <div id="wrapper" class="wrapper bg-img">
        <div class="container">
            <div class="row justify-content-around">
                <form action="xuli.php" class="col-md-6 bg-light p-3 my-3 rounded " method="POST">
                    <h1 class="text-center text-uppercase h3 py-3 fw-bold">Đăng ký tài khoản </h1>

                    <div class="form-group">
                        <label for="fullname" class="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="fullname">
                    </div>
                    <div class="form-group">
                        <label for="fullname" class="fullname">Họ và tên:</label>
                        <input type="text" class="form-control" name="fullname" id="fullname">
                    </div>
                    <!-- <div class="form-group d-flex flex-column gap-1 ">
                        <label for="male" class="gender" id="gender">Giới tính:</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline ">
                                <input type="radio" name="gender" check id="male" value="male" class="form-check-input">
                                <label for="male" class="form-check-label ">Nam</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input type="radio" name="gender" check id="female" value="female"
                                    class="form-check-input">
                                <label for="female" class="form-check-label ">Nữ</label>
                            </div> 
            </div>
        </div>-->
                    <div class="form-group py-3">
                        <label for="phone" class="phone"> Phone:</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group py-3">
                        <label for="email" class="email">Email:</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group py-3">
                        <label for="password" class="password">password:</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group py-3">
                        <label for="repassword" class="repassword">Nhập lại mật khẩu:</label>
                        <input type="text" class="form-control" name="repassword" id="repassword">
                    </div>
                    <div class="form-group py-3">
                        <label for="address" class="address">Địa chỉ:</label>
                        <input type="text" class="form-control" name="address" id="address">

                    </div>
                    <input type="submit" value="Đăng ký" class="btn-warning btn d-block mx-auto" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>