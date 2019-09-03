<?php session_start(); ?>

<?php require_once("connexion_bdd.php")?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Futur -YER</title>      
      <link href="style1.css"  type="text/css" rel="stylesheet">
      <script type="text/javascript" src="assets/js/javascript.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="futur_premier_groupe">
      <div class="row justify-content-center">
        <h2>Le futur des verbes en -ER et -IR</h2>
      </div>
      <div class="row justify-content-center">
        <img class="img-fluid" src="assets/img/futur_boy.png" alt="conjugaison">
      </div>
    </section>
  <?php
     
//***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
  $reponseUtilisateur = $_GET["reponseFutur"];
  $idQuestion= $_SESSION['id_question'];
  $numeroQuestion = $_SESSION['numeroQuestion'];
echo $_SESSION['numeroQuestion']++;
  //*****LIMITATION À 6 QUESTIONS
  if($numeroQuestion<=5){
      //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****
    //recherche de la réponse associée à la question dans la BDD
    $reponseFutur = $bdd->query("SELECT intitule_reponse 
      FROM question,reponse
      WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
    $donnees = $reponseFutur->fetch();

    //Comparaison réponse de l'utilisateur et réponse correcte
    $isCorrect=false;
    $_SESSION['reponseCorrecte'] = $donnees['intitule_reponse'];   
    /*$pattern = '/' . preg_quote($reponseUtilisateur) . '/';*/
    $reponseFutur->closeCursor();
    

    //CAS 1 **** RÉPONSE CORRECTE
    if($reponseUtilisateur != null && ($_SESSION['reponseCorrecte'] === $reponseUtilisateur))
    { 
      $isCorrect === true; 
      // + 1 point
      $_SESSION['score']++; 
      //question suivante
      header( "refresh:2;url=futur_1"); 

    }//CAS 2 **** ESPACE COMMENTAIRE RÉPONSE INCORRECTE
      else {
                    ?>
            <h2 class="commentaire" style="color:#FF8080"><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
          <?php
        header( "refresh:2;url=futur_1.php") ?>
              </div>
            </div>
          </div>
         </section>
        <?php
      }
      
      ?>
     <?php


     //AU DESSUS DE 6 QUESTIONS
    }else{
      afficherScore();
    }      
  ?>
  </body>
  </body>