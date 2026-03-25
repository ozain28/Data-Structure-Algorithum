<?php
$arr = [5,2,1,4];

for($i=0; $i<count($arr)-1; $i++){
    for($j=0; $j<count($arr)-$i-1; $j++){
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

print_r($arr);
?>