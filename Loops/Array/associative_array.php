<?php
   $subject = array(
      'Bangla' => 77,
      'English' => 67,
      'Math' => 98,
      'Chemistry' => 57,
      'Physics' => 89


   );
     echo '<ul>';
   foreach($subject as $key => $subject){
    echo '<li>'.$key.' '.$subject.'</li>';
   }
   echo '</ul>';


?>