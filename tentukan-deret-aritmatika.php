<?php
function tentukan_deret_aritmatika($arr) {
    $selisih = $arr[0] - $arr[1];
    $aritmatika[0] = $arr[0]; // a
    for($i = 1; $i < count($arr); $i++){
        $aritmatika[$i] = $aritmatika[$i-1] + abs($selisih);
    }

    // print_r($arr);
    // echo "<br>";
    // print_r($aritmatika);
    if($arr == $aritmatika){
        echo "true ";
        return true . "<br>"; // di soal disuruh me-return. outputnya keluar angka 1
    }
    else{
        echo "false";
        return false . "<br>"; // di soal disuruh me-return
    }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>