// menu

var load_danhsach = document.querySelector('.danhsach')
var click_menu = document.querySelectorAll('.menu')
for (i = 0; i < click_menu.length; ++i) {
    click_menu[i].onclick = function (e) {
        console.log(e.target.innerText)

        if (e.target.innerText == ' Trang chủ') {
            load_danhsach.innerHTML = `
            <div id="tencacmuc">
                <i class="fa-solid fa-house"></i>
                <label>Trang chủ</label>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 p-0 m-0">
                <div class="col p-0">
                    <div class="anh" style="background-color: rgb(78, 78, 255);">
                        <label for=""><i class="fa-solid fa-folder-open"></i> Danh mục</label><br>
                        <label for=""><h5>Số danh mục: </h5></label>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh" style="background-color: yellow">
                        <label for=""><i class="fa-brands fa-product-hunt"></i> Sản phẩm</label><br>
                        <label for=""><h5>Số sản phẩm: </h5></label>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh" style="background-color: rgb(0, 181, 0)">
                        <label for=""><i class="fa-solid fa-money-bills"></i> Hóa đơn</label><br>
                        <label for=""><h5>Số hóa đơn: </h5></label>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh" style="background-color: red">
                        <label for=""><i class="fa-solid fa-user"></i> Người dùng</label><br>
                        <label for=""><h5>Số người dùng: </h5></label>
                    </div>
                </div>
            </div>
        `
        }

        if (e.target.innerText == ' Danh sách danh mục') {
            load_danhsach.innerHTML = `
        <div id="tencacmuc">
            <div class="row m-0 p-0">
                <div class="col-9 m-0 p-0">
                <i class="fa-solid fa-folder-open"></i>
                <label>Danh sách danh mục</label>
                </div>
                <div id="danhmuc_dau" class="col-3 m-0 p-0">
                    <button style="background-color: green;">Thêm DM</button>
                    <button style="background-color: yellow;">Sửa DM</button>
                    <button style="background-color: red;">Xóa DM</button>
                </div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><h5>#</h5></div>
                <div class="col-4 m-0 p-0"><h5>Tên danh mục</h5></div>
                <div class="col-2 m-0 p-0"><h5>Số sản phẩm</h5></div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><strong>1</strong></div>
                <div class="col-4 m-0 p-0">Nước ngọt</div>
                <div class="col-2 m-0 p-0">10</div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><strong>2</strong></div>
                <div class="col-4 m-0 p-0">Trà, cà phê</div>
                <div class="col-2 m-0 p-0">8</div>
            </div>
        </div>
        `
        }

        if (e.target.innerText == ' Danh sách sản phẩm') {
            load_danhsach.innerHTML = `
        <div id="tencacmuc">
            <div class="row m-0 p-0">
                <div class="col-9 m-0 p-0">
                <i class="fa-brands fa-product-hunt"></i>
            <label>Danh sách sản phẩm</label>
                </div>
                <div id="danhmuc_dau" class="col-3 m-0 p-0">
                    <button style="background-color: green;">Thêm</button>
                    <button style="background-color: yellow;">Sửa</button>
                    <button style="background-color: red;">Xóa</button>
                </div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><h5>#</h5></div>
                <div class="col-4 m-0 p-0"><h5>Tên sản phẩm</h5></div>
                <div class="col-2 m-0 p-0"><h5>Số hóa đơn</h5></div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><strong>1</strong></div>
                <div class="col-4 m-0 p-0">Nước suối Number 1</div>
                <div class="col-2 m-0 p-0">10</div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><strong>2</strong></div>
                <div class="col-4 m-0 p-0">Coca Cola</div>
                <div class="col-2 m-0 p-0">8</div>
            </div>
        </div>
        `
        }

        if (e.target.innerText == ' Người dùng') {
            load_danhsach.innerHTML = `
        <div id="tencacmuc">
            <div class="row m-0 p-0">
                <div class="col-9 m-0 p-0">
                <i class="fa-solid fa-user"></i>
            <label>Người dùng</label>
                </div>
                <div id="danhmuc_dau" class="col-3 m-0 p-0">
                    <button style="background-color: green;">Thêm</button>
                    <button style="background-color: yellow;">Sửa</button>
                    <button style="background-color: red;">Xóa</button>
                </div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0"><h5>Họ tên</h5></div>
                <div class="col-2 m-0 p-0"><h5>Số điện thoại</h5></div>
                <div class="col-2 m-0 p-0"><h5>Email</h5></div>
                <div class="col-1 m-0 p-0"><h5>Địa chỉ</h5></div>
                <div class="col-2 m-0 p-0"><h5>Tên đăng nhập</h5></div>
                <div class="col-2 m-0 p-0"><h5>Mật khẩu</h5></div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0">Nguyễn Tuấn Việt</div>
                <div class="col-2 m-0 p-0">0123456789</div>
                <div class="col-2 m-0 p-0">tuanviet@gmail.com</div>
                <div class="col-1 m-0 p-0">Hà Nội</div>
                <div class="col-2 m-0 p-0">Tuanviet</div>
                <div class="col-2 m-0 p-0">Tuanviet</div>
            </div>
        </div>
        <div class="danhmuc_dau">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0">Nguyễn Tuấn Việt</div>
                <div class="col-2 m-0 p-0">0123456789</div>
                <div class="col-2 m-0 p-0">tuanviet@gmail.com</div>
                <div class="col-1 m-0 p-0">Hà Nội</div>
                <div class="col-2 m-0 p-0">Tuanviet</div>
                <div class="col-2 m-0 p-0">Tuanviet</div>
            </div>
        </div>
        `
        }

        if (e.target.innerText == ' Hóa đơn') {
            load_danhsach.innerHTML = `
            <div id="tencacmuc">
            <i class="fa-solid fa-money-bills"></i>
            <label>Hóa đơn</label>
        </div>
        <div id="danhmuc1_giua" class="danhmuc_giua">
            <div class="row m-0 p-0 text-center">
                <div class="col-2 m-0 p-0 border"><h6>Mã hóa đơn</h6></div>
                <div class="col-2 m-0 p-0 border"><h6>Danh sách sản phẩm</h6></div>
                <div class="col-2 m-0 p-0 border"><h6>Số lượng</h6></div>
                <div class="col-1 m-0 p-0 border"><h6>Tổng tiền</h6></div>
                <div class="col-2 m-0 p-0 border"><h6>Người đặt</h6></div>
                <div class="col-2 m-0 p-0 border"><h6>Tình trạng</h6></div>
                <div class="col-1 m-0 p-0 border"><h6>Tác vụ</h6></div>
            </div>
        </div>
        <div class="danhmuc_giua">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0 border"><label for="">1</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">Coca Cola</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">1</label></div>
                <div class="col-1 m-0 p-0 border"><label for="">10.000 VNĐ</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">Nguyễn Tuấn Việt</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">Chưa duyệt</label></div>
                <div class="col-1 m-0 p-0 border">
                    <button style="background-color: rgb(55, 255, 0);;">Duyệt</button>
                    <button style="background-color: red;">Xóa HD</button>
                </div>
            </div>
        </div>
        <div class="danhmuc_giua">
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0 border"><label for="">1</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">Coca Cola</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">1</label></div>
                <div class="col-1 m-0 p-0 border"><label for="">10.000 VNĐ</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">Nguyễn Tuấn Việt</label></div>
                <div class="col-2 m-0 p-0 border"><label for="">Chưa duyệt</label></div>
                <div class="col-1 m-0 p-0 border">
                    <button style="background-color: rgb(55, 255, 0);;">Duyệt</button>
                    <button style="background-color: red;">Xóa HD</button>
                </div>
            </div>
        </div>
        `
        }
    }
}

