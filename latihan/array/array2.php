<?php
$siswa = array('Budi', 'Rudi', 'Dita', 'Lana');
echo "array awal sebelum diubah";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i] . "<br>";
}
echo "<br><br>";
$siswa[1] = 'Rudi Ubah';
echo "Array setelah diubah<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i] . "<br>";
}

// $siswa = array('Budi', 'Rudi', 'Dita', 'Lana');
// foreach ($siswa as $key => $value) {
//     echo "Nama: " . $value . "<br>";
// }


// $siswa = array('Budi', 'Rudi', 'Dita', 'Lana');
// $i = 0;
// while ($i < count($siswa)) {
//     echo "Nama: " . $siswa[$i] . "<br>";
//     $i++;
// }
// $siswa = array('Budi', 'Rudi', 'Dita', 'Lana');
// $i = 0;
// do {
//     echo "Nama: " . $siswa[$i] . "<br>";
//     $i++;
// } while ($i < count($siswa));
