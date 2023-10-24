<?php
session_start();
include './connect.php';
if (
    isset($_POST['submit']) && $_POST['username'] != '' && $_POST['fullname'] != ''  && $_POST['phone']
    != '' && $_POST['email']
    != '' && $_POST['password']
    != '' && $_POST['repassword']
    != '' && $_POST['address'] != ''
) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password != $repassword) {
       //$_SESSION["thongbao"] = "Mat khau nhap lai khong chinh xac";
        header("Location:register.php");
        die();
    }
    $address = $_POST['address'];
    $sql = "SELECT * FROM user WHERE username = '$username' ";
    $old = mysqli_query($conn, $sql);
    //$password = md5($password);
    //$repassword = md5($repassword);
    if (mysqli_num_rows($old) > 0) {
        //$_SESSION["thongbao"] = "Username ton tai";
        header("Location:register.php");
    }
    $sql = "INSERT INTO user (username,fullname,phone,email,password,repassword,address)
     VALUES ('$username','$fullname','$phone','$email','$password','$repassword','$address')";
    mysqli_query($conn, $sql);
    //$_SESSION["thongbao"] = "Đã đăng ký thành công" ;
    header("Location: Login.php");
} else {
    //$_SESSION["thongbao"] = "Vui long nhap day du thong tin";
    header("location:register.php");
}