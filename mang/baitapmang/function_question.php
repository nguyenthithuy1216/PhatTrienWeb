<?php
$data = file('question.txt') or die('Cannot read file');
array_shift($data);//bỏ phần tư đầu tiên của mảng
$arrQuestions = array();
//duyệt mảng
foreach ($data as $key => $value) {
    $tmp_array 	= explode('|', $value);//tách chuỗi value dưa vao ký tự |và đuea vào mảng
    $id 		= $tmp_array[0];
    $question 	= $tmp_array[1];
    $arrQuestions[$id] = array('question' => $question);
}
?>