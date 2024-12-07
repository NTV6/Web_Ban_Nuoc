<?php
include 'connect.php';
$sodanhmuc = "SELECT COUNT(*) AS id_dm FROM danhmuc";
$sosanpham = "SELECT COUNT(*) AS id_sp FROM sanpham";
$sohoadon = "SELECT COUNT(*) AS mahoadon FROM hoadon";
$songuoidung = "SELECT COUNT(*) AS username FROM users";
$result1 = $conn->query($sodanhmuc);
$result2 = $conn->query($sosanpham);
$result3 = $conn->query($sohoadon);
$result4 = $conn->query($songuoidung);
// Đóng kết nối
$conn->close();

?>     
        <!-- danh sach -->
        <div class="danhsach">
            <div id="tencacmuc">
                <i class="fa-solid fa-house"></i>
                <label>Trang chủ</label>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 p-0 m-0">
        <?php
            if ($result1->num_rows > 0) {
            $row1 = $result1->fetch_assoc();
            $id_dm = $row1['id_dm'];
            echo '<div class="col p-0">
            <div class="anh" style="background-color: rgb(78, 78, 255);">
                <label for=""><i class="fa-solid fa-folder-open"></i> Danh mục</label><br>
                <label for=""><h5>Số danh mục: ' . $id_dm . '</h5></label>
            </div>
            </div>';
            }
        
            if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $id_sp = $row2['id_sp'];
            echo '<div class="col p-0">
                    <div class="anh" style="background-color: yellow">
                        <label for=""><i class="fa-brands fa-product-hunt"></i> Sản phẩm</label><br>
                        <label for=""><h5>Số sản phẩm: ' . $id_sp . '</h5></label>
                    </div>
                </div>';
            }
            if ($result3->num_rows > 0) {
            $row3 = $result3->fetch_assoc();
            $hoadon = $row3['mahoadon'];
            echo '<div class="col p-0">
                    <div class="anh" style="background-color: rgb(0, 181, 0)">
                        <label for=""><i class="fa-solid fa-money-bills"></i> Hóa đơn</label><br>
                        <label for=""><h5>Số hóa đơn: ' . $hoadon . '</h5></label>
                    </div>
                </div>';
            }
            if ($result4->num_rows > 0) {
            $row4 = $result4->fetch_assoc();
            $username = $row4['username'];
            echo '<div class="col p-0">
                    <div class="anh" style="background-color: red">
                        <label for=""><i class="fa-solid fa-user"></i> Người dùng</label><br>
                        <label for=""><h5>Số người dùng: ' . $username . '</h5></label>
                    </div>
                </div>';
            }
        ?> 
            </div>
        </div>
    </div>