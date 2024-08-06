<?php

$siswa = ['Budi', 'Rudi', 'Dita', 'Lana', 'siswa 1', 'siswa2', 'siswa 3', 'siswa 3', 'siswa 4', 'siswa 10'];

for ($i = count($siswa) - 1; $i > 0; $i--) {
    echo 'index ' . $i . ' ' . $siswa[$i] . '<br>';
}
