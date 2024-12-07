<?php
$conn = mysqli_connect("localhost", "root", "", "web_kinh_doanh_do_uong");
        mysqli_set_charset($conn, "utf8");

        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
?>