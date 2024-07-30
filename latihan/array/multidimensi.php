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
echo '<pre>';
print_r($students);
echo '</pre>';
echo "Daftar Siswa<br>";
foreach ($students as $s => $student) {
    echo 'Nama: ' . $student['name'] . ' umur:' . $student['age'] . ' alamat: ' . $student['address'] . '<br>';
}
