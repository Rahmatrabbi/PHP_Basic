<?php
   //$str = "<h1>We love PHP <b>very</b> <i>much.</i></h1>";

   //echo strip_tags($str, '<h1>, <i>');


   $str = "We Love Our Country";

   echo wordwrap($str, 4, '<br/>');
?>