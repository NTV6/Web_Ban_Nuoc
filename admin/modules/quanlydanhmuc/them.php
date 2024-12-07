<!-- danh sach -->
<div class="danhsach">
    <form method="POST" action="modules/quanlydanhmuc/xuly.php">

        <div id="tencacmuc">
            <i class="fa-solid fa-folder-open"></i>
            <label>Thêm danh mục</label>
        </div>
        <div class="suadanhmuc">
            <div class="row m-0 p-0">

                <!-- dien thong tin  -->
                <div class="col-md-4 m-0 p-0">
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Tên danh mục</label>
                                <input name="tendanhmuc" class="form-control" placeholder="Điền tên danh mục">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pe-5">
                        <div class="col-12 m-0 p-0">
                            <div class="mb-3">
                                <label class="form-label">Thứ tự</label>
                                <input name="thutu" class="form-control" placeholder="Điền thứ tự">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 mb-5 p-0">
                        <div class="col-10 m-0 p-0">
                            <button type="submit" name="themdanhmuc" class="btn btn-success">Thêm danh mục</button>
                        </div>
                    </div>
                </div>
    </form>