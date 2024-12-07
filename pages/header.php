<?php
session_start();
?>
<!-- MY HEAD -->

<style>
    #dropdownMenuButton1 {
        background-color: white;
        border: 0;
    }
</style>
<!-- banner dau trang -->
<div id="mybanner">
    <div class="row text-center p-0 m-0">
        <div id="banner_1" class="col-md p-0">
            <img src="Ảnh/banner/sale.png" alt="">
        </div>
        <div class="col-md p-0">
            <img src="Ảnh/banner/banner_dai.png" alt="">
        </div>
        <div id="banner_3" class="col-md p-0">
            <img src="Ảnh/banner/sale_2.png" alt="">
        </div>
    </div>
</div>
<div id="thongtinbanner">WEBKINHDOANHDOUONG.VN | APP NTV6 | PHIẾU QUÀ TẶNG PHƯƠNG NAM</div>
<!-- thanh cong cu -->
<div id="thanhcongcu">
    <div class="logo">
        <h1>NTV6</h1>
    </div>
    <div class="timkiem">
        <div class="container-fluid">
            <form class="d-flex" role="search" action="index.php?menu=timkiem" method="POST">
                <input class="form-control me-2" type="search" name="tukhoa" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" name="timkiem" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="hotline">
        <div class="thanhphancon">
            <i class="fa-solid fa-phone text-danger"> HOTLINE</i><br>
            <strong>0123456789</strong>
        </div>
    </div>
    <div class="giohang">
        <div class="thanhphancon">
            <a href="index.php?menu=giohang" style="text-decoration:none">
                <i class="fa-solid fa-cart-shopping fs-4"></i><br>
                Giỏ hàng
            </a>
        </div>
    </div>
    <div class="dangnhap">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <a href="index.php?menu=dangnhap" style="text-align: center;text-decoration:none">
                    <i class="fa-solid fa-circle-user fs-2"></i>
                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']) {
                        echo "<br>";
                        echo $_SESSION['username'];
                    } else {
                        echo "<br>";
                        echo 'Bạn chưa đăng nhập';
                    }
                    ?>
                </a>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php
            if (isset($_SESSION['username']) && $_SESSION['username']){
                echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a class="dropdown-item" href="dangky.php">Đăng Ký</a></li>';
                echo '<li><a class="dropdown-item" href="dangnhap1.php">Đăng Nhập</a></li>';
            }
            ?>
            </ul>
        </div>
    </div>
</div>
<!-- banner giua trang -->
<div id="slide">
    <div class="row m-0 p-0">
        <div id="slide_left" class="col-sm-8 m-0 p-0">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Ảnh/banner/nuoccam.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Ảnh/banner/lacay.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Ảnh/banner/xanhluc.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Ảnh/banner/hong.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Ảnh/banner/xanhduong.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div id="slide_right" class="col-sm-4 m-0 p-0">
            <div class="row m-0 p-0">
                <div class="col m-0 p-0"><img class="anh1" src="Ảnh/banner/banner_right_1.jpg" alt=""></div>
                <div class="col m-0 p-0"><img class="anh1" src="Ảnh/banner/banner_right_3.png" alt=""><br></div>
            </div>
            <div class="row p-0 m-0">
                <div class="col m-0 p-0"><img class="anh2" src="Ảnh/banner/banner_right_4.jpg" alt=""></div>
                <div class="col m-0 p-0"><img class="anh2" src="Ảnh/banner/banner_right_2.png" alt=""></div>
            </div>
        </div>
    </div>
</div>