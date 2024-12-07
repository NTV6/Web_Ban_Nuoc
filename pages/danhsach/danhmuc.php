<?php
$sql_pro = "select * from sanpham where sanpham.id_dm='$_GET[id]' order by id_sp desc";
$query_pro = mysqli_query($mysqli, $sql_pro);
$sql_cate = "select * from danhmuc where danhmuc.id_dm='$_GET[id]' limit 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
if ($query_pro) {
    $row_title = mysqli_fetch_array($query_cate);
} else {
    $row_title = 'Chưa có sản phẩm nào';
}
?>

<div class="danhsach">
    <div id="tencacmuc">
        <i class="fa-solid fa-bottle-water"></i>
        <label><?php echo $row_title['tendanhmuc'] ?></label>
    </div>
    <div class="text-center">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 p-0 m-0">
            <?php
            while ($row_pro = mysqli_fetch_array($query_pro)) {
            ?>
                <div class="col p-0">
                    <a href="index.php?menu=sanpham&id=<?php echo $row_pro['id_sp'] ?>" style="text-decoration:none; color: black;">
                        <div class="anh">
                            <img src="admin/modules/quanlysanpham/upload/<?php echo $row_pro['hinhanh'] ?>"><br>
                            <?php echo $row_pro['tensanpham'] ?><br>
                            <label for=""><b><?php echo number_format($row_pro['gia']) . ' VNĐ' ?></b></label><br>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
</div>