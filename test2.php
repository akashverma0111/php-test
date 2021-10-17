<?php

$num = 121;
$tmp = $num;
$total= 0;
while($num >= 1){
  $r = $num%10;
  $total= ($total * 10) + $r;
  $num = $num/10;
}
  
  if($total == $tmp){
  echo "Polindrome number";
}else{
  echo "Not polindrome";
}

?>