<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <h1>perulangan if</h1>
    <?php

    $total_belanja = 150000;
    if($total_belanja > 100000){
        echo "Anda dapat hadiah mobil !";
    }
    ?>
    <hr>
    <h1>percabangan for</h1>
    <?php
       for($i = 0; $i < 10; $i++){
        echo "<h2>Ini perulangan ke-$i</h2>";
       }
    ?>
    <hr>
    <h1>perulangan while</h1>
    <?php
    $ulangi = 0;
    while($ulangi < 10){
     echo "<p>Ini adalah perulangan ke-$ulangi</p>";
     $ulangi++;
    }
    ?>
    <hr>
    <h1>perulangan foreach</h1>
    <?php
        $matakuliah = [
            "Pengembangan Aplikasi Mobile ",
            "Aplikasi Berorientasi Service",
            "Pengembangan Aplikasi Web",
            "Pengembangan Aplikasi Desktop"
           ];
           echo "<h5>Nama Mata Kuliah:</h5>";
           echo "<ul>";
           foreach($matakuliah as $matkul){
            echo "<li>$matkul</li>";
           }
           echo "</ul>";
    ?>
</body>
</html>