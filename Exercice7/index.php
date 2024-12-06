<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <?php 
        $dateNow = new DateTime();
        $dateNow = $dateNow->getTimestamp();
        
        $time = 20 * 24 * 60 * 60;

        $dateAfter20Days = $dateNow + $time;

        echo date("d/m/Y", $dateAfter20Days);
    ?>
</body>
</html>