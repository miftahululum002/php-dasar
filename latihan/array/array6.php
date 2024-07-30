<?php
$siswa1 = [
    'name' => 'Budi',
    'gender' => 'Laki-laki',
    'address' => 'Jl. Sumber sari gang buntu',
];
echo '<pre>';
print_r($siswa1);
echo '</pre>';
echo '<hr>';


unset($siswa1['address']);

echo '<pre>';
print_r($siswa1);
echo '</pre>';
