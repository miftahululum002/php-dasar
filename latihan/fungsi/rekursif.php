<?php
function faktorial($bilangan)
{
    if ($bilangan < 2) {
        return 1;
    } else {
        return $bilangan * faktorial($bilangan - 1);
    }
}

$angka = 3;
echo "Hasil faktorial $angka adalah: " . faktorial($angka);
