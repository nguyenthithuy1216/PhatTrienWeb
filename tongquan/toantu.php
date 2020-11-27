<?php
//toan tu co ban
$x=4;
$y=$x;
echo $y;
echo '<br/>';
//toan tu gan

$x=5;
$x *=5;
echo $x;
echo '<br/>';
//so sanh $x++ va ++$x
$x = 1;
$ketQua1 = $x++ + 2;
echo $ketQua1;
$x = 1;
$ketQua2 = ++$x + 2;
echo ' ' . $ketQua2;
echo '<br/>';
//toan tu dieu dien
$x = 2;
$y = 5;
$ketQua = '';
($x > $y) ? $ketQua = '$x lon hon $y' : $ketQua = '$x khong lon hon $y';
echo $ketQua;
echo '<br/>';
//hoac
$x = 2;
$y = 5;
$ketQua = ($x > $y) ? '$x lon hon $y' : '$x khong lon hon $y';
echo $ketQua;
