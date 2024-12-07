<?php
$sql_lietke_lienhe = "select*from lienhe ";
$query_lietke_lienhe = mysqli_query($mysqli, $sql_lietke_lienhe);
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
  <h2>DANH SÁCH LIÊN HỆ</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Phản hồi</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_lienhe)) {
      $i++;
    ?>
      <tr>
        <td><?php echo $row['id_nd'] ?></td>
        <td><?php echo $row['phanhoi'] ?></td>
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