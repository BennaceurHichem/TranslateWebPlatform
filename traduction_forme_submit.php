

<?php
// define variables and set to empty values
/*$name = $prenom= $email = $numTel = $adresse = $lang_origine =$lang_src=$lang_origine= $file=$typeTrad=$comments=$assermentee="";
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
*/
/*
         // define variables and set to empty values
         $name = $prenom= $email = $numTel = $adresse = $lang_origine =$lang_src=$lang_origine= $file=$typeTrad=$comments=$assermentee="";
         $file_uploaded="";
         $nameErr = $prenomErr= $emailErr = "";
         $numTelErr = $adresseErr = $lang_origineErr =$lang_srcErr=$lang_origineErr="";
         $fileErr=$typeTradErr=$commentsErr=$assermenteeErr="";
         $file_uploadedErr="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nom"])) {
               $nameErr = "le nom est obligatoire";
            }else {
               $name = test_input($_POST["name"]);
            }
            if (empty($_POST["prenom"])) {
                $prenomErr = "le prenom est obligatoire";
             }else {
                $prenom = test_input($_POST["name"]);
             }
            
            


            if (empty($_POST["email"])) {
               $emailErr = "remplissez ce champ d'eamil svp";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "format de mail non valide"; 
               }
            }
            
            
            if (empty($_POST["num_tel"])) {
                $numTelErr = "remplissez le numéros de téléphone";
             }else {
                $numTel = test_input($_POST["email"]);
                
                if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $numTel)) {
                    $numTelErr = "numeros de téléphone non valide"; 
                  }
             }

             if (empty($_POST["adresse"])) {
                $adresseErr = "l'adresse  est obligatoire";
             }else {
                $adresse = test_input($_POST["adresse"]);
             }
             //il reste language source et dest   


          this is the file management 
             if(isset($_FILES['uploaded_file'])) {
                $errors     = array();
                $maxsize    = 5097152; //5MB max 
                //accept only pdf files
                $acceptable = array(
                    'application/pdf',
                 
                );
            
                if(($_FILES['uploaded_file']['size'] >= $maxsize) || ($_FILES["uploaded_file"]["size"] == 0)) {
                    $errors[] = 'File too large. File must be less than $maxsize megabytes.';
                }
            
                if(!in_array($_FILES['uploaded_file']['type'], $acceptable) && (!empty($_FILES["uploaded_file"]["type"]))) {
                $errors[] = 'format de fichier non valide. attadcher une ficheir  PDF svp';
            }
            
            if(count($errors) === 0) {
                //Déplace un fichier téléchargé
                move_uploaded_file($_FILES['uploaded_file']['tmpname'], '/store/to/location.file');
            } else {
                foreach($errors as $error) {
                    echo '<script>alert("'.$error.'");</script>';
                }
            
                die(); //Ensure no more processing is done
            }
            }


            if (empty($_POST["comment"])) {
               $comment = "";
            }else {
               $comment = test_input($_POST["comment"]);
            }
         
          
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

         */
      
?>