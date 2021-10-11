<?php 
// https://www.codewars.com/kata/5875b200d520904a04000003

function enough($c, $o, $w) {
  return ($o+$w)-$c < 0 ? 0 : ($o+$w)-$c;
}
?>