<?php
$array = ['a', 'b', 'c', 'd', 'e'];
foreach ($array as $data) {
    echo "$data<br>";
}

$siswa = ['Budi', 'Susi', 'Lala', 'Lili', 'Lulu'];
echo "Daftar siswa<br>";
echo "<ol>";
foreach ($siswa as $nama) {
    echo "<li>$nama</li>";
}
echo "</ol>";


$students = [
    [
        'name' => 'Budi',
        'address' => 'Dinoyo',
    ],
    [
        'name' => 'Susi',
        'address' => 'Batu',
    ],
    [
        'name' => 'Lala',
        'address' => 'Singosari',
    ],
    [
        'name' => 'Lili',
        'address' => 'Klojen',
    ],
    [
        'name' => 'Lulu',
        'address' => 'Lowokwaru',
    ],
];

echo "Daftar siswa<br>";
foreach ($students as $s => $student) {
    echo "<b>" . $student['name'] . "</b>" . " tinggal di " . $student['address'] . "<br>";
}
