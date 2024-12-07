<?php
$sql_danhmuc = "select * from danhmuc order by id_dm desc";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<!-- menu an -->
<div id="menu_an" class="menu">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MENU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DANH MỤC SẢN PHẨM</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><strong>></strong> Trang chủ</a>
                        </li>

                        <?php
                        // while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){  
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menu=danhmuc&id=<?php echo $row_danhmuc['id_dm'] ?>"><strong>></strong> <?php echo $row_danhmuc['tendanhmuc'] ?></a>
                        </li>
                        <?php
                        // }
                        ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Website
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="index.php?menu=doitrahang"><strong>></strong> Đổi trả hàng</a></li>
                                <li><a class="dropdown-item" href="index.php?menu=tintuc"><strong>></strong> Tin tức</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- MY BODY -->

<div id="mybody">
    <!-- menu hien -->
    <div id="menu" class="menu">
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action text-danger py-3">
                <i class="fa-solid fa-circle-plus fs-6"></i>
                <h6 style="display: inline;">Danh mục các sản phẩm</h6>
            </a>
            <a href="index.php" class="list-group-item list-group-item-action"><strong>></strong> Trang chủ</a>
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
                <a href="index.php?menu=danhmuc&id=<?php echo $row_danhmuc['id_dm'] ?>" class="list-group-item list-group-item-action"><strong>></strong> <?php echo $row_danhmuc['tendanhmuc'] ?></a>
            <?php
            }
            ?>
            <a class="list-group-item list-group-item-action text-danger py-3">
                <i class="fa-solid fa-circle-plus fs-6"></i>
                <h6 style="display: inline;">Website</h6>
            </a>
            <a href="index.php?menu=lienhe" class="list-group-item list-group-item-action"><strong>></strong> Liên hệ phản hồi</a>

            <a href="index.php?menu=tintuc" class="list-group-item list-group-item-action"><strong>></strong> Tin tức</a>
        </div>
    </div>