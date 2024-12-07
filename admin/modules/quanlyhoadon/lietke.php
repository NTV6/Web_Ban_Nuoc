<?php
$sql_lietke_hoadon= "select*from hoadon";
$query_lietke_hoadon= mysqli_query($mysqli, $sql_lietke_hoadon);
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

  img {
    width: 25px;
  }
</style>

<!-- hien thi thong tin  -->
<div class="col-xl-8 m-0 p-0">
  <h2>DANH SÁCH HÓA ĐƠN</h2>
  <table>
    <tr>
      <th>Mã hóa đơn</th>
      <th>Người dùng</th>
      <th>Tên sản phẩm</th>
      <th>Số lượng</th>
      <th>Tổng tiền</th>
      <th>Số điện thoại</th>
      <th>Tình trạng</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_hoadon)) {
      $i++;
    ?>
      <tr>
        <td><?php echo $row['mahoadon'] ?></td>
        <td><?php echo $row['id_nd'] ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['tongtien'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['tinhtrang'] ?></td>
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