// thong tin giao hang
// thong tin san pham 
load_danhsach.onclick = function (e) {
    // THONG TIN GIAO HANG
    if (e.target.innerText === 'Đặt mua') {
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

        <div id="tencacmuc">
            <i class="fa-solid fa-box"></i>
            <label>Giỏ hàng / Thông tin giao hàng</label>
        </div>
        <div class="noidung" class="container mt-3 p-0" style="border-top: 1px solid rgb(205, 205, 205);">
            <div class="row m-0 p-0">
                <div class="col-md-6 px-3 m-0 border-end">
                    <h5 style="text-align: center">THÔNG TIN GIAO HÀNG</h5>
                    <div class="row m-0 p-0">
                        <div class="col-md-12 m-0 p-0">
                            <div class="form-group">
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
                                    <div class="col-md-12">
                                        <label for="">Phương thức thanh toán</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Thanh toán khi nhận hàng</option>
                                            <option value="1">Thanh toán qua ATM</option>
                                        </select>
                                    </div>

                                </div>
                                <input type="checkbox" id="terms">
                                <label for="terms">Đồng ý với Điều Khoản của cửa hàng</label><br>
                                <button type="submit" id="btn_dk" class="btn btn-success">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-3 m-0">
                    <div id="thongtingiaohang_right">
                        <div class="row m-0 p-0">
                            <div class="col-9 m-0 p-0">
                                <div class="anh"><img src="/Ảnh/nuocngot/mirinda.png" alt="">Mirinda (1)</div>
                            </div>
                            <div class="col-3 m-0 p-0" style="display: flex; justify-content: center; align-items: center">10.000 VNĐ</div>
                        </div>
                        <div class="row m-0 p-0" style="border-top: 1px solid rgb(211, 211, 211);">
                            <div class="col-9 m-0 p-0">
                                <div style="padding: 5px;">Tạm tính</div>
                            </div>
                            <div class="col-3 m-0 p-0" style="display: flex; justify-content: center; align-items: center">10.000 VNĐ</div>
                        </div>
                        <div class="row m-0 p-0" style="border-bottom: 1px solid rgb(211, 211, 211);">
                            <div class="col-9 m-0 p-0">
                                <div style="padding: 5px;">Phí vận chuyển</div>
                            </div>
                            <div class="col-3 m-0 p-0" style="display: flex; justify-content: center; align-items: center">30.000 VNĐ</div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-9 m-0 p-0">
                                <div style="padding: 5px;">Tổng cộng:</div>
                            </div>
                            <div class="col-3 m-0 p-0" style="display: flex; justify-content: center; align-items: center">40.000 VNĐ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
    }

    // them san pham vao gio hang 
    if(e.target.innerText == ' Thêm vào giỏ hàng'){
        alert('Đã thêm sản phẩm vào giỏ hàng')
    }

    // thanh toan
    if(e.target.innerText == 'Thanh toán'){
        alert('Đã đặt hàng thành công')
        load_danhsach.innerHTML = `
            <div id="tencacmuc">
            <i class="fa-solid fa-box"></i>
            <label>Sản phẩm nổi bật</label>
            </div>
            <div class="text-center">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 p-0 m-0">
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/nuocngot/mirinda.png" alt="Mirinda"><br>
                        Mirinda kem 330ml<br>
                        <label for=""><b>10,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/nuocngot/coca.png" alt="Coca Cola"><br>
                        Coca Cola 330ml<br>
                        <label for=""><b>10,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/TraCaphe/caphe.png" alt="capheden"><br>
                        Cà phê đen đá<br>
                        <label for=""><b>20,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/TraCaphe/caphuchino.jpg" alt="capuchino"><br>
                        Capuchino<br>
                        <label for=""><b>15,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/TraCaphe/trasua.jpg" alt="trasua"><br>
                        Trà sữa<br>
                        <label for=""><b>15,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/TraCaphe/trachanh.jpg" alt="trachanh"><br>
                        Trà chanh<br>
                        <label for=""><b>15,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/nuocep/duahau.png" alt="duahau"><br>
                        Nước ép dưa hấu<br>
                        <label for=""><b>15,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/nuocep/dua.png" alt="dua"><br>
                        Nước ép dứa<br>
                        <label for=""><b>15,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/nuocsuoi/aquafina.jpg" alt="Suoi aqua"><br>
                        Nước suối Aquafina<br>
                        <label for=""><b>5,000 VNĐ</b></label><br>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="anh">
                        <img src="/Ảnh/nuocsuoi/lavie.png" alt="suoi lavie"><br>
                        Nước suối Lavie<br>
                        <label for=""><b>5,000 VNĐ</b></label><br>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        `
    }

}

