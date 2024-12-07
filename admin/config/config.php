<?php
$mysqli = new mysqli("localhost", "root", "", "web_kinh_doanh_do_uong");

// Check connection
if ($mysqli->connect_errno) {
  echo "Không kết nối được với MySQL" . $mysqli->connect_error;
  exit();
}
