<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <p>
        <?php 
           $time = new DateTime();
           $date = new IntlDateFormatter("fr_FR");
           $date->setPattern("EEEE d MMMM yyyy");
           echo $date->format($time);
        ?>
    </p>
</body>
</html>