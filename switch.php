<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $day = M;
    switch($day)
    {
        case 'M' :
            echo 'Monday';
            break;
        case 'T' :
            echo 'Tuesday';
            break;
        case 'W' :
            echo 'Wednesday';
            break;
        case 'TH' :
            echo 'Thursday';
            break;
        case 'F' :
            echo 'Friday';
            break;
        case 'S' :
            echo 'Saturday';
            break;
        case 'Su';
            echo 'Sunday';
            break;
        default:
            echo 'error';
            break;
    }
    ?>
</body>
</html>