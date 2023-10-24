<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="js/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&family=Sono:wght@200;300;400;600;700;800&family=Varela+Round&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./giaodien.css">
    <script src="https://kit.fontawesome.com/1c81ce1c4b.js" crossorigin="anonymous"></script>
    <style>
    ::placeholder {
        color: #333333;
        opacity: 1;
        /* Firefox */
    }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img width="100px" height="100px" src="../img/Fafoo.png">
        </div>
        <div class="menu">
            <li><a href="">HAMBUGER</a>
                <ul class="sub-menu">
                    <li><a href="">HAMBUGER GÀ</a></li>
                    <li><a href="">HAMBUGER BÒ</a></li>
                    <li><a href="">HAMBUGER CÁ</a></li>
                    <li><a href="">HAMBUGER PHÔ MAI</a></li>
                </ul>
            </li>
            <li><a href="">MÌ</a>
                <ul class="sub-menu">
                    <li><a href="">MÌ Ý</a></li>
                    <li><a href="">MÌ Ý BÒ</a></li>
                    <li><a href="">MÌ Ý GÀ GIÒN</a></li>
                </ul>
            </li>
            <li><a href="">GÀ RÁN</a>
                <ul class="sub-menu">
                    <li><a href="">GÀ RÁN SỐT CAY</a></li>
                    <li><a href="">GÀ RÁN SỐT PHÔ MAI</a></li>
                    <li><a href="">GÀ RÁN SỐT ĐẬU</a></li>
                    <li><a href="">GÀ RÁN SỐT MẬT ONG</a></li>
                </ul>
            </li>
            <li><a href="">ĐỒ ĂN PHỤ</a>
                <ul class="sub-menu">
                    <li><a href="">KHOAI TÂY CHIÊN</a></li>
                    <li><a href="">KHOAI TÂY CHIÊN LẮC PHÔ MAI</a></li>
                    <li><a href="">HOTDOG PHÔ MAI</a></li>
                    <li><a href="">KEM VANI</a></li>
                    <li><a href="">KEM CHOCOLATE</a></li>
                </ul>
            </li>
            <li><a href="">THỨC UỐNG</a>
                <ul class="sub-menu">
                    <li><a href="">COCA COLA</a></li>
                    <li><a href="">MIRINDA CAM</a></li>
                    <li><a href="">SPRITE</a></li>
                </ul>
            </li>
        </div>
        <div class="others">
            <li>
                <input class="border" placeholder="Tìm kiếm" type="text">
                <i class="fas fa-search"></i>
            </li>
            <i class="fa-solid fa-user-large">
                <?php
                if (isset($_SESSION['username']) && $_SESSION['username']) {
                    echo  $_SESSION['username'] ;
                } else {
                    echo 'Bạn chưa đăng nhập';
                }
                ?>
                <a href="logout.php">DANG XUAT</a>
            </i>
        </div>
    </header>
    <section id="Slider">
        <div class="aspect-ratio-169">
            <img src="../img/anh1.jpg">
            <img src="../img/cuaso.jpg">
            <img src="../img/ngam-nhin-ve-dep.jpg">
            <img src="../img/logachvinhlong.jpg">
            <img src="../img/nhung-dia-diem-du-lich-vinh-long-hap-dan-khach-du-lich-202107031744090288.jpg">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    <section class="app-container">
        <p>
            Nhận thông báo từ FaFoo
            <i class="fa-solid fa-bell"></i>
        </p>
        <input type="text" placeholder="Nhập email của bạn...">
    </section>
    <!-- ------------------------------------------------------------------------------- -->
    <div class="footer-top">
        <li><a href=""><img src="../img/dathongbao.png" alt=""></a></li>
        <li><a href=""></a>Liên hệ</li>
        <li><a href=""></a>Giới thiệu</li>
        <li>
            <a href="" class="fa-brands fa-facebook"></a>
        </li>
    </div>
    <div class="footer-center">
        <p>Địa chỉ đăng ký: Hẻm 12, Đường 3/2, Phường Hưng Lợi, Quận Ninh Kiều, TP. Cần Thơ <br>
            Hotline: 0922008052 | 0896459315
        </p>
    </div>
    <div class="footer-bottom">
        @FaFoo All rights reserved
    </div>
</body>
<script>
const header = document.querySelector("header")
window.addEventListener("scroll", function() {
    x = window.pageYOffset
    if (x > 0) {
        header.classList.add("sticky")
    } else {
        header.classList.remove("sticky")
    }
})




const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPosition.length
let index = 0
// console.log(imgPosition)
imgPosition.forEach(function(image, index) {
    image.style.left = index * 100 + "%"
    dotItem[index].addEventListener("click", function() {
        slider(index)
    })
})

function imgSlide() {
    index++;
    console.log(index)
    if (index >= imgNumber) {
        index = 0
    }
    slider(index)
}

function slider(index) {
    imgContainer.style.left = "-" + index * 100 + "%"
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}

setInterval(imgSlide, 5000)
</script>

</html>