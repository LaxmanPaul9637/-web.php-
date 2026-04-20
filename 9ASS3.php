<?php
$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;
$college = $xml->createElement("ABC_College");
$xml->appendChild($college);
$dept = $xml->createElement("Computer_Application_Department");
$college->appendChild($dept);
$course = $xml->createElement("Course", "BCA(Science)");
$students = $xml->createElement("Student_Strength", "80");
$teachers = $xml->createElement("Number_of_Teachers", "12");
$dept->appendChild($course);
$dept->appendChild($students);
$dept->appendChild($teachers);
$xml->save("College.xml");
echo "XML file generated successfully!";
?>
