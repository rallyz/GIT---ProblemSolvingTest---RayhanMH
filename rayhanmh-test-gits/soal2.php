<?php
function denseRanking($totalPlayers, $scores, $numGames, $gameScores) {
    rsort($scores);

    $rankings = array();

    for ($i = 0; $i < $numGames; $i++) {
        $gameScore = $gameScores[$i];

        $rank = 1;
        foreach ($scores as $score) {
            if ($gameScore >= $score) {
                break;
            }
            $rank++;
        }

        $rankings[] = $rank;
    }

    return $rankings;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalPlayers = intval($_POST['totalPlayers']);
    $scores = array_map('intval', explode(' ', trim($_POST['playerScores'])));
    $numGames = intval($_POST['numGames']);
    $gameScores = array_map('intval', explode(' ', trim($_POST['gameScores'])));

    $output = denseRanking($totalPlayers, $scores, $numGames, $gameScores);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dense Ranking</title>
</head>
<body>
    <h1>Dense Ranking</h1>
    <form method="post">
        <label for="totalPlayers">Masukkan jumlah pemain:</label>
        <input type="number" name="totalPlayers" id="totalPlayers" required><br>

        <label for="playerScores">Masukkan daftar skor pemain (pisahkan dengan spasi):</label>
        <input type="text" name="playerScores" id="playerScores" required><br>

        <label for="numGames">Masukkan jumlah permainan GITS:</label>
        <input type="number" name="numGames" id="numGames" required><br>

        <label for="gameScores">Masukkan skor setiap permainan GITS (pisahkan dengan spasi):</label>
        <input type="text" name="gameScores" id="gameScores" required><br>

        <input type="submit" value="Submit"><br>
    </form>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
    <?php if (isset($output)) { ?>
        <p>Hasil Output: <?php echo implode(' ', $output); ?></p>
    <?php } ?>
</body>
</html>