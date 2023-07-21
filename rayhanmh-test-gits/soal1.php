<?php
function generatePattern($n) {
    $output = '';
    $sum = 1;

    for ($i = 1; $i <= $n; $i++) {
        $output .= $sum;
        $sum += $i;
        if ($i < $n) {
            $output .= '-';
        }
    }

    return $output;
}

if (isset($_POST['input'])) {
    $input = intval($_POST['input']);
    if ($input <= 0) {
        echo "Input harus lebih besar dari 0";
    } else {
        $output = generatePattern($input);
        echo "Output: " . $output;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> A000124 of Sloane OEIS</title>
</head>
<body>
    <h2>Masukkan nilai:</h2>
    <form method="post" action="">
        <input type="number" name="input">
        <input type="submit" value="Submit">
    </form>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
</body>
</html>
