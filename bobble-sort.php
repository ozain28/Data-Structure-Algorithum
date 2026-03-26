 // sorting ka kam 
//  function sorting($arr){
//     $n = count($arr);
//     for($i = 0 ; $i < $n -1 ; $i++){
//          for($j = 0 ; $j < $n-$i-1; $j++){


//          }
//     } 
<-------------------------------------------------------->
// Bubble Sort with arrows for visualization
//public function lowercase(){
//$arr = [7, 4, 9, 1, 6];
//$n = count($arr);


//echo "Original Array: [" . implode(", ", $arr) . "]\n\n";

// for ($i = 0; $i <= $n -1; $i++) {
   // echo "$i";
    
  // for ($j = 0; $j  <  $n- $i -1  ; $j++) {
 //      echo "Compare: {$arr[$j]} → {$arr[$j]}</br> ";
        //echo " </br>";
 //        if ($arr[$j] > $arr[$j+1]) {
//             // Swap
 //           $temp = $arr[$j];
 //           $arr[$j] = $arr[$j+1];
//           $arr[$j+1] = $temp;
//             echo "✔ Swap → [" . implode(", ", $arr) . "]\n";
//         } else {
//             echo "❌ No Swap → [" . implode(", ", $arr) . "]\n";
//         }
//     }
//     echo "\n";
// }

// echo "Final Sorted Array: [" . implode(", ", $arr) . "]\n";

<---------------------------------------------------------------------->

// public function sorting($arr){
//     $n = count($arr);
//     for($i = 0 ; $i < $n -1 ; $i++)
//         for($j = 0 ; $j < $n-$i-1 $j++){
//            if(){


//            }
//     }

// }

//}
<------------------------------------------------------> 
// public function lowercase(){

//     $arr = [7, 4, 9, 1, 6];
//     $n = count($arr);

//     for ($i = 0; $i < $n - 1; $i++) {

//         for ($j = 0; $j < $n - $i - 1; $j++) {

//             if ($arr[$j] > $arr[$j + 1]) {

//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $temp;

//             }
//         }
//     }

//     print_r($arr);
// }
<----------------------------------------------------------------->
// public function lowercase(){
//        $arr = [7, 4, 9, 1, 6];
// $n = count($arr);

// for ($i = 0; $i < $n-1; $i++)
//     for ($j = 0; $j < $n-$i-1; $j++)
//         if ($arr[$j+1] < $arr[$j])
//             [$arr[$j+1], $arr[$j]] = [$arr[$j], $arr[$j+1]];

// print_r($arr);
// }
<----------------------------------------------------------------->
//public function lowercase (){
//        $arr = [2,7,5,6,3];
//        $n  = count($arr);
//    for($i = 0 ; $i < $n-1  ; $i++)
//        for($j = 0 ; $j < $n -$i -1 ; $j++)
//              if($arr[$j+1] < $arr[$j])
//               [$arr[$j] , $arr[$j+1]] = [$arr[$j+1] , $arr[$j]];
//    print_r($arr);
// }
<--------------------------------------------------------------------------->
// public function lowercase($arr){
//    $n = count($arr);
//    for($i = 0 ; $i < $n-1  ; $i++ )
//        for($j = 0 ; $j < $n -$i -1 ; $j++)
//          if($arr[$j+1] < $arr[$j])
//               [$arr[$j+1]]  = [$arr[$j]];
//        print_r($arr);
// }
<------------------------------------------------------------.>
// public function lowercase(){
//        $arr = [2, 4, 3, 9, 1];
//        $n = count($arr);
//        for($i = 0; $i < $n - 1 ; $i++ )
//               for($j = 0 ; $j = $n- $i- 1; $j++)
//          if($arr[$j+1] < $arr[$j]){
//               [$arr[$j] , $arr[$j+1] ] = [$arr[$j] , $arr[$j+1] ];

//          }

// }
<----------------------------------------------------------.>
// public function lowercase(){
//     $arr = [ 9,2,4,1,5];
//     $n = count($arr);
//     for($i = 0 ; $i < $n -1 ; $i++)
//        for($j = 0 ; $j < $n -$i-1 ; $j++)
//            if($arr[$j] < $arr[$j+1]){
//               [$arr[$j] , $arr[$j+1]] = [$arr[$j] , $arr[$j+1]];
//                   print_r($arr);
//            }
// }

<-------------------------------------------------.>
// public function lowercase($arr){
//        $n = count($arr);
//    for($i = 0 ; $i < $n-1 ; $i++)
//        for($j = 0 ; $j < $n-$i-1 ; $j++)
//            if($arr[$j] < $arr[$j+1]){
//               [$arr[$j+1] , $arr[$j]] = [$arr[$j] , $arr[$j+1]];
//               print_r($arr);

//            }

// }

<------------------------------------------------------.>
// public function lowercase(){
//        $arr = [2 ,4,3,6,1];
//        $n = count($arr);
//        for($i = 0 ; $i < $n-1 ; $i++)
//               for($j = 0 ; $j < $n- $i -1 ; $j++)
//                        if([$arr[$j+1]] < [$arr[$j]] ){
//                             [$arr[$j]  , $arr[$j+1]]  = [$arr[$j] , $arr[$j+1]];
//                              print_r($arr);
//                        }       
// }
<----------------------------------------------------.>
// public function lowercase(){
//     $arr = [2,5,1,6,3];
//     $n = count($arr)  ;
//     for($i = 0 ; $i < $n -1 ; $i++)
//         for($j = 0 ; $j < $n-$i-1 ; $j++)
//         if($arr[$j+1] < $arr[$j]){
//             [$arr[$j] , $arr[$j+1]] = [$arr[$j+1] , $arr[$j]];
//             print_r($arr);

//         }
//  }