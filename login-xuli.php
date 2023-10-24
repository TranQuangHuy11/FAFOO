<?php
session_start();
include './connect.php';

if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //echo $username;
    //echo $password;
    // $password = md5($password);
    if (!$username || !$password){
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $row = mysqli_fetch_array($query);

    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $_SESSION['username'] = $username;
    //echo  $username ;
    header("Location: giaodien.php");
    //die();
    //echo $sql;
    //$user = mysqli_query($conn, $sql);
    //echo mysqli_num_rows($user);
    //if (mysqli_num_rows($user) > 0) {
       //$_SESSION["user"] = $username;
       //header("Location: giaodien.php");
    //} else {
        //$_SESSION["thongbao"] = "Sai ten mạt khau hoac tai khoan";
        //header("Location:Login.php");
   // }
//} else {
    //$_SESSION["thongbao"] = "Vui long nhap day du thong tin";
    //header("Location:Login.php");
}