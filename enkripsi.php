<?php
function caesarCipherEncrypt($text, $shift)
{
    $result = '';
    // Konversi pergeseran agar selalu berada dalam rentang 0-25
    $shift = $shift % 26;
    // Iterasi setiap karakter dalam teks
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        // Jika karakter adalah huruf besar
        if (ctype_upper($char)) {
            $result .= chr((ord($char) + $shift - 65) % 26 + 65);
        }
        // Jika karakter adalah huruf kecil
        elseif (ctype_lower($char)) {
            $result .= chr((ord($char) + $shift - 97) % 26 + 97);
        }
        // Jika bukan huruf, tambahkan karakter tanpa perubahan
        else {
            $result .= $char;
        }
    }

    return $result;
}

function caesarDecipher($text, $shift)
{
    $result = '';

    // Loop melalui setiap karakter dalam teks
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        // Cek apakah karakter adalah huruf besar
        if (ctype_upper($char)) {
            $result .= chr((ord($char) - $shift - 65 + 26) % 26 + 65);
        }
        // Cek apakah karakter adalah huruf kecil
        elseif (ctype_lower($char)) {
            $result .= chr((ord($char) - $shift - 97 + 26) % 26 + 97);
        }
        // Jika bukan huruf, tambahkan karakter tanpa perubahan
        else {
            $result .= $char;
        }
    }
    return $result;
}

// Contoh penggunaan
$text = "SAYA SISWA DI SMAN 8 MALANG";
echo "Teks asli: " . $text;
echo '<br>';
$shift = 2;
$encryptedText = caesarCipherEncrypt($text, $shift);
// $encryptedText = 'UCAC UKUYC FK UOCP 8 OCNCPI';
echo "Teks terenkripsi: " . $encryptedText;
echo '<br>';
echo 'Deskripsi:' . caesarDecipher($encryptedText, $shift);
