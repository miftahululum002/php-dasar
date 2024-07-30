<?php
$nilai = 80;
if ($nilai >= 80) {
    $rapor = "A";
} elseif ($nilai >= 70) {
    $rapor = 'B';
} elseif ($nilai >= 60) {
    $rapor = 'C';
} else {
    $rapor = 'Silahkan remidi';
}

echo "Nilai anda: $nilai<br>";
echo "Rapor: $rapor";
