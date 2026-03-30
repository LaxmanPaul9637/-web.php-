<?php
//Abstact Class
abstract class shape {
   //Abstract Method(No body)
   abstract public function calculateArea();
}
//triangle Class
class Triangle extends Shape{
   private $base;
   private $height;
   public function __construct($base,$height){
      $this->base=$base;
	  $this->height=$height;
}
public function calculateArea(){
    return 0.5 * $this->base * $this->height;
  }
}
//Rectangle Class
class Rectangle extends Shape{
    private $length;
	private $width;
	public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
	}
    public function calculateArea(){
       return $this->length * $this->width;
	 }
}
//Create Objects
$triangle = new Triangle(10,5);
$rectangle = new Rectangle(8,4);
//Display Areas
echo"Triangle Area:".$triangle->calculateArea()."<br>";
echo"Rectangle Area:".$rectangle->calculateArea()."<br>";
?>