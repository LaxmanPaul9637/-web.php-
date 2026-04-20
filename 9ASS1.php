
<?php
$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;
$department = $xml->createElement("Department");
$xml->appendChild($department);
$cs = $xml->createElement("ComputerScience");
$department->appendChild($cs);
$teachers = [
    ["name" => "Priya Shinde", "qualification" => "NET", "subject" => "Data Structures",
"experience" => "5 years"],
    ["name" => "Rahul Patil", "qualification" => "NET", "subject" => "Machine Learning",
"experience" => "4 years"],
    ["name" => "Sneha Joshi", "qualification" => "NET", "subject" => "Operating System",
"experience" => "6 years"],
    ["name"=> "Amit Deshmukh", "qualification" => "NET", "subject" => "Computer
Networks", "experience" => "8 years"]
];
    foreach ($teachers as $t) {
    $teacher = $xml->createElement("Teacher");
    $name = $xml->createElement("TeacherName", $t["name"]);
    $qualification = $xml->createElement("Qualification", $t["qualification"]);
    $subject = $xml->createElement("SubjectTaught", $t["subject"]);
    $experience = $xml->createElement("Experience", $t["experience"]);
    $teacher->appendChild($name);
    $teacher->appendChild($qualification);
    $teacher->appendChild($subject);
    $teacher->appendChild($experience);
    $cs->appendChild($teacher);
}
$xml->save("Teacher.xml");
echo "Teacher.xml file created successfully!";
?>
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