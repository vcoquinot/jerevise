<?php session_start(); ?>
<?php include "fonction.php" ?>
<?php require_once("connexion_bdd.php")?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Futur 1er groupe</title>      
      <link href="style1.css"  type="text/css" rel="stylesheet">
      <script type="text/javascript" src="assets/js/javascript.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

<!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
     
  //***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
  $reponseUtilisateur = $_POST["reponseFutur1"];
  $idQuestion= $_SESSION['id_question'];
  $numeroQuestion = $_SESSION['numeroQuestion'];

  //*****LIMITATION À 10 QUESTIONS
  if($numeroQuestion<=10){
    //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****
    //recherche de la réponse associée à la question dans la BDD
    $reponseFutur = $bdd->query("SELECT intitule_reponse 
      FROM question,reponse
      WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
    $donnees = $reponseFutur->fetch();

    //Comparaison réponse de l'utilisateur et réponse correcte
    $isCorrect=false;
    $reponseCorrecte = $donnees['intitule_reponse'];   
    $pattern = '/' . preg_quote($reponseUtilisateur) . '/';
    $reponseFutur->closeCursor();
    

    //CAS 1 **** RÉPONSE CORRECTE
    if($reponseUtilisateur != null && preg_match($pattern,$reponseCorrecte))
    { 
      $isCorrect === true; 
      // + 1 point
      $_SESSION['score']++; 
      header( "Location: futur.php"); 

    }//CAS 2 **** ESPACE COMMENTAIRE RÉPONSE INCORRECTE
      else {
        ?>
        <section class="verification">
          <div class="container_futur1">
            <div class="row justify-content-center">
              <div class= "col-lg-3"></div>
              <div class="col-lg-6">Oups, mauvaise réponse!</div>
            </div> 
            <div class="row justify-content-center">
              <div class= "col-lg-3"></div>     
              <div class="col-lg-6">La réponse est  : <?php echo $reponseCorrecte ?>
              	<?php header( "refresh:2;url=futur.php") ?>
              </div>
            </div>
          </div>
        </section>
        <?php
      }
      
      ?>
     <?php


     //AU DESSUS DE 10 QUESTIONS
    }else{
        ?>
        <!-- affichage du score total-->
        <section class="container-scoreFinal">
          <header class="row justify-content-center">
            <h3><?php echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur ". $numeroQuestion;?></h3>
            <?php
            //RÉINITIALISATION DU NOMBRE DE QUESTIONS ET DU SCORE
            $_SESSION['score'] = 0; 
            $_SESSION['numeroQuestion'] = 0;
            //TO DO************
            //*****************
            //retour accueil
            header( "refresh:10;url=accueil.php"); 
       }      
  ?>
  </body>