<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sum of even of odd number</title>
</head>
<body>
	<form action="even.php">
		<input type="text" name = "type">
		<input type="text" name ="range">
		<input type="submit" name="submit">
	</form>
</body>
</html>


<?php 
	
	if (isset($_GET['submit'])) {
		function check($type, $range) {
			$total = '';
			$sum = 0;
			if($type == 'even') {
				for($i=1; $i<=$range; $i++) {
					if($i%2 == 0) {
						
						if($i < $range - 1) {
							$total .= $i.'+';
							$sum += $i;
						}else{
							$total .= $i;
							$sum +=$i;
						}
					}
				}
			}elseif($type == 'odd') {
				for($i=1; $i<=$range; $i++) {
					if($i%2 != 0) {
						
						if($i < $range - 1) {
							$total .= $i.'+';
							$sum += $i;
						}else{
							$total .= $i;
							$sum +=$i;
						}
					}
				}
			}

			return $total . ' = ' . $sum;
		}
		$type = $_GET['type'];
		$range = $_GET['range'];
		$show = check($type, $range);
		echo "<br />";
		echo $show;
	}
 ?>
