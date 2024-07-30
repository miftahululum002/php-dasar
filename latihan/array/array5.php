<?php
$siswa1 = [
    'name' => 'Budi',
    'gender' => 'Laki-laki',
    'address' => 'Jl. Sumber sari gang buntu',
];

$siswa2 = array(
    'name' => 'Rani',
    'gender' => 'Perempuan',
    'address' => 'Jl. Sumber sari gang satu',
);

echo "Siswa 1<br>";
echo "Nama: " . $siswa1['name'] . "<br>";
echo "Jenis Kelamin: " . $siswa1['gender'] . '<br>';
echo "Alamat: " . $siswa1['address'] . '<br>';

echo '<hr>';
echo "Siswa 2<br>";
echo "Nama: " . $siswa2['name'] . "<br>";
echo "Jenis Kelamin: " . $siswa2['gender'] . '<br>';
echo "Alamat: " . $siswa2['address'] . '<br>';
