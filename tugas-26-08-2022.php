<?php

$angka = 1;

function luas_lingkaran($angka)
{
    $r = $angka / 3;
    return 3.14 * $r * $r;
}

function keliling_lingkaran($angka)
{
    $r = $angka / 5;
    return 3.14 * $r * 2;
}

function luas_persegi_panjang($angka)
{
    $panjang = $angka / 3;
    $lebar = $angka / 5;

    return $panjang * $lebar;
}

for ($i = 0; $i < 100; $i++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo number_format(luas_persegi_panjang($angka), 2) . "<br>";
    } else if ($angka % 3 == 0) {
        echo number_format(luas_lingkaran($angka), 2) . "<br>";
    } else if ($angka % 5 == 0) {
        echo number_format(keliling_lingkaran($angka), 2) . "<br>";
    } else {
        echo number_format($angka, 2) . "<br>";
    }
    $angka++;
}
