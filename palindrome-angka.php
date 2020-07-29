<?php

function palindrome_angka($angka) {
    // $j = 0;
    while(true){
        $tempString = (string) $angka;
        $stringPalindrome = "";
        $count = 0;
        for($i = strlen($tempString); $i>0; $i--){
            $stringPalindrome[$count] = $tempString[$i-1];
            $count++;
        }
        // echo $tempString . "<br>" . $stringPalindrome . "<br><br>";
        if($angka < 9 && $angka >= 0){
            return $angka + 1 . "<br>";
        }
        else if($stringPalindrome == $tempString){
            return $angka . "<br>";
        }
        $angka++;
        // $j++;
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>