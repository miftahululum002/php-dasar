<?php
$host = '127.0.0.1'; // hostname atau ip database mysql
$username  = 'root'; //sesuaikan dengan username database mysql masing-masing
$password = ''; // password user mysql
$database = 'belajar_database'; // nama database yang akan digunakan

// membuat koneksi dengan cara prosedural
// $conn = mysqli_connect($host, $username, $password, $database);
// if (!$conn) { // jika koneksi gagal maka akan ditampilkan pesan error nya
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// // jika konkesi berhasil maka akan muncul pesan sukses
// echo 'Koneksi sukses';

// membuat secara oop
$conn = new mysqli($host, $username, $password, $database);
if ($conn->error) {
    die("Koneksi gagal: " . $conn->error);
}
echo 'Berhasil';
