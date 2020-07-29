<?php
function pasangan_terbesar($angka){
    $tempString = (string) $angka;
    $max = 0;
    $maxPrint = "";
    for($i = 1; $i<strlen($tempString); $i++){
        $int1 = (int) $tempString[$i-1];
        $int2 = (int) $tempString[$i];

        (int)$temp = (string)$int1 . (string)$int2;
        // echo "ini tes" . $temp . "<br>";
        if($max < $temp){
            $max = $temp;
            $maxPrint[0] = $int1;
            $maxPrint[1] = $int2;
        }
    }
    return $maxPrint . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>