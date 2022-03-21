<?php
    $mhs = array(
        array("Sinta","11223344","Denpasar"),
        array("Arif","12121212","Gianyar"),
        array("Dinda","21212121","Negara"),
        array("Hidayat","32323223","Surabaya")
    );

    for($brs=0;$brs<4;$brs++){
        echo "Mahasiswa ".$mhs[$brs][0];
        echo " dengan NIM " . $mhs[$brs][1];
        echo " berasal dari ".$mhs[$brs][2];
        echo "<br>";
    }
