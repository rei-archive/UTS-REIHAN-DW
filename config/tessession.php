<?php
session_start();

// Misalkan Anda memiliki beberapa variabel session

// Menampilkan semua variabel session
echo "<pre>"; // Tag <pre> untuk format yang lebih mudah dibaca
var_dump($_SESSION);
echo "</pre>";

// Menampilkan variabel session tertentu
echo "<pre>";
var_dump($_SESSION['username']);
echo "</pre>";


if (isset($_SESSION['username'])) {
    echo "Variabel session 'nama_variabel' berisi.";
    // Anda dapat mengakses nilai variabel session: $_SESSION['nama_variabel']
} else {
    echo "Variabel session 'nama_variabel' null atau tidak diatur.";
}
?>