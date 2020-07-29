<?php
function skor_terbesar($arr){
    for($i = 0; $i < count($arr); $i++){
        $kelas[$arr[$i]["kelas"]] = [];
    }
    $key = array_keys($kelas);
    for($i = 0; $i < count($kelas); $i++){
        $nilaiTerbesar = 0;
        $indexArr = 0;
        for($j = 0; $j<count($arr); $j++){
            if($arr[$j]["kelas"] == $key[$i]){
                if($nilaiTerbesar < $arr[$j]["nilai"]){
                    $nilaiTerbesar = $arr[$j]["nilai"]; 
                    $indexArr = $j;
                }
            }
        }
        $kelas[$key[$i]] = $arr[$indexArr];
    }
    return $kelas;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo "<pre>";
print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>