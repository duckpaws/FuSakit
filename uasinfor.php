<?php
// kalori
$kalori = 2500;

echo "Jumlah kalori perhari adalah", "<br>";
$senin = $kalori * 3;
$selasa = $kalori * 2;
$rabu = $kalori * 2;
$kamis = $kalori * 3;
$jumat = $kalori * 3;
$sabtu = $kalori * 2;
$minggu = $kalori * 1;

    echo "Hari senin =", $senin, " kalori", "<br>";
    echo "Hari selasa =", $selasa, " kalori", "<br>";
    echo "Hari rabu =", $rabu, " kalori", "<br>";
    echo "Hari kamis =", $kamis, " kalori", "<br>";
    echo "Hari jumat =", $jumat, " kalori", "<br>";
    echo "Hari sabtu =", $sabtu, " kalori", "<br>";
    echo "Hari minggu =", $minggu, " kalori", "<br>";

echo "<br>", "Setelah mengonsumsi makanan selama seminggu", "<br>";
$seminggu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "total kalori yang Fu dapatkan dalam seminggu adalah ", $seminggu, " kalori", "<br>", "<br>";



// istirahat
$istirahat = 8;

$seninis = 5;
$selasais = 6;
$rabuis = 8;
$kamisis = 8;
$jumatis = 5;
$sabtuis = 6;
$mingguis = 4;

echo "<br>", "Dalam seminggu", "<br>";
$semingguis = $seninis + $selasais + $rabuis + $kamisis + $jumatis + $sabtuis + $mingguis;
echo "Total waktu yang Fu habiskan untuk istirahat adalah ", $semingguis, " jam", "<br>", "<br>";



// status kesehatan
echo "Total kalori yang dibutuhkan manusia adalah ", $kalori * 21, " kalori", "<br>";
echo "Total istirahat yang dibutuhkan manusia adalah ", $istirahat * 7, " jam", "<br>", "<br>";

$butuhkalori = $kalori * 3 * 7;
$butuhistirahat = $istirahat * 7;
    if ($seminggu >= $butuhkalori && $semingguis >= $butuhistirahat){
        echo "Jadi, Fu sudah sembuh dan dapat beraktifitas secara normal";
    }
    elseif ($seminggu <= $butuhkalori && $semingguis <= $butuhistirahat) {
        echo "Jadi, Fu masih butuh istirahat dan kalori yang mencukupi";
    }








