<?php
// 問１
function cul($a) {
    $total = $a * 2;
    return $total;
}

echo cul(2);
echo "\n";

// 問２
function sum($a, $b){
    $result = $a + $b;
    return $result;
}
echo sum(1, 2);
echo "\n";

// 問３
function mul($arr){
    $kekka = 1;
    foreach ($arr as $value){
        $kekka *= $value;
    }
    return $kekka;
}
echo mul(array(1, 3, 5, 7, 9));
echo "\n";

// 問4
 function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($max_number < $a){
             $max_number = $a;
             }
        }
        return $max_number;
    }
    echo max_array(array(1, 3, 5, 7, 9));
echo "\n";

// 問5
// strip_tags
$contents = "<p>パラグラフ</p>";
$contents = strip_tags($contents);
echo $contents;
echo "\n";

// array_push
$data = ["japan", "america", "canada"];
array_push($data, "china", "france");
print_r($data);
echo "\n";

// arry_merge
$arr1 = [1, 5, 10];
$arr2 = [100, 500, 1000];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
echo "\n";

// time,mktime
$now = time();
print $now;
echo "\n";

$time = mktime(3, 15, 0, 11, 24);
print $time;
echo "\n";

// date
$time = time();
echo date("Y/m/d", $time);
echo "\n";
