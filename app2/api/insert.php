<?php
//處理新增資料的請求
include_once "db.php";
$Stu->save($_POST);

to("../index.html")
?>