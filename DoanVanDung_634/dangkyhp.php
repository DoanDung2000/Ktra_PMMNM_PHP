<table border="1">
<tr>
<td>SubjectID</td>
<td>Subject</td>
<td>SoTiet</td>
</tr>
<?php
require 'connect.php';
//$query=mysqli_query($connect,"select * from `class` inner join 'subject' on class.malop=subject,malop");



$query=mysqli_query($connect,"SELECT mamon, tenmon, sotiet  FROM subject ");

while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['mamon']; ?></td>
<td><?php echo $row['tenmon']; ?></td>
<td><?php echo $row['sotiet']; ?></td>
<td><a href="thongbao.php?id=<?php echo $row['tenlop']; ?>">Đăng ký</a></td>
</tr>
<?php
}

?>
</table>