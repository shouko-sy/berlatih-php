<?php

function papan_catur($angka) {
    for($i = 0; $i<$angka; $i++){
        for($j = 0; $j < $angka*2; $j++){
            if($i%2 == 0){
                if($j%2 == 0){
                    echo "#";
                }
                else{
                    echo " ";
                }
            }
            else if($i%2 == 1){
                if($j%2 == 0){
                    echo '&nbsp;';
                }
                else if($j%2 == 1 && $j < $angka*2-2){
                    echo "#";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/