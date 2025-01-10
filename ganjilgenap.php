<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ganjil Genap</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <div class="container">
        <h1>Cek Ganjil atau Genap</h1>
        <?php
            function cekGanjilGenap($angka) {
                if($angka % 2 == 0) {
                    echo "<p class='result'>$angka adalah angka <span class='genap'>genap</span></p>";
                } else {
                    echo "<p class='result'>$angka adalah angka <span class='ganjil'>ganjil</span></p>";
                }
            }

            $angka1 = 11;
            cekGanjilGenap($angka1);
        ?>
    </div>
</body>
</html>