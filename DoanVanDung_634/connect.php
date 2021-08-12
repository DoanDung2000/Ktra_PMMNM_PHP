<?php
$connect = mysqli_connect ('localhost', 'root', '', 'qlsinhvien') or die ('Không thể kết nối tới database');
//mysqli_set_charset($conn, 'UTF8');

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>