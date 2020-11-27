
<?php

$firstName="Nguyen Thi";
$lastName="Thuy";
$mssv=17.25;


//xem kieu du lieu
 var_dump($firstName);
 var_dump($mssv);
//hoac
echo gettype($lastName);

//chuyen doi kie du lie
 echo (int)$mssv;
 //hoac
 settype($mssv,'integer');
 echo $mssv;
?>