<?php
$siswa = array('Budi', 'Rudi', 'Dita', 'Lana');
echo "array awal sebelum diubah";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i] . "<br>";
}
echo '<hr>';
echo "<br>Setelah ditambahkan<br>";
$siswa[] = 'Rina';
$siswa[] = 'Roni';
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i] . "<br>";
}

// mengubah
echo '<hr>';
echo "<br>Setelah diubah<br>";
$siswa[2] = 'Siswa Ubah';
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i] . "<br>";
}

// menghapus
echo '<hr>';
echo '<br>Setelah dihapus<br>';
unset($siswa[3], $siswa['5']);
for ($i = 0; $i < count($siswa); $i++) {
    if (!empty($siswa[$i])) {
        echo "Nama: " . $siswa[$i] . "<br>";
    }
}
