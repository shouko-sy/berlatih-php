<?php
function ubah_huruf($string){
    $temp = 0;
    for($i = 0; $i < strlen($string); $i++){
        $temp = ord($string[$i]);
        $string[$i] = chr($temp+1);
    }
    return $string . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>