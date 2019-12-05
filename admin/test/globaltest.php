<?php
function test1(){
  global $v1,$v2;
  $v2=& $v1;
}

function test2(){
  $GLOBALS['v3']=& $GLOBALS['v1'];
}
$v1=1;
$v2=$v3=0;
test1();
echo $v2."\n";
test2();
echo $v3 ."\n";
function test3(){
  global $a;
  echo $a;
  unset($a);
  echo $a;
}
$a=1;
test3();
echo $a;



?>