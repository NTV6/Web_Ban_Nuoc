<?php
include('../../config/config.php');
    
        $username =$_POST['username'];
        $password =$_POST['password'];
        $fullname =$_POST['fullname'];
        $phone = $_POST['phone'];
        $address =$_POST['address'];
        $role = $_POST['role'];
    if(isset($_POST['themnguoidung'])){
        $sql_them="insert into users(username, password,fullname,phone,address,role) value('".$username."', '".$password."', '".$fullname."', '".$phone."', '".$address."', '".$role."')";
        mysqli_query($mysqli, $sql_them);
        header('Location: ../../index.php?action=nguoidung&query=them');
    }
    elseif(isset($_POST['suanguoidung'])){
        $sql_update="update users set password='".$password."', fullname='".$fullname."', phone='".$phone."', address='".$address."', role='".$role."' where username='$_GET[username]'";
        mysqli_query($mysqli, $sql_update);
        header('Location: ../../index.php?action=nguoidung&query=them');
    }else{
        $id=$_GET['username'];
        $sql_xoa="delete from users where username='$_GET[username]'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../index.php?action=nguoidung&query=them');
    }
?>