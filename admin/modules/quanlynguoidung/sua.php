<?php
    $sql_sua_nguoidung="select*from users where username='$_GET[username]' limit 1";
    $query_sua_nguoidung=mysqli_query($mysqli, $sql_sua_nguoidung);
?>


<!-- danh sach -->
<div class="danhsach">
<form method="POST" action="modules/quanlynguoidung/xuly.php?username=<?php echo $_GET['username'] ?>">

        <div id="tencacmuc">
            <i class="fa-solid fa-user"></i>
            <label>Sửa người dùng</label>
        </div>

        <div class="suadanhmuc">
            <div class="row m-0 p-0">
<?php
        while($dong= mysqli_fetch_array($query_sua_nguoidung)){  
    ?>
                <!-- dien thong tin  -->
                <div class="col-md-4 m-0 p-0">
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Tên người dùng</label>
                                <input name="username" value="<?php echo $dong['username'] ?>" class="form-control" placeholder="Điền tên người dùng">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <input name="password" value="<?php echo $dong['password'] ?>" class="form-control" placeholder="Điền mật khẩu">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Họ tên</label>
                                <input name="fullname" value="<?php echo $dong['fullname'] ?>" class="form-control" placeholder="Điền họ tên">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input name="phone" value="<?php echo $dong['phone'] ?>" class="form-control" placeholder="Điền số điện thoại">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ</label>
                                <input name="address" value="<?php echo $dong['address'] ?>" class="form-control" placeholder="Điền địa chỉ">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Vai trò</label>
                                <input name="role" value="<?php echo $dong['role'] ?>" class="form-control" placeholder="Điền vai trò">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 mb-5 p-0">
                        <div class="col-10 m-0 p-0">
                            <button type="submit" name="suanguoidung" class="btn btn-success">Sửa người dùng</button>
                        </div>
                    </div>
                </div>
                <?php
    }
    ?>
    </form>