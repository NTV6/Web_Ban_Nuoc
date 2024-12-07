<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];

    $sql_pro = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_dm = danhmuc.id_dm AND sanpham.tensanpham LIKE '%" . $tukhoa . "%'";

    $query_pro = mysqli_query($mysqli, $sql_pro);

    if (!$query_pro) {
        die("Query failed: " . mysqli_error($mysqli));
    }
?>
    <div class="danhsach">
        <div id="tencacmuc">
            <h3>Từ khoá tìm kiếm: <?php echo $_POST['tukhoa']; ?><br></h3>
        </div>
        <div class="text-center">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 p-0 m-0">
                <?php
                while ($row = mysqli_fetch_array($query_pro)) {
                ?>
                    <div class="col p-0">
                        <a href="index.php?menu=sanpham&id=<?php echo $row['id_sp'] ?>" style="text-decoration:none; color: black;">
                            <div class="anh">
                                <img src="admin/modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>"><br>
                                <?php echo $row['tensanpham'] ?><br>
                                <label for=""><b><?php echo number_format($row['gia']) . ' VNĐ' ?></b></label><br>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    <?php } ?>
    </div>
    </div>