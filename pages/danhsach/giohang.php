<!-- danh sach -->
<div class="danhsach"><?php
                        include 'connect.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['datmua'])) {
                            $username = $_SESSION["username"];

                            // Query to retrieve id_nd based on the username
                            $userQuery = "SELECT * FROM users WHERE username = '$username'";
                            $result = $conn->query($userQuery);

                            if ($result->num_rows > 0) {
                                // Fetch the result
                                $row = $result->fetch_assoc();
                                $id_nd = $row["id_nd"];
                                $phone = $row["phone"];
                                $tinhtrang = "Đã đặt hàng";

                                if (isset($_SESSION['cart'])) {
                                    $i = 0;
                                    $tongtien = 0;
                                    $soluong = 0;
                                    foreach ($_SESSION['cart'] as $cart_item) {
                                        $soluong = $cart_item['soluong'];
                                        $tensanpham = $cart_item['tensanpham'];
                                        $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                                        $tongtien = $tongtien + $thanhtien;
                                        $i++;
                                    }
                                    // Insert data into the lienhe table
                                    $insertQuery = "INSERT INTO hoadon (id_nd,  tensanpham, soluong, tongtien,phone, tinhtrang) VALUES ('$id_nd','$tensanpham','$soluong','$tongtien','$phone','$tinhtrang')";

                                    if ($conn->query($insertQuery) === TRUE) {
                                        echo "Đặt hàng thành công! Cảm ơn bạn.";
                                    } else {
                                        echo "Lỗi: " . $insertQuery . "<br>" . $conn->error;
                                    }
                                }
                            }
                            // Clear the cart after successful insertion if needed
                            unset($_SESSION['cart']);
                        }
                        $conn->close();
                        ?>
    <div id="tencacmuc">
        <i class="fa-solid fa-box"></i>
        <label>Giỏ hàng</label>

    </div>

    <div class="thongtingiohang">
        <div class="thongtingiohang_dau">
            <div class="row m-0 p-0 text-center">
                <div class="col-3 m-0 p-0">
                    <h5>Sản phẩm</h5>
                </div>
                <div class="col-3 m-0 p-0">
                    <h5>Thông tin</h5>
                </div>
                <div class="col-2 m-0 p-0">
                    <h5>Số lượng</h5>
                </div>
                <div class="col-2 m-0 p-0">
                    <h5>Thành tiền</h5>
                </div>
                <div class="col-2 m-0 p-0">
                    <h5>Tác vụ</h5>
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['cart'])) {
            $i = 0;
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                $tongtien = $tongtien + $thanhtien;
                $i++;
        ?>
                <div class="thongtingiohang_giua" style="margin-bottom: 0">
                    <div class="row m-0 p-0 text-center">
                        <div class="col-3 m-0 p-0"><img src="admin/modules/quanlysanpham/upload/<?php echo $cart_item['hinhanh']; ?>" alt=""></div>
                        <div class="col-3 m-0 p-0" style="display: flex; justify-content: center; align-items: center">
                            <h6><?php echo $cart_item['tensanpham']; ?></h6>
                        </div>
                        <div class="col-2 m-0 p-0" style="display: flex; justify-content: center; align-items: center">

                            <a href="pages/danhsach/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><img src="Ảnh/nutcong.jpg" alt="" style="width: 20px; margin-right: 10px"></a>
                            <?php echo $cart_item['soluong']; ?>
                            <a href="pages/danhsach/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><img src="Ảnh/nuttru.jpg" alt="" style="width: 20px; margin-left: 10px"></a>

                        </div>
                        <div class="col-2 m-0 p-0" style="display: flex; justify-content: center; align-items: center">
                            <label for=""><?php echo number_format($thanhtien) . ' VNĐ' ?></label>
                        </div>
                        <div class="col-2 m-0 p-0" style="display: flex; justify-content: center; align-items: center">
                            <a href="pages/danhsach/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><img src="Ảnh/nutx.png" alt="nutx"></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="thongtingiohang_cuoi">
                <div class="row m-0 p-0">
                    <div class="col-3 m-0 p-0">
                        <h5 style="margin-top: 17px">Tổng tiền:</h5>
                    </div>
                    <div class="col-3 m-0 p-0"></div>
                    <div class="col-2 m-0 p-0"></div>
                    <div class="col-2 m-0 p-0" style="display: flex; justify-content: center; align-items: center">
                        <h6 style="margin-top: 17px"><?php echo number_format($tongtien) . ' VNĐ' ?></h6>
                    </div>
                    <div class="col-2 m-0 p-0">

                        <a href="#" onclick="document.getElementById('datmuaForm').submit();"><button type="button" style="margin-top: 17px">Đặt mua</button></a>
                        <form id="datmuaForm" method="post" style="display: none;">
                            <input type="hidden" name="datmua" value="1">
                        </form>
                        <?php

                        ?>
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <h5 style="text-align: center; margin: 130px">Hiện tại giỏ hàng trống</h5>
        <?php
        }
        ?>
    </div>
</div>
</div>