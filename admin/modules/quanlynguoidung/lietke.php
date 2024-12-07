<?php
$sql_lietke_nguoidung = "select*from users";
$query_lietke_nguoidung = mysqli_query($mysqli, $sql_lietke_nguoidung);
?>

<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #DDD;
  }

  tr:hover {
    background-color: #D6EEEE;
  }

  h2 {
    text-align: center;
  }
</style>
<!-- hien thi thong tin  -->
<div class="col-md-8 m-0 p-0">
  <h2>DANH SÁCH NGƯỜI DÙNG</h2>
  <table>
    <tr>
      <th>STT</th>
      <th>Tên đăng nhập</th>
      <th>Mật khẩu</th>
      <th>Họ tên</th>
      <th> Số điện thoại</th>
      <th>Địa chỉ</th>
      <th>Vai trò</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_nguoidung)) {
      $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['fullname'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['role'] ?></td>
        <td>
          <a href="?action=nguoidung&query=sua&username=<?php echo $row['username'] ?>">Sửa</a> |
          <a href="modules/quanlynguoidung/xuly.php?username=<?php echo $row['username'] ?>">Xóa</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</div>
</div>
</div>
</div>
</div>