<?php
 $test='hello,world';
 function abc(){
   global $test;
   echo($test);
 }
 abc();

 ?>