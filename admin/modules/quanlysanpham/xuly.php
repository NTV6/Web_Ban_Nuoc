<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$gia = $_POST['gia'];
$soluong = $_POST['soluong'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$noidung = $_POST['noidung'];
$danhmuc = $_POST['danhmuc'];
$tinhtrang = $_POST['tinhtrang'];

if (isset($_POST['themsanpham'])) {
    $sql_them = "insert into sanpham(tensanpham, gia, soluong, hinhanh, noidung, id_dm, tinhtrang) value('" . $tensanpham . "', '" . $gia . "', '" . $soluong . "', '" . $hinhanh . "', '" . $noidung . "', '" . $danhmuc . "', '" . $tinhtrang . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
    header('Location: ../../index.php?action=sanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);

        $sql_update = "update sanpham set tensanpham='" . $tensanpham . "', gia= '" . $gia . "',soluong= '" . $soluong . "',hinhanh= '" . $hinhanh . "',noidung= '" . $noidung . "', id_dm='" . $danhmuc . "',tinhtrang= '" . $tinhtrang . "' where id_sp='$_GET[id_sp]'";
        $sql = "select *from sanpham where id_sp='$_GET[id_sp]' limit 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('upload/' . $row['hinhanh']);
        }
    } else {
        $sql_update = "update sanpham set tensanpham='" . $tensanpham . "', gia= '" . $gia . "',soluong= '" . $soluong . "',noidung= '" . $noidung . "', id_dm='" . $danhmuc . "',tinhtrang= '" . $tinhtrang . "' where id_sp='$_GET[id_sp]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location: ../../index.php?action=sanpham&query=them');
} else {
    $id = $_GET['id_sp'];
    $sql = "select *from sanpham where id_sp='$id' limit 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('upload/' . $row['hinhanh']);
    }
    $sql_xoa = "delete from sanpham where id_sp='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../index.php?action=sanpham&query=them');
}
