<?php
   
   echo '<ul>';
   for($i = 1; $i <= 3; $i++){
       echo '<li>Parent Item</li>';
       echo '<ol>';
       for($j=1; $j<=2; $j++){
         echo '<li>Child item</li>';
               echo '<ul>';
               for($k=1; $k<=4; $k++){
                     echo '<li>Pre-Child Item</li>';
            }
            echo '<ul/>';
       }
       echo '</ol>';
   }
   echo '</ul>';

?>