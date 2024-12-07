<?php
include('../../config/config.php');
    
        $mahoadon =$_POST['mahoadon'];
        $tensanpham =$_POST['tensanpham'];
        $soluong   =$_POST['soluong'];
        $tongtien = $_POST['tongtien'];
        $phone = $_POST['phone'];
        $tinhtrang =$_POST['tinhtrang'];
    if(isset($_POST['themhoadon'])){
        $sql_them="insert into hoadon(mahoadon, tensanpham,soluong,tongtien,phone,tinhtrang) value('".$mahoadon."', '".$tensanpham."', '".$soluong."', '".$tongtien."', '".$phone."', '".$tinhtrang."')";
        mysqli_query($mysqli, $sql_them);
        header('Location: ../../index.php?action=hoadon&query=them');
    }
    // elseif(isset($_POST['suahoadon'])){
    //     $sql_update="update hoadon set password='".$password."', fullname='".$fullname."', Email='".$email."', phone='".$phone."', address='".$address."', role='".$role."' where username='$_GET[username]'";
    //     mysqli_query($mysqli, $sql_update);
    //     header('Location: ../../index.php?action=hoadon&query=them');
    // }
    else{
        $id=$_GET['mahoadon'];
        $sql_xoa="delete from hoadon where mahoadon='$_GET[mahoadon]'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../index.php?action=hoadon&query=them');
    }
?>