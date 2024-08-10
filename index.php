<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <button link="switch.php">hello</button>
<?php
   $ballance = 0.1;
   $trip = 50;
   if($ballance > $trip)
   {
    echo 'tv der lg';
   }
   else
   {
    echo 'ot tv der lg';
   }
   $myscore = 50;
   if($myscore>=100)
   {
    echo 'pass A';
   } 
   elseif($myscore>=80)
   {
    echo 'pass B';
   }
   elseif($myscore>=60)
   {
    echo 'pass C';
   }
   elseif($myscore>=40)
   {
    echo 'pass D';
   }
   else
   {
    echo 'fail';
   }

   $day = 'M';
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