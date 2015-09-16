<?php 
	$t = '';
	$in = 68;
	$sum = 0;
		for($i=1; $i<=$in; $i++) {
			if($i%2 == 0) {
				
				if($i != $in) {
					$t .= $i.'+';
					$sum += $i;
				}else{
					$t .= $i;
					$sum +=$i;
				}
			}
		}
	echo $t . ' = ' . $sum;

 ?>
