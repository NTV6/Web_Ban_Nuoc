<?php
$sql_chitiet = "select * from sanpham, danhmuc where sanpham.id_dm=danhmuc.id_dm and sanpham.id_sp='$_GET[id]' limit 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>

    <!-- danh sach -->
    <div class="danhsach">
        <div id="tencacmuc">
            <i class="fa-solid fa-bottle-water"></i>
            <label>Nước ngọt / Mirinda</label>
        </div>
        <form action="pages/danhsach/themgiohang.php?id_sp=<?php echo $row_chitiet['id_sp'] ?>" method="POST">
            <div class="row p-0 m-0">
                <div class="col-md-4 p-0 m-0">
                    <div class="hinhanh">
                        <img src="admin/modules/quanlysanpham/upload/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8 p-0 m-0">
                    <div class="thongtin">

                        <h5><?php echo $row_chitiet['tensanpham'] ?></h5>
                        <h6><?php echo number_format($row_chitiet['gia']) . ' VNĐ' ?></h6>
                        <label for="soluong">Số lượng:</label>
                        <input type="number" id="soluong" name="soluong" min="1" value="1">
                        <br>
                        <button class="themgiohang" name="themgiohang"><i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ hàng</button>
                        <br>
                        Thông tin lưu ý: <br>
                        Hoàn tiền 100% nếu chất lượng sẩn phẩm không như cam kết <br>
                        Phản hồi chất lượng dịch vụ: 0123456789<br>
                        Hotline: 0123.456.789 | Hoạt động từ 8h30 đến 18h00 (T2-T7)

                    </div>
                </div>
            </div>
            <div class="motasanpham">
                <h6>Mô tả sản phẩm</h6>
                Từ thương hiệu nước ngọt nổi tiếng toàn cầu - Nước ngọt - với
                mùi vị thơm ngon với hỗn hợp hương tự nhiên cùng chất tạo ngọt tổng hợp,
                giúp xua tan cơn khát và cảm giác mệt mỏi. Nước ngọt bổ sung
                năng lượng làm việc mỗi ngày
            </div>
        </form>
    </div>
    </div>

<?php
}
?>