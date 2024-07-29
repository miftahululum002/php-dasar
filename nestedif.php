<?php
$nilai = 60;
$kelas = 'XI';
echo "Kelas $kelas<br>";
echo "Nilai Anda $nilai<br><br>";
if ($nilai >= 75) {
    if ($kelas == 'X') {
        echo "Nilai: $nilai, Anda naik kelas XI";
    } elseif ($kelas == 'XI') {
        echo "Nilai: $nilai, Anda naik kelas XII";
    } elseif ($kelas == 'XII') {
        echo  "Nilai: $nilai, Anda lulus";
    } else {
        echo "Nilai: $nilai, Anda salah kelas";
    }
} else {
    echo 'Nilai anda dibawah KKM';
}
