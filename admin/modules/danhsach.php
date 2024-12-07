            <?php
            if (isset($_GET['action']) && $_GET['query']) {
                $tam = $_GET['action'];
                $query = $_GET['query'];
            } else {
                $tam = '';
                $query = '';
            }
            if ($tam == 'danhmuc' && $query == 'them') {
                include("modules/quanlydanhmuc/them.php");
                include("modules/quanlydanhmuc/lietke.php");
            } elseif ($tam == 'danhmuc' && $query == 'sua') {
                include("modules/quanlydanhmuc/sua.php");
            } elseif ($tam == 'sanpham' && $query == 'them') {
                include("modules/quanlysanpham/them.php");
                include("modules/quanlysanpham/lietke.php");
            } elseif ($tam == 'sanpham' && $query == 'sua') {
                include("modules/quanlysanpham/sua.php");
            }elseif($tam=='nguoidung' && $query=='them'){
                include("modules/quanlynguoidung/them.php");
                include("modules/quanlynguoidung/lietke.php");
            }elseif($tam=='nguoidung' && $query=='sua'){
                include("modules/quanlynguoidung/sua.php");
            }elseif($tam=='hoadon'){
                include("modules/quanlyhoadon/lietke.php");
            }
            elseif($tam=='lienhe'){
                include("modules/quanlyphanhoi/lietke.php");
            }
            // elseif($tam=='nguoidung'){
            //     include("danhsach/nguoidung.php");
            // }
            else {
                include("modules/index.php");
            }
            ?>