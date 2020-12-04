<?php
$things['mon'] = 'Monday';//phan tu mang
$things['tue'] = 'Tuesday';
$things['wed'] = 'Wednesday';
$things[]            = 'table';
$things[]            = 'book';

if(!empty($things)) {//kiem tra mang rong
    foreach ($things as $key => $value) { echo $value . ' '; }//duyet mang
}