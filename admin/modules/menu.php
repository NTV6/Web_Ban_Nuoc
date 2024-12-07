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
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DANH MỤC</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=danhmuc&query=them"><i class="fa-solid fa-folder-open"></i> Danh sách danh
                                mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=sanpham&query=them"><i class="fa-brands fa-product-hunt"></i> Danh sách sản
                                phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=nguoidung&query=them"><i class="fa-solid fa-user"></i> Người dùng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=hoadon&query=them"><i class="fa-solid fa-money-bills"></i> Hóa đơn</a>
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
                <h6 style="display: inline;">Danh mục</h6>
            </a>
            <a href="index.php" class="list-group-item list-group-item-action"><i class="fa-solid fa-house"></i> Trang
                chủ</a>
            <a href="index.php?action=danhmuc&query=them" class="list-group-item list-group-item-action"><i class="fa-solid fa-folder-open"></i> Danh
                sách danh mục</a>
            <a href="index.php?action=sanpham&query=them" class="list-group-item list-group-item-action"><i class="fa-brands fa-product-hunt"></i>
                Danh sách sản phẩm</a>
            <a href="index.php?action=nguoidung&query=them" class="list-group-item list-group-item-action"><i class="fa-solid fa-user"></i> Người
                dùng</a>
            <a href="index.php?action=hoadon&query=them" class="list-group-item list-group-item-action"><i class="fa-solid fa-money-bills"></i> Hóa
                đơn</a>
            <a href="index.php?action=lienhe&query=them" class="list-group-item list-group-item-action"><i class="fa-solid fa-comment"></i> Phản hồi của khách hàng</a>
        </div>
    </div>