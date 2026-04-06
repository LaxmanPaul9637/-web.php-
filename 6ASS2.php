<!DOCTYPE html>
<html>
<head>
  <title>Gender Form</title>
</head>
<body>
<h2>Select Your Gender</h2>
<form method="post" action="">
   <label for="gender">Gender:</label>
   <select name="gender" required>
      <option value="">--Select--</option>
	  <option value="Male">Male</option>
	  <option value="Female">Female</option>
	  <option value="Other">Other</option>
	</select>
	<br><br>
	<input type="submit" name="submit" value="SSAubmit">
</form>
<?php
if(isset($_POST['submit']))	{
    $gender=$_POST['gender'];
	echo "<h3>Selected gender:".htmlspecialchars($gender)."</h3>";
}
?>
</body>
</html>
