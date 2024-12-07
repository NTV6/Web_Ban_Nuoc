<?php
$sql_lietke_sanpham = "select*from sanpham, danhmuc where sanpham.id_dm=danhmuc.id_dm order by id_sp desc";
$query_lietke_sanpham = mysqli_query($mysqli, $sql_lietke_sanpham);
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
  <h2>DANH SÁCH SẢN PHẨM</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Tên sản phẩm</th>
      <th>Giá</th>
      <th>Số lượng</th>
      <th>Danh mục</th>
      <th>Hình ảnh</th>
      <th>Nội dung</th>
      <th>Tình trạng</th>
      <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
      $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['gia'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><img src="modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>" alt=""></td>
        <td><?php echo $row['noidung'] ?></td>
        <td><?php if ($row['tinhtrang'] == 1) {
              echo 'Kích hoạt';
            } else {
              echo 'Ẩn';
            } ?></td>
        <td>
          <a href="?action=sanpham&query=sua&id_sp=<?php echo $row['id_sp'] ?>">Sửa</a> |
          <a href="modules/quanlysanpham/xuly.php?id_sp=<?php echo $row['id_sp'] ?>">Xóa</a>
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