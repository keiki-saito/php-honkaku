<?php 
function escape(string $val):string
{
  return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
?>