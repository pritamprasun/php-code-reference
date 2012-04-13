<?php
class shape {
		var $shape;
	public function set_shape($shape, $dim1, $dim2){
		$this->shape = $shape;
		$this->dim1 = $dim1;
		$this->dim2 = $dim2; 
		}
	public function get_area(){	
		if($this->shape=="s"){
			echo "Area of the square =". $this->dim1*$this->dim1." meter square.";
			}
		
		else if($this->shape=="c"){
			echo "Area of the circle =". 3.14*$this->dim1*$this->dim1." meter square.";
			}
		
		else if($this->shape=="t"){
			echo "Area of the Traingle =". 0.5*$this->dim1*$this->dim2." meter square.";
			}
		
		else{
			echo "sorry !!";
			}
	}
	}
	
	$shape1 = new shape();
	$shape1->set_shape("t", 5,20);
	$shape1-> get_area();
	
	

?>
