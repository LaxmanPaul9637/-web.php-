<DOCTYPE html>
<html>
<head>
  <title>Shape Area Calculator</title>
</head>
<body>
<h2>Select Shape</h2>
<form method="post">
   <input type="radio" name="shape"value="triangle">Triangle<br>
   <input type="radio" name="shape"value="square">Square<br>
   <input type="radio" name="shape"value="rectangle">Rectangle<br>
   <input type="radio" name="shape"value="cirle">Cirle<br>
   Enter value1:<input type="text" name="val1"<br><br>
   Enter value2(if required):<input type="text" name="val2"<br><br>
   <input type="submit" name="submit" value="Calculate Area"> 
</form>
<?php
class shape{
   public function area(){
     return 0;
	 }
  }
  class Triangle extends Shape{
     public $base,$height;
     public function __construct($b,$h){
        $this->base=$b;
        $this->height=$h;
  }
  public function area (){
     return 0.5 * $this->base * this->height;
	 }
  }
  class Square extends Shape{
      public $side;
	  public function __construct($s){
	     $this->side = $s;
	 }
     public function area(){
	     return $this->side * $this->side;
		}
    }
	class Rectangle extends Shape{
	  public $length,$width;
	  public function __construct($l,$w){
	     $this->length = $l;
		 $this->width = $w;
	  }
	}
	class Circle extends Shape{
	    public $radius;
		
		
		public function __construct($r){
		$this->radius = $r;
	  }
	  public function area(){
	       return 3.14 * $this->radius * $this->radius;
	  }
	}
	if(isset($_POST['submit'])){
	$shape = $_POST['shape'];
	$v1 = $_POST['val1'];
	$v2 = $_POST['val2'];
	switch($shape){
	    case "triangle";
		     $obj = new Triangle($v1,$v2);
			 echo"Area of Triangle:" .$obj->area();
			 break;
		case "square":
		  $obj = new Square($v1);
		  echo "Area of Square" .$obj->area();
		  break;
        case "rectangle":
          $obj = new Rectangle($v1,$v2);
          echo "Area of Rectangle:" .$obj->area();
          break;
        case"circle":		  
		  $obj = new Circle($v1);
		  echo "Area of Circle:" .$obj->area();
		  break;
		default;
		   echo "Please select a shape!";
	  }
	}
	?>
	</body>
	</html>