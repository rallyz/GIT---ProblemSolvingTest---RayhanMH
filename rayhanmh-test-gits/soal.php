<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soal = $_POST["soal"];

    // Redirect ke halaman soal yang sesuai
    switch ($soal) {
        case '1':
            header("Location: soal1.php");
            exit;
        case '2':
            header("Location: soal2.php");
            exit;
        case '3':
            header("Location: soal3.php");
            exit;
        default:
            // Jika input tidak valid, kembali ke halaman index
            header("Location: index.php");
            exit;
    }
}
?>
