<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="js/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="#" />
</head>

<body>
    <section id="form-login" class="form-login">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 form-bg">
                    <div class="form-container">
                        <div class="form-header text-center">
                            <a href="#"><img src="img/Fafoo.png" alt="logo" class="logo"></a>
                            <h2 class="title">ĐĂNG NHẬP</h2>

                        </div>
                        <div class="form-body">
                            <form class="formS" action="login-xuli.php" method="POST">
                                <div class=" form-group mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="field">
                                        <span><i class="far fa-envelope"></i></span>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Xin hãy nhập Username" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <div class="field">
                                        <span><i class="fas fa-lock"></i></span>
                                        <input type="Password" class="form-control" id="password" name="password"
                                            placeholder="Xin hãy nhập mật khẩu ">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <span>
                                        <input type="checkbox" value="" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Nhớ mật khẩu </label>
                                        <a href="#" class="forgot-password">Quên mật khẩu</a>
                                    </span>
                                </div>
                                <div class="form-group mb-3">
                                    <button id="form-submit" class="btn submit" type="submit" name="submit">Đăng
                                        nhập</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-footer">
                            <h3 class="title">Đăng nhập với</h3>
                            <ul class="network text-center mt-4 mb-4">
                                <li class="facebook"><a href="#">Facebook</a></li>
                                <li class="google"><a href="#">Google</a></li>
                            </ul>
                            <div class="bottom">
                                <span> Chưa có tài khoản?</span> <a href="register.php" class="signin">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7  ">
                    <div class="form-description">
                        <h1 class="title">Trang web bán đồ ăn nhanh </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>l