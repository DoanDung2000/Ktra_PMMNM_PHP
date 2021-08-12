<?php
include_once('connect.php');
if(isset($_REQUEST['mamon']) and $_REQUEST['mamon']!=""){
$id=$_GET['mamon'];
echo "Đăng ký thành công!";

$conn->close();
}
?>