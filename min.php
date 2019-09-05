<?php
function findMin($arr){
    $min = arr[0];
    for ($i =0; $i<count($arr);$i++){
        if ($arr[$i]<$min){
            $min = $arr[$i];
        }
    } return $min;
}
$arr = [3,1,2,3,4,5,7,2];
echo 'Gia tri nho nhat: '.findMin($arr);