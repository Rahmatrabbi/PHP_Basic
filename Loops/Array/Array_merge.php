<?php
    $name = ['John', 'David', 'Wick'];
    $age = [22, 23, 25];

    //$array = array_combine($name, $age); //key-name and value-age
     $array = array_merge($name, $age);
    echo '<pre>';
       
    print_r($array);

    echo '</pre>';

?>