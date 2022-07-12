<?php
$a = "abc";
  foreach(file('/usr/share/dict/linux.words') as $line){
  if(strpos($line, $a) !== false){
    echo"$line<br/>";
  }
?>
