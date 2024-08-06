<?php

// for ($i = 0; $i < 100; $i++) {
//     echo $i . '. Saya belajar web development dengan php <br>';
// }

// $k = 10;
// while ($k < 10) {
//     echo $k . '. Saya belajar web development dengan php <br>';
// }

$p = 10;
do {
    echo $p . '. Saya belajar web development dengan php bagian do while<br>';
    $p++;
} while ($p < 10);

echo '<pre>';
print_r($p);
echo '</pre>';
die;
