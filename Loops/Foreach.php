<?php
   /* $colors = array(
       'Red',
       'Green',
       'Orange',
       'Blue'

    );
  echo '<ol>';
    foreach($colors as $color){
        ?>
            <li><?php echo $color;?></li>
            <?php

    }
    echo '</ol>';
  */
  $infos = array(
    'John' => 22,
    'David' => 23,
    'Wick' => 24
  );
  echo '<ol>';
  foreach($infos as $key => $info){
    echo 'My Name is '.$key.'and Age is '.$info.'<br/>';
  }
  echo '</ol>';

?>