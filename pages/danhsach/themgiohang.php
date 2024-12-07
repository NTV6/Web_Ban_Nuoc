<?php
session_start();
include('../../admin/config/config.php');

// them so luong
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
            );
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] < 10) {
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong,
                    'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
                );
            } else {
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                    'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../../index.php?menu=giohang');
}
// tru so luong
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
            );
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong,
                    'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
                );
            } else {
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                    'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../../index.php?menu=giohang');
}

// xoa san pham trong gio hang 
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
            );
        }
        $_SESSION['cart'] = $product;
        header('Location:../../index.php?menu=giohang');
    }
}

// them san pham vao gio hang 
if (isset($_POST['themgiohang'])) {
    // session_destroy();
    $id = $_GET['id_sp'];
    $soluong = 1;
    $sql = "select*from sanpham where id_sp='" . $id . "' limit 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'tensanpham' => $row['tensanpham'], 'id' => $id, 'soluong' => $soluong,
            'gia' => $row['gia'], 'hinhanh' => $row['hinhanh'], 'noidung' => $row['noidung']
        ));
        //kiem tra giohang ton tai
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                //neu du lieu trung
                if ($cart_item['id'] == $id) {
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $soluong + 1,
                        'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
                    );
                    $found = true;
                } else {
                    //neu du lieu khong trung
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                        'gia' => $cart_item['gia'], 'hinhanh' => $cart_item['hinhanh'], 'noidung' => $cart_item['noidung']
                    );
                }
            }
            if ($found == false) {
                // lien ket $new_product vs $product
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('Location:../../index.php?menu=giohang');
}
