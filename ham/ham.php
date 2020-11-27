<?php
//ham khong tra ve tham so
// function createBox(){//dinh nghia ham
//     echo '<div style="width:300px; height:300px; border:1px solid #0DD;">';
//     echo '<h1> Ham trong PHP</h1>';
//     echo '</div>';
// }

// createBox();//goi ham

//ham tra ve tham so
function createBox () {
    $value = '<div style="width: 300px; height: 300px; border: 1px solid #0DD;">';
    $value .= '<h1>Hàm trong PHP</h1>';//noi ham
    $value .= '</div>';
    
    return $value; //trả về giá trị
}
$result = createBox();//goi ham
echo $result;

//ham tra ve gia tri true/false

function checkNumber(){
    $value=13;
    if($value%2==0){
        return true;
    }
    else {return false;}
}
$result=checkNumber();
if($result==true){
    echo 'so chan';
}else 
{
    echo 'so le';
}

//bien toan cuc
echo'</br>';
$globalVar=10;//khai bao bien toan cuc
function testFunction(){
  echo $GLOBALS['globalVar'];//goi bien toan cuc trong ham
}
testFunction();

echo '</br>';
//truyen tham bien, tham trij


$n1 = 2;
$n2 = 5;
function test($n1, &$n2){//truyen tham tri, tham bien
    $n1 = $n1*3;//gia tri khong doi(n1 van bang 2)
    $n2 = $n2*5;//gia tri thay doi(n2 thay doi theo bien)
}
test($n1, $n2);
echo '$n1 = ' . $n1 . '<br>';
echo '$n2 = ' . $n2;