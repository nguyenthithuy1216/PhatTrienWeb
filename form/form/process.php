<?php
// echo $_POST['login'];
// echo '<br>';
// echo $_POST['password'];
//hoac dung request(dung cho ca get va post)
// echo $_REQUEST['login'];
// echo '<br>';
// echo $_REQUEST['password'];
//kiem tra login
$userName=$_POST['login'];
$passWord=$_POST['password'];
$result= ($userName=="thuy" && $passWord=="1234") ?" dang nhap thanh cong" :"dang nhap that bai";
echo $result;