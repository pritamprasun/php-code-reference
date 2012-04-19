<?php
class arrtoobj{
	function seter($detail){
	
	}

}
$detail = array("fname"=> "Pritam", "lname"=>"prasun");
$obj= (object)$detail;
print $obj->fname;

?>
