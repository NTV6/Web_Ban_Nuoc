<?php
    $sql_lietke_hoadon="select*from hoadon";
    $query_lietke_hoadon=mysqli_query($mysqli, $sql_lietke_hoadon);
?>


<form action="">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}
</style>


<h2>Liet ke</h2>
<p>Move the mouse over the table rows to see the effect.</p>

<table>
  <tr>
  <th>STT</th>
    <th>Mã hóa đơn</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Tổng tiền</th>
    <th>Số đt</th>
    <th>Tình trạng</th>
  </tr>
  <?php
    $i=0;
    while($row=mysqli_fetch_array($query_lietke_hoadon)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['mahoadon'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tongtien'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['tinhtrang'] ?></td>

    <td>
        <!-- <a href="?action=nguoidung&query=sua&mahoadon=<?php echo $row['mahoadon']?>">Sửa</a> |  -->
        <a href="modules/quanlyhoadon/xuly.php?mahoadon=<?php echo $row['mahoadon']?>">Xóa</a>
    </td>
  </tr>
  <?php
    }
  ?>
</table>
</form>
