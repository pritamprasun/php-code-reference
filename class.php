<?php
	class student{
		}
	
	$student = new student();
	$student1 = new student();
	
	if (is_a($student , 'student')){
		echo "It's a person. <br />";
		}
		else{
		echo "not a Person. <br />";
		}
	echo get_class($student1);
?>
