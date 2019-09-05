<?php session_start(); ?>

<?php include ("fonction.php"); ?>
<?php require_once("connexion_bdd.php")?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>cible futur 1er groupe</title>      
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
  
  //*****LIMITATION À 6 QUESTIONS
  if($numeroQuestion<=5){
      //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****
    //recherche de la réponse associée à la question dans la BDD
    $reponseFutur = $bdd->query("SELECT intitule_reponse 
      FROM question,reponse
      WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
    $donneesReponseFutur = $reponseFutur->fetch();

    //Comparaison réponse de l'utilisateur et réponse correcte
    $isCorrect=false;
    $reponseCorrecte = $donneesReponseFutur['intitule_reponse'];   
    /*$pattern = '/' . preg_quote($reponseUtilisateur) . '/';*/
    $reponseFutur->closeCursor();


    //CAS 1 **** RÉPONSE CORRECTE
    if($reponseUtilisateur == $reponseCorrecte)
    { 
      $isCorrect === true; 
      // + 1 point
      $_SESSION['score']++;
      $commentaireReussite = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
      // recherche d'un commentaire de réussite alléatoire   
      $donneesReussite = $commentaireReussite->fetch();
      $felicitation = $donneesReussite['commentaire_reussite'];
      ?>
      <!--affichage du commentaire-->
      <section class="row justify-content-center">
      <h2 class="commentaire" style="color:#FF8080"><?php echo $felicitation; ?></h2>
    </section>
      <?php 

      //question suivante
      header( "refresh:2;url=futur_1"); 

    }else
    //CAS 2 **** ESPACE COMMENTAIRE RÉPONSE INCORRECTE
      {
        ?>
        <div class="container">
          <div class="row justify-content-center ">
            <h2 style="color:#FF8080"><b><?php  echo "Oups, mauvaise réponse !"; ?></b></h2>
          </div>
        <div class="row justify-content-center col-12">
        <?php
        header( "refresh:2;url=futur_1.php") ?>
        <?php
      }
      $_SESSION['numeroQuestion']++; 
      ?>
      <?php

    //AU DESSUS DE 6 QUESTIONS
    }else{
      afficherScore();
      if($_SESSION['score'] <= ($_SESSION['numeroQuestion']-1)){
        ?>        
        <div class="container">
          <div class="row justify-content-center ">
            <h2 class="commentaire" style="color:#569ef6"><b><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></b></h2> 
          </div>
        </div>
      <?php
      }
      reinitialiserCompteurs();
      ?>
      <section class="container">
        <div class="row justify-content-center">
          <a href="francais.php"><button type="button" class="btn">Rejouer</button></a>
          <a href="accueil.php"><button type="button" class="btn">Accueil</button></a>
        </div>
      </section>
    <?php
    }      
    ?>
  </body>
  </body>