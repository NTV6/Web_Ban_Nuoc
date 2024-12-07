<?php
if (isset($_GET['menu'])) {
    $tam = $_GET['menu'];
} else {
    $tam = '';
}
if ($tam == 'danhmuc') {
    include("danhsach/danhmuc.php");
} elseif ($tam == 'lienhe') {
    include("danhsach/lienhe.php");
} elseif ($tam == 'tintuc') {
    include("danhsach/tintuc.php");
} elseif ($tam == 'giohang') {
    include("danhsach/giohang.php");
} 
// // elseif ($tam == 'dangnhap') {
// //     include("danhsach/dangki.php");
// }
 elseif ($tam == 'sanpham') {
    include("danhsach/sanpham.php");
}elseif($tam=='timkiem'){
    include("danhsach/timkiem.php");
}
 else {
    include("danhsach/index.php");
}
?>