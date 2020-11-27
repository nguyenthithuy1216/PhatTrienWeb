<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//cau dieu kien if
$number=15;
if($number %2 ==0){
    $result='so chan';
}

$result=($number %2 ==0)? 'so chan':'so le';
echo $result;

// cau lenh if...else
echo '<br/>';
if($number %2 ==0){
    $result='so chan';
}else {
    $result='so le';
}
$result=($number %2 ==0)? 'so chan':'so le';
echo $result;
