<?php
function tentukan_deret_geometri($arr) {
    $selisih = $arr[1] / $arr[0];
    $geometri[0] = $arr[0]; // a
    for($i = 1; $i < count($arr); $i++){
        $geometri[$i] = $geometri[$i-1] * abs($selisih);
    }

    if($arr == $geometri){
        echo "true ";
        return true . "<br>"; // di soal disuruh me-return. outputnya keluar angka 1
    }
    else{
        echo "false";
        return false . "<br>"; // di soal disuruh me-return
    }
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>