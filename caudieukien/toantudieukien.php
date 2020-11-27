

<?php
//viet bang lenh if
$number = 11;
if ($number >= 0 && $number % 2 == 0) {
    $result = 'Số dương chẵn';
} else if ($number >= 0 && $number % 2 != 0) {
    $result = 'Số dương lẻ';
} else if ($number < 0 && $number % 2 == 0) {
    $result = 'Số âm chẵn';
} else {
    $result = 'Số âm lẻ';
}
echo $result;

echo '<br/>';
//viet bang toan tu
$number = -1;
$result1 = ($number >= 0) ? 'Số dương' : 'Số âm';
$result2 = ($number % 2 == 0) ? 'chẵn' : 'lẻ';
echo $result1 . ' ' . $result2;