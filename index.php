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
?>