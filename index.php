<!DOCTYPE html>
<html>


<head>
    <title>ProjetWeb</title>

    <!-- recaptchav2 script with the secret code -->


    <meta charset="UTF-8">

    <script src='https://www.google.com/recaptcha/api.js'></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="css/fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <script src="https://kit.fontawesome.com/a33d1d077b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/tooplate-style.css">
    <!-- animate.css library for css animation -->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card_style.scss">
    <link rel="stylesheet" type="text/css" href="css/button.scss">
    <link rel="text/javascript" href="js/main.js">
    <link rel="text/javascript" href="js/Myanimations.js">



</head>


<body>


<?php
     /*
     FORM VALIDATION WITH PHP
    
     
     // define variables and set to empty values
         $name = $prenom= $email = $numTel = $adresse = $lang_origine =$lang_src=$lang_origine= $file=$typeTrad=$comments=$assermentee="";
         $file_uploaded="";
         $nameErr = $prenomErr= $emailErr = "";
         $numTelErr = $adresseErr = $lang_origineErr =$lang_srcErr=$lang_origineErr="";
         $fileErr=$typeTradErr=$commentsErr=$assermenteeErr="";
         $file_uploadedErr="";
if(isset($_POST["submit"]))
{

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
               $emailErr = "remplissez ce champ d'email svp";
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
}
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         */
      ?>


    <header>
        <!-- NavBar Code -->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
            <a class="navbar-brand" href="#">STRIKE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item active ">
                        <h6 class="text-uppercase font-weight-bold">
                            <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                        </h6>

                    </li>
                    <li class="nav-item">
                        <h6 class="text-uppercase font-weight-bold">
                            <a class="nav-link" href="#">traducteurs</a>
                        </h6>

                    </li>
                    <li class="nav-item">
                        <h6 class="text-uppercase font-weight-bold">
                            <a class="nav-link" href="#">Blog</a>
                        </h6>
                    </li>
                    <li class="nav-item">
                        <h6 class="text-uppercase font-weight-bold">
                            <a class="nav-link" href="#">Recrutement</a>
                        </h6>
                    </li>
                    <li class="nav-item">
                        <h6 class="text-uppercase font-weight-bold">
                            <a class="nav-link" href="#">à propos</a>
                        </h6>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- NavBarCode end -->


    </header>


    <section class="main_part">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="row" id="main_row">



                        <div>
                            <img class="main_img animated slideInLeft"
                                src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                height="inherit">
                        </div>



                        <div>

                            <ul class="social-icons">
                                <li><a href="#"><img src="img/fb.png" alt=""></a></li>
                                <li><a href="#"><img src="img/tw.png" alt=""></a></li>
                                <li><a href="#"><img src="img/go.png" alt=""></a></li>
                                <li><a href="#"><img src="img/pin.png" alt=""></a></li>
                                <li><a href="#"><img src="img/st.png" alt=""></a></li>
                                <li><a href="#"><img src="img/dr.png" alt=""></a></li>
                            </ul>

                        </div>

                        <div class="col-md-6 text-center">
                            <div class="conteneur2 diapo col">
                                <div class="d2"></div>
                            </div>
                        </div> 
      









                        <!--second 1/2 column -->



                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>










        </div>



    </section>


    <section class="second_section">

        <div class="row">

            <div class="col-md-6">




                <div class="blog-list clearfix">
                    <div class="blog-box row wow slideInLeft">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                        alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">Banana-chip chocolate cake recipe</a></h4>
                            <p class="description-article-text">Aenean interdum arcu blandit, vehicula magna non,
                                placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit.
                                Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.Aenean interdum arcu
                                blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea
                                sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor
                                odio.Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                ac felis nec, maximus tempor odio.Aenean interdum arcu blandit, vehicula magna non,
                                placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit.
                                Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.Aenean interdum arcu
                                blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea
                                sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor
                                odio.Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                ac felis nec, maximus tempor odio.</p>
                            <div>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">11 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                                <a href="#" class="button-suite jump-link">Lire la suite</a>
                            </div>

                        </div>

                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box row wow slideInLeft data-wow-delay=" 0.2s"">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                    alt="" class="img-fluid">
                                <div class="hovereffect"></div>
                            </a>
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="single.html" title="">10 practical ways to choose organic vegetables</a></h4>
                        <p class="description-article-text">Aenean interdum arcu blandit, vehicula magna non, placerat
                            elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim
                            nibh, maximus ac felis nec, maximus tempor odio.</p>
                        <div>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">10 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                            <a href="#" class="button-suite jump-link">Lire la suite</a>
                        </div>

                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box row wow slideInLeft">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                    alt="" class="img-fluid">
                                <div class="hovereffect"></div>
                            </a>
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="single.html" title="">We are making homemade ravioli</a></h4>
                        <p class="description-article-text">Aenean interdum arcu blandit, vehicula magna non, placerat
                            elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim
                            nibh, maximus ac felis nec, maximus tempor odio.</p>
                        <div>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">09 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Clara</a></small>

                            <a href="#" class="button-suite jump-link">Lire la suite</a>

                        </div>

                    </div><!-- end meta -->
                </div><!-- end blog-box -->

            </div>










            <div class="col-md-6">




                <div>

                    <section class="forms-section wow slideInRight" id="form1-div">
                        <h1 class="section-title">Veuillez Connectez </h1>
                        <div class="forms">
                            <div class="form-wrapper is-active">
                                <button type="button" class="switcher switcher-login">
                                    Connexion
                                    <span class="underline"></span>
                                </button>
                                <form class="form form-login" id="connexion_forme"  action="connexion_form.php">
                                    <fieldset>
                                        <legend>Please, enter your email and password for login.</legend>
                                        <div class="input-block">
                                            <label for="login-email">E-mail</label>
                                            <input id="login-email" name="email_connexion" type="email" required>
                                         
                                        </div>
                                        <div class="input-block">
                                            <label for="login-password">Password</label>
                                            <input id="login-password" name="pass_connexion" type="password" required>
                                        </div>
                                    </fieldset>
                                    <button type="submit" name="submit_connexion_form" class="btn-login">Connexion</button>
                                </form>
                            </div>
                            <div class="form-wrapper">
                                <button type="button" class="switcher switcher-signup">
                                    Inscription
                                    <span class="underline"></span>
                                </button>
                                <form class="form form-signup" id="inscription_form" action="inscription_form.php">
                                    <fieldset>
                                        <legend>Please, enter your email, password and password confirmation for sign
                                            up.</legend>
                                        <div class="input-block">
                                            <label for="signup-email">E-mail</label>
                                            <input id="signup-email" name="email_inscription" type="email" required>
                                        </div>
                                        <div class="input-block">
                                            <label for="signup-password">Password</label>
                                            <input name="pass_inscription" id="signup-password" type="password" required>
                                        </div>
                                        <div class="input-block">
                                            <label for="signup-password-confirm">Confirm password</label>
                                            <input name="confirm_pass_inscription" id="signup-password-confirm" type="password" required>
                                        </div>


                                    </fieldset>
                                    <button type="submit" name="submi_inscription_form" class="btn-signup">Inscription</button>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>


                <div class="form-style-10 ">
                    <h1>Demande de devis de traduction<span>demander votre devis facilement en remplissant ce
                            formulaire</span></h1>
                    <form id="traduction_forme">
                        <div class="section"><span>1</span>Nom & prénoms</div>
                        <div class="inner-wrap">
                            <h4>Nom</h4>
                            <input type="text" name="nom" id="nom" />
                            <span class = "error" id="err_nom"></span>
                            <h4>Prénom</h4>
                            <input type="text"  name="prenom" id="prenom"></input>
                            <span class = "error" id="err_prenom"></span>
                        </div>

                        <div class="section"><span>2</span>Email & Phone</div>
                        <div class="inner-wrap">
                        <div>
                        <h4>Email Address <input type="email" name="email" id="email" /></h4>
                        </div>

                          <div>
                          <h4>Numéros de téléphone <input type="text" name="num_tel" id="num_tel" /></h4>
                          </div>
                          <div>
                          <h4>Adresse <input type="text" name="adresse" id="adresse" /></h4>

                          </div>
                           
                            <span class = "error"  id="err_adresse"></span>
                        </div>

                        <div class="section"><span>3</span>détaille sur la traduction</div>
                        <div class="inner-wrap">
                            <div>
                            <h4>Langue d'origine <input type="text" name="lang_origine" id="lang_origine" /></h4>

                            </div>
                            <span class = "error" id="err_lang_origine"></span>
                            <div>
                            <h4>Langue source <input type="text" name="lang_source" id="lang_source" /></h4>

                            </div>
                            <span class = "error" id="err_lang_source"></span>


                            <h4>Select a file: </h4><input type="file" name="file_upload" id="file_upload"><br><br>
                            <!--Dropdown primary-->
                            <div class="dropdown" style="margin-top: 20px; margin-bottom: 20px; align-items: center;">

                                <h4>Type de traduction</h4>
                                <!--Trigger-->
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="type_trad">type
                                    traduction</button>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary">
                                    <a class="dropdown-item" name="choix_type_trad" value="Général" href="#">Général</a>
                                    <a class="dropdown-item" name="choix_type_trad" value="Scientifique" href="#">Scientifique</a>
                                    <a class="dropdown-item" name="choix_type_trad" value="Site web" href="#">Site web</a>
                                </div>
                               
                            </div>
                            <!--/Dropdown primary-->

                            <div>

                                <h4>Commentaire et demande spécifique</h4>
                                <textarea type="text" name="comment" id="comment" cols="40" rows="5"></textarea>
                                <span class = "error" id="err_comment"></span>
    
                            </div>


                            <div class="custom-control custom-checkbox " style="margin-top: 30p;margin-bottom: 30px;">
                                <input type="checkbox" value="assermentee" class="margin_form mw-100 custom-control-input" id="customCheck" name="assermentee">
                                <label class="custom-control-label" for="customCheck">traducteurs assermentée</label>
                               
                              </div>

                            <!--my captcha-->
                            <div class="g-recaptcha" data-sitekey="6LcLissUAAAAACdWJIJtwj5qcwwxyxkNQOdXhWPH"
                                style="margin-top: 30px;"></div>




                        </div>
                        <div class="button-section text-center" id="submit_div">
                            <button type="submit" name="submit_trad_form" class="btn btn-primary btn-md w-75 p-3"><input />Submit</button>

                        </div>
                    </form>
                </div>








            </div>





        </div>








    </section>



    <section id="footer" class="footer">
        <!-- Footer -->
        <footer class="page-footer font-small indigo">

            <!-- Footer Links -->
            <div class="container">

                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Accueil</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">traducteurs</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Blog</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Recrutement</a>
                        </h6>
                    </div>


                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">à propos</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->
                <hr class="rgba-white-light" style="margin: 0 15%;">

                <!-- Grid row-->
                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

                    <!-- Grid column -->
                    <div class="col-md-8 col-12 mt-5">
                        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                            sunt
                            explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->
                <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

                <!-- Grid row-->
                <div class="row pb-3">

                    <!-- Grid column -->
                    <div class="col-md-12">

                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Pinterest-->
                            <a class="pin-ic">
                                <i class="fab fa-pinterest fa-lg white-text"> </i>
                            </a>

                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
            <!-- Footer Links -->

        </footer>
        <!-- Footer -->






        <script>

            const switchers = [...document.querySelectorAll('.switcher')]

            switchers.forEach(item => {
                item.addEventListener('click', function () {
                    switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                    this.parentElement.classList.add('is-active')
                })
            })

        </script>


        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcLissUAAAAACdWJIJtwj5qcwwxyxkNQOdXhWPH', { action: 'homepage' }).then(function (token) {

                });
            });
        </script>


<!--form validation with jquery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="validation.js"></script>
  


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <!-- add wow.js to make animations when scrolling-->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>



        <script>
            //animations script //
            $(function () {

                //make var for this animation to make it easer to modify 
                var effects = 'animated bounce';
                var effectsEnd = 'animationend onAnimationEnd mozAnimationEnd xebkitAnimationEnd';


                $('#submit_div').hover(function () {

                    $(this).addClass(effects).one(effectsEnd, function () {

                        $(this).removeClass(effects);
                    });



                });


            });

        </script>


        
</body>

</html>