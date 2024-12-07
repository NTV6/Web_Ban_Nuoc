<style>
        #dropdownMenuButton1{
           background-color: white;
           border: 0;
        }
    </style>

<!-- thanh cong cu -->
<div id="thanhcongcu">
    <div class="logo">
        <h1>NTV6</h1>
    </div>
    <div class="timkiem">
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
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
            <i class="fa-solid fa-cart-shopping fs-4"></i><br>
            Giỏ hàng
        </div>
    </div>
    <div class="dangnhap">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <a href="index.php?menu=dangnhap">
                <i class="fa-solid fa-circle-user fs-1"></i>
                <?php 
                if (isset($_SESSION['username']) && $_SESSION['username']){
                    echo "<br>";
                    echo $_SESSION['username'];
                }
                else{
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