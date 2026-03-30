<DOCTYPE html>
<html>
<head>
    <title>Cylinder Area and Volume</title>
</head>
<body>
<form method="post">
    Enter Radius:<input tyape="text" name="radius"><br><br>
	Enter Height:<input tyape="text" name="height"><br><br>
	<input type="submit" name="submit" value="Calculate">
</form>
<?php
interface Shape{
    const PI = 3.14;
    public function area();
    public function volume();
}
class Cylinder implements Shape{
   public $r,$h;
   public function __contruct($radius,$height){
     $this->r=$radius;
     $this->h=height;
   }
public function area() {
    return 2 *self::PI * $this->r* ($this->r+ $this->h);
   }
public function volume() {   
  return self::PI * $this->r* $this->r * $this->h;
   }
}
if(isset($_POST['submit'])) {
   $radius = $_POST['radius'];
   $height = $_POST['height'];
   $obj = new Cylinder($radius,$height);
   echo"<h3>Results:</h3>";
   echo"Surface Area:".$obj->area()."<br>";
   echo "Volume:".$obj->volume();
}
?>
</body>
</html>