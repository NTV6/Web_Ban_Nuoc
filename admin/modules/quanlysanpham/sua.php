<?php
$sql_sua_sanpham = "select*from sanpham where id_sp='$_GET[id_sp]' limit 1";
$query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
?>
<!-- danh sach -->
<div class="danhsach">
    <div id="tencacmuc">
        <i class="fa-solid fa-folder-open"></i>
        <label>Thêm sản phẩm</label>
    </div>
    <?php
    while ($row = mysqli_fetch_array($query_sua_sanpham)) {
    ?>
        <form method="POST" action="modules/quanlysanpham/xuly.php?id_sp=<?php echo $_GET['id_sp'] ?>" enctype="multipart/form-data">
            <div class="suadanhmuc">
                <div class="row m-0 p-0">
                    <!-- dien thong tin  -->
                    <div class="col-xl-4 m-0 p-0">
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Tên sản phẩm</label>
                                    <input name="tensanpham" value="<?php echo $row['tensanpham'] ?>" class="form-control" placeholder="Điền tên sản phẩm">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Giá</label>
                                    <input name="gia" value="<?php echo $row['gia'] ?>" class="form-control" placeholder="Điền giá">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Số lượng</label>
                                    <input name="soluong" value="<?php echo $row['soluong'] ?>" class="form-control" placeholder="Số lượng">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Hình ảnh</label>
                                    <input type="file" name="hinhanh" class="form-control" placeholder="Thêm hình ảnh">
                                    <img src="modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Nội dung</label>
                                    <div class="form-floating">
                                        <textarea name="noidung" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?php echo $row['noidung'] ?></textarea>
                                        <label for="floatingTextarea">Nội dung sản phẩm</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Danh mục</label>
                                    <select name="danhmuc" class="form-select" aria-label="Default select example">
                                        <?php
                                        $sql_danhmuc = "select * from danhmuc order by id_dm desc";
                                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                            if ($row_danhmuc['id_dm'] == $row['id_dm']) {
                                        ?>
                                                <option selected value="<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Tình trạng</label>
                                    <select name="tinhtrang" class="form-select" aria-label="Default select example">
                                        <?php
                                        if ($row['tinhtrang'] == 1) {
                                        ?>
                                            <option value="1" selected>Kích hoạt</option>
                                            <option value="0">Ẩn</option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="1">Kích hoạt</option>
                                            <option value="0" selected>Ẩn</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 mb-5 p-0">
                            <div class="col-10 m-0 p-0">
                                <button type="submit" name="suasanpham" class="btn btn-success">Sửa sản phẩm</button>
                            </div>
                        </div>
                    </div>
        </form>
    <?php
    }
    ?>