<?php
function isBalanced($input) {
    $stack = array();
    $opening = array('(', '{', '[');
    $closing = array(')', '}', ']');

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if (in_array($char, $opening)) {
            array_push($stack, $char);
        } elseif (in_array($char, $closing)) {
            $lastChar = array_pop($stack);

            if ($lastChar == null || array_search($lastChar, $opening) !== array_search($char, $closing)) {
                return "NO";
            }
        }
    }

    return (empty($stack)) ? "YES" : "NO";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    $result = isBalanced($input);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Check Bracket Balance</title>
</head>
<body>
    <h2>Check Bracket Balance</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input String:</label>
        <input type="text" name="input" id="input" required>
        <br>
        <input type="submit" value="Check">
    </form>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($result)) : ?>
        <h2>Result:</h2>
        <p><?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
