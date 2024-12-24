<?php
//處理刪除資料的請求
include_once "db.php";
$id=$_POST['id'];
echo $Stu->del($id);

?>