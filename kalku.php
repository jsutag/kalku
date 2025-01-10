<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Operasi Matematika</h1>
        <?php
            function tambah($x) {
                return $x + 5;
            }
            
            function kurang($x) {
                return $x - 5;
            }
            
            function kali($x) {
                return $x * 5;
            }
            
            function bagi($x) {
                return $x / 5;
            }

            $x = 10;
            echo "<p>Hasil dari $x + 5 adalah <span class='result'>" . tambah($x) . "</span></p>";
            echo "<p>Hasil dari $x - 5 adalah <span class='result'>" . kurang($x) . "</span></p>";
            echo "<p>Hasil dari $x × 5 adalah <span class='result'>" . kali($x) . "</span></p>";
            echo "<p>Hasil dari $x ÷ 5 adalah <span class='result'>" . bagi($x) . "</span></p>";
        ?>
    </div>
</body>
</html>