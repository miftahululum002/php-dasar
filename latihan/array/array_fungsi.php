<?php

$students = [
    [
        'name' => 'Budi',
        'address' => 'Jl. Jendral Sudirman No 1',
        'age' => '16',
        'hobbies' => ['Membaca']
    ],
    [
        'name' => 'Andi',
        'address' => 'Jl. Jendral Sudirman No 2',
        'age' => '16',
        'hobbies' => ['Olahraga', 'Traveling']
    ],
    [
        'name' => 'Joko',
        'address' => 'Jl. Jendral Sudirman No 3',
        'age' => '16',
        'hobbies' => ['Sepakbola', 'Bersepeda', 'Membaca']
    ],
];
$students = ['Hari', 'Budi', 'Salma', 'Salsa'];
echo 'array Awal';
echo '<pre>';
print_r($students);
echo '</pre>';
// die;
$students[] = 'Rudi';
echo '<pre>';
print_r($students);
echo '</pre>';
// die;
echo '<br>';
array_push($students, 'Made');
echo '<pre>';
print_r($students);
echo '</pre>';
// die;


// menghapus element array
$students = ['Hari', 'Budi', 'Salma', 'Salsa'];
echo 'Array awal';
echo '<pre>';
print_r($students);
echo '</pre>';
// die;
echo 'setelah dihapus di bagian akhir';
array_pop($students);
echo '<pre>';
print_r($students);
echo '</pre>';
// die;

// lagi
$students = ['Hari', 'Budi', 'Salma', 'Salsa'];
echo 'Array awal';
echo '<pre>';
print_r($students);
echo '</pre>';
echo 'setelah ditambahkan di awal';
array_unshift($students, 'Siswa Baru');
echo '<pre>';
print_r($students);
echo '</pre>';
// die;

$students = ['Hari', 'Budi', 'Salma', 'Salsa'];
echo 'Array awal';
echo '<pre>';
print_r($students);
echo '</pre>';
// die;
echo 'menghapus element pertama array';
array_shift($students);
echo '<pre>';
print_r($students);
echo '</pre>';
// die;
