<?php
$array = [
    [
        'name' => 'Budi',
        'address' => 'Malang',
        'age' => 16,
        'gender' => 'Laki-laki'
    ],
    [
        'name' => 'Rini',
        'address' => 'Sumbersari',
        'age' => 16,
        'gender' => 'Perempuan'
    ],
];
// function showSiswa($data)
// {
//     // tulis kode disini
// }

showSiswa($array);


function showSiswa($data)
{
    foreach ($data as $key => $value) {
        echo ($key + 1) . '. Nama: ' . $value['name'] . ', alamat: ' . $value['address'] . ', umur: ' . $value['age'] . ', jenis kelamin: ' . $value['gender'];
        echo '<br>';
    }
}
