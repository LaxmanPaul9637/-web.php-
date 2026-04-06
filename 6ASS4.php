<!DOCTYPE html>
<html>
<head>
  <title>Course Selection</title>
</head>
<body>
<h2>Select Your Course</h2>
<form method="post" action="">
   <input type="radio" name="course" value="FY.BCA" required> FY.BCA<br>
   <input type="radio" name="course" value="SY.BCA"> SY.BCA<br>
   <input type="radio" name="course" value="TY.BCA"> TY.BCA<br>
   <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit']))	{
    $course=$_POST['course'];
   echo "<h3>Selected Course:".htmlspecialchars($course)."</h3>";
}
?>
</body>
</html>