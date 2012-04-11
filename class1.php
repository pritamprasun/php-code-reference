<?php
	class student{
		var $first_name;
		var $last_name;
		
		var $total_student = 35;
		function say_name($name){
			echo "My name is ".$name." <br />";
			echo "This is the answer from ". get_class($this)." class <br />";
			}
		function ref(){
			$this -> say_name("ram");
			}
		}
	
	$student = new student();
	$student1 = new student();
	
	if (is_a($student , 'student')){
		echo "It's a person. <br />";
		}
		else{
		echo "not a Person. <br />";
		}
	echo get_class($student1)."<br />";
	
	$student->say_name("pritam"); //calling "say_name" method of student class.
	$student->ref();
	
	echo $student1->total_student ;
	
?>
