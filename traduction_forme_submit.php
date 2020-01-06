<?php
// define variables and set to empty values
$name = $prenom= $email = $numTel = $adresse = $lang_origine =$lang_src=$lang_origine= $file=$typeTrad=$comments=$assermentee="";
$file_uploaded=""
if ($_SERVER["REQUEST_METHOD"] == "post") {
    
  $name = test_input($_POST["nom"]);
  $prenom = test_input($_POST["prenom"]);
  $email = test_input($_POST["email"]);
  $numTel = test_input($_POST["num_tel"]);
  $adresse = test_input($_POST["adresse"]);
  $lang_origine=test_input($_POST["lang_origine"]);
  $lang_src=test_input($_POST["lang_source"]);
  $file_uploaded=test_input($_POST["file_upload"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>