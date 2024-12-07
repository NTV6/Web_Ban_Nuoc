<?php
$sql_lietke_danhmuc = "select*from danhmuc order by thutu desc";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);
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
  <h2>DANH SÁCH DANH MỤC</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Tên danh mục</th>
      <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
      $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
          <a href="?action=danhmuc&query=sua&id_dm=<?php echo $row['id_dm'] ?>">Sửa</a> |
          <a href="modules/quanlydanhmuc/xuly.php?id_dm=<?php echo $row['id_dm'] ?>">Xóa</a>
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