<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <?php
    
    $dateFeb = DateTimeImmutable::createFromFormat("d-m-Y - H:i", "01-02-2016 - 00:00");
       $dateMar = DateTimeImmutable::createFromFormat("d-m-Y - H:i", "01-03-2016 - 00:00");

       $dateFebTime = $dateFeb->getTimestamp(); 
       $dateMarTime = $dateMar->getTimestamp();

       $febDays = $dateMarTime - $dateFebTime;

       $passMin = $febDays / 60;
       $passHours = $passMin / 60;
       $passDays = $passHours / 24;

       echo "Le nombre de jours en Fevrier 2016 est de : " . $passDays . " jours.";
    ?>
</body>
</html>