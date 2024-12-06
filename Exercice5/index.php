<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php  
        
        $dateNow = time();
        
        $date = DateTimeImmutable::createFromFormat("d-m-Y", "16-05-2016");
        $date = $date->getTimestamp();

        $result = $dateNow - $date;
        $result = $result / 60;
        $result = $result / 60;
        $result = $result / 24;
        echo $result;
    ?>
</body>
</html>