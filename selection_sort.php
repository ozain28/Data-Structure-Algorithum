$arr = [5, 3, 2, 1];
$n = count($arr);

for ($i = 0; $i < $n - 1; $i++) {

    $min = $i;

    for($j = $i + 1; $j < $n; $j++){
        if($arr[$j] < $arr[$min]){
            $min = $j;
        }
    }

    if($min != $i){
        [$arr[$i], $arr[$min]] = [$arr[$min], $arr[$i]];
    }
}

print_r($arr);