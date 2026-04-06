<!DOCTYPE html>
<html>
<head>
  <title>Address Form</title>
</head>
<body>
<h2>Enter Your Address</h2>
<form method="post" action="">
   <label for="Address">Address:</label>
   <textarea name="address"rows="5" cols="30" required></textarea>
    <br><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit']))	{
    $address=$_POST['address'];
	echo "<h3>Your Address:</h3>";
	echo nl2br(htmlspecialchars($address));
}
?>
</body>
</html>
