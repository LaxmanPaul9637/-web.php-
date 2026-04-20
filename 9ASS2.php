<?php
$xml = simplexml_load_file("Teacher.xml");
echo "<table border='1' cellpadding='10'>";
echo "<tr>
     <th>Teacher Name</th>
     <th>Qualification</th>
     <th>Subject Taught</th>
     <th>Experience</th>
  </tr>";
foreach ($xml->ComputerScience->Teacher as $t) {
  echo "<tr>";
  echo "<td>" . $t->TeacherName . "</td>";
  echo "<td>" . $t->Qualification . "</td>";
  echo "<td>" . $t->SubjectTaught . "</td>";
  echo "<td>" . $t->Experience . "</td>";
  echo "</tr>";
}
echo "</table>";
?>