<?php
class File{
   public $name;
   public $size;
//Constructor
public function __construct($name,$size){
   $this->name=$name;
   $this->size=$size;
 }
 //Static method to calculate total size
 public static function calculateTotalSize($files){
   $total= 0;
   foreach($files as $file) {
      $total +=$file->size;
	}
	 return $total;
  }
}
//Create file objects
$file1=new File("document.txt",500);
$file2=new File("name.jpg",1200);
$file3=new File("video.mp4",3000);
//Store in array
$allFiles = [$file1,$file2,$file3];
//Call static method 
$totalSize=File::calculateTotalSize($allFiles);
echo"Total File Size:".$totalSize."KB";
?>