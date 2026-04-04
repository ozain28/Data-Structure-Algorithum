$arr = [5, 3, 2, 1];
$n = count($arr);

for($i = 1; $i < $n; $i++){

    $key = $arr[$i]; // jo value insert karni hai
    $j = $i - 1;

    while($j >= 0 && $arr[$j] > $key){
        $arr[$j + 1] = $arr[$j]; // shift
        $j--;
    }

    $arr[$j + 1] = $key; // insert
}

print_r($arr);