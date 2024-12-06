<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <p>
        
    </p>

    <p>
        <?php 
            $time = time(); 
            echo "Now: " . $time . "<br/>";
            $date = DateTimeImmutable::createFromFormat("m-d-Y - H:i", "08-02-2016 - 15:00");
            echo "Last Date: " . $date->getTimestamp();
            die();
           
        ?>
    </p>
</body>
</html>