<html>
<?php
/*
* implementation of pascle's traingle;
*/
$n= 20;
$values = array();
$previous = array();
for($i=0; $i < $n; $i++){	
	for($j=0; $j<= $i; $j++){
		if($j==o || $j== $i){
			$values[$j]= 1;
			}
		else{
		$values[$j]= $previous[$j-1] + $previous[$j];		
		}
	}
	foreach($values as $val){print $val." &nbsp;";};
	print "<br \>";
	$previous = $values;
}
?>
</html>
