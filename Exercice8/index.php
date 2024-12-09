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

        $befor = 22 * 24 * 60 * 60;
        
        $dateBefor22Days = $dateNow - $befor;

        echo date("d/m/Y", $dateBefor22Days);
    ?>
</body>
</html>