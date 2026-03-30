<?php
class vehicle{
//Properties
public$brand;
public$model;
public$year;
//Constructor
public function __construct($brand,$model,$year) {
$this->brand=$brand;
$this->model=$model;
$this->year=$year;
}
//Method to display vehicle details
public function displayDetails(){
echo"Vehicle Details:<br>";
echo"Brand.".$this->brand."<br>";
echo"Model.".$this->model."<br>";
echo"Year.".$this->year."<br>";
}
}
//Create object
$vehicle1=new vehicle("Toyota","Corolla",2022);
//Call method
$vehicle1->displayDetails();
?>
