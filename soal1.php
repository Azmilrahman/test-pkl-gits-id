<?php

    function angka1($array) {
        $angka2 = 0;
        $angka3 = 0;
        
        foreach ($array as $data) {
            if ($data == 1) {
                return $angka2 += 2  ;
            }
            $angka4 = $array < $angka2 && $array = $angka2;
            
            if ($angka4 == 0 && $data == 0 ) {
                return $angka2;
            }
        }
    }

    $array = [1, 1, 0, 1, 1, 1];
    echo angka1($array);

?>