// dang nhap
var click_dangnhap = document.querySelector('.dangnhap')
click_dangnhap.onclick = function (e) {
    if (e.target.innerText == '') {
        load_danhsach.innerHTML = `
        <style>
            #btn_dk {
                margin: 10px 0 30px 0;
            }

            #btn_dn {
                margin: 10px 0 30px 0;
            }

            .noidung label {
                margin-top: 10px;
            }

            .noidung h4 {
                text-align: center;
                margin: 0;
                padding: 9;
            }
        </style>

        <div class="danhsach">
            <div id="tencacmuc">
                <i class="fa-solid fa-user"></i>
                <label>Đăng kí / Đăng nhập</label>
            </div>
            <div class="noidung" class="container mt-3 p-0">
                <div class="row m-0 p-0">
                    <div class="col-md-6 px-3 m-0 border-end">
                        <h4>ĐĂNG KÍ</h4>
                        <div class="row m-0 p-0">
                            <div class="col-md-12 m-0 p-0">
                                <div class="form-group">
                                    <label for="username">Tên đăng nhập</label>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="Nhập tên đăng nhập">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Nhập mật khẩu">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" class="form-control" id="fullname" placeholder="Nhập họ tên">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Nhập email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Số điện thoại</label>
                                                <input type="number" class="form-control" id="phone"
                                                    placeholder="Nhập số điện thoại">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address">Địa chỉ</label>
                                                <input type="text" class="form-control" id="address"
                                                    placeholder="Nhập địa chỉ">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="checkbox" id="terms">
                                    <label for="terms">Đồng ý với Điều Khoản của website</label><br>
                                    <button type="submit" id="btn_dk" class="btn btn-success">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-3 m-0">
                        <h4>ĐĂNG NHẬP</h4>
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                            <input type="checkbox" id="terms">
                            <label for="terms">Lưu mật khẩu</label><br>
                            <button type="submit" id="btn_dn" class="btn btn-primary">Đăng Nhập</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
    }
}

load_danhsach.onclick=function(e){
    console.log(e.target.innerText)
    if(e.target.innerText=='Sửa DM'){
        load_danhsach.innerHTML=`
        <div id="tencacmuc">
            <i class="fa-solid fa-folder-open"></i>
            <label>Danh sách danh mục / Sửa DM / Nước ngọt</label>
        </div>
        <div class="suadanhmuc">
            <div class="row m-0 p-0">
                <div class="col-6 m-0 p-0">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Điền tên danh mục">
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-6 m-0 p-0">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Điền mô tả cho danh mục"></textarea>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-6 m-0 p-0">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ảnh đại diện</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Điền link ảnh">
                    </div> 
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0">
                    <button type="button" class="btn btn-success">Sửa danh mục</button>
                </div>
            </div>
        </div>
        `
    }
    if(e.target.innerText=='Xóa DM'){
        confirm('Bạn có chắc chắn muốn xóa danh mục này không ?')
    }
    if(e.target.innerText=='Sửa SP'){
        load_danhsach.innerHTML=`viet2`
    }
    if(e.target.innerText=='Xóa SP'){
        confirm('Bạn có chắc chắn muốn xóa sản phẩm này không ?')
    }
    if(e.target.innerText=='Sửa ND'){
        load_danhsach.innerHTML=`viet3`
    }
    if(e.target.innerText=='Xóa ND'){
        confirm('Bạn có chắc chắn muốn xóa người dùng này không ?')
    }
    if(e.target.innerText=='Duyệt'){
        confirm('Bạn có chắc chắn muốn duyệt này không ?')
    }
    if(e.target.innerText=='Xóa HD'){
        confirm('Bạn có chắc chắn muốn xóa hóa đơn này không ?')
    }
}