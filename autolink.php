<?php
function autolink($str){
	$str_array= explode(" ",$str);// "the link is "  "link.com. click on it"
	$output= "";
	
	foreach($str_array as $string){
		if(substr($string, 0,7)=="http://"){
		$string = '<a href="'. $string .'">'. $string.'</a>';
		}
		$output= $output.$string.' ';
	}
		return $output;
	
	
	//return explode("http://",$str);

	}
print_r (autolink("the link is http://link.com . click on it"));
?>
