<?php 

$num = 20;
loop($num);
function loop($n) {
static $i = 0;
	if($i > $n) {
		return 0;
	}else{
		echo $i."<br/>";
		$i++;
		loop($n);
	}
	
}


?>