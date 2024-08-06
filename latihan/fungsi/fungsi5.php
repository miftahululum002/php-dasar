<?php
function greeting($name, $address = 'Malang')
{
    $bilangan1 = 10;
    $bilangan2 = 5;
    echo "Halo nama saya <b>$name</b><br>";
    echo "Saya dari <b>$address</b><br>";
    echo "Saya melakukan penjumlahan $bilangan1 + $bilangan2 = " . penjumlahan($bilangan1, $bilangan2) . "<br>";
    echo "<hr>";
}

function penjumlahan($angka1, $angka2)
{
    return $angka1 + $angka2;
}
greeting('Miftahul Ulum', 'Kecamatan Wajak Kabupaten Malang');
// pemanggilan ulang
greeting('Ulum Miftahul');
