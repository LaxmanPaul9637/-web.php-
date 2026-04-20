<?php
$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;
$subjects = $xml->createElement("subjects");
$xml->appendChild($subjects);
$data = [
      ["code" => "BCA 245", "name" => "Web Technology Laboratory"],
      ["code" => "BCA 101", "name" => "Programming in C"],
      ["code" => "BCA 202", "name" => "Data Structures"],
      ["code" => "BCA 303", "name" => "Database Management"],
      ["code" => "BCA 404", "name" => "Operating System"]
];
foreach ($data as $d) {
     $sub = $xml->createElement("subject");
     $code = $xml->createElement("subject_code", $d["code"]);
     $name = $xml->createElement("subject_name", $d["name"]);
     $sub->appendChild($code);
     $sub->appendChild($name);
     $subjects->appendChild($sub);
}
$xml->save("subjects.xml");
$xmlData = simplexml_load_file("subjects.xml");
echo "<h3>Subject Code for Web Technology Laboratory:</h3>";
foreach ($xmlData->subject as $s) {
     if (trim($s->subject_name) == "Web Technology Laboratory") {
        echo "Subject Code: " . $s->subject_code;
   }
}
?>