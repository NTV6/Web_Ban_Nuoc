<?php
include('../../config/config.php');
$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];

if (isset($_POST['themdanhmuc'])) {
    $sql_them = "insert into danhmuc(tendanhmuc, thutu) value('" . $tendanhmuc . "', '" . $thutu . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location: ../../index.php?action=danhmuc&query=them');
} elseif (isset($_POST['suadanhmuc'])) {
    $sql_update = "update danhmuc set tendanhmuc='" . $tendanhmuc . "', thutu='" . $thutu . "' where id_dm='$_GET[id_dm]'";
    mysqli_query($mysqli, $sql_update);
    header('Location: ../../index.php?action=danhmuc&query=them');
} else {
    $id = $_GET['id_dm'];
    $sql_xoa = "delete from danhmuc where id_dm='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../index.php?action=danhmuc&query=them');
}
