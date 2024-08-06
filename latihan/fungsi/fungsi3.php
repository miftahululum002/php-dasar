<?php
function greeting($name, $address = 'Malang')
{
    echo "Halo nama saya <b>$name</b><br>";
    echo "Saya dari <b>$address</b><br>";
    echo "Semoga harimu menyenangkan<br>";
    echo "<hr>";
}

greeting('Miftahul Ulum', 'Kecamatan Wajak Kabupaten Malang');
// pemanggilan ulang
greeting('Ulum Miftahul');
