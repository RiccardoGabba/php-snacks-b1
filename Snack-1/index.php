<?php 
include __DIR__ ."/model/data.php";
//var_dump($match)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     for ($i = 0; $i < count($squadre); $i++) {
        // Olimpia Stella Azzurrao - Cantù | 55 - 60
        $match = $squadre[$i];
        echo $match["casa"] . " " . $match["ospite"] . " | " . $match["casaPunti"] . " - " . $match["ospitePunti"] . "<br>";
        var_dump($match);
    }
    
    ?>
</body>
</html>