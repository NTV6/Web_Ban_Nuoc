<?php
$sql_sua_danhmuc = "select*from danhmuc where id_dm='$_GET[id_dm]' limit 1";
$query_sua_danhmuc = mysqli_query($mysqli, $sql_sua_danhmuc);
?>
<!-- danh sach -->
<div class="danhsach">
    <form method="POST" action="modules/quanlydanhmuc/xuly.php?id_dm=<?php echo $_GET['id_dm'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmuc)) {
        ?>
            <div id="tencacmuc">
                <i class="fa-solid fa-folder-open"></i>
                <label>Sửa danh mục</label>
            </div>
            <div class="suadanhmuc">
                <div class="row m-0 p-0">

                    <!-- dien thong tin  -->
                    <div class="col-md-4 m-0 p-0">
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Tên danh mục</label>
                                    <input name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>" class="form-control" placeholder="Điền tên danh mục">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pe-5">
                            <div class="col-12 m-0 p-0">
                                <div class="mb-3">
                                    <label class="form-label">Thứ tự</label>
                                    <input name="thutu" value="<?php echo $dong['thutu'] ?>" class="form-control" placeholder="Điền thứ tự">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 mb-5 p-0">
                            <div class="col-10 m-0 p-0">
                                <button type="submit" name="suadanhmuc" class="btn btn-success">Sửa danh mục</button>
                            </div>
                        </div>
                    </div>
                <?php
            }
                ?>
    </form>