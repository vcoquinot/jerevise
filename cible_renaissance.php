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

      <title>Je révise ! / histoire : la Renaissance, questionnaire</title>      
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
  $inputRenaissance = $_POST["maReponse"];
  $idQuestion= $_SESSION['id_question'];
  $numeroQuestion = $_SESSION['numeroQuestion'];
    
  //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****
  //recherche de la réponse associée à la question dans la BDD
  $reponseRenaissance = $bdd->query("SELECT intitule_reponse 
      FROM question,reponse
      WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
  $donnees = $reponseRenaissance->fetch();

  //Comparaison réponse de l'utilisateur et réponse correcte
  $reponseCorrecte = strtoupper($donnees['intitule_reponse']);
  $reponseUtilisateur = strtoupper($inputRenaissance);    
  $pattern = '/' . preg_quote($reponseUtilisateur) . '/';
  $reponseRenaissance->closeCursor();

  //CAS 1 **** RÉPONSE CORRECTE
  $isCorrect=false;
  if($reponseUtilisateur != null && preg_match($pattern,$reponseCorrecte))
  { 
    $isCorrect === true; 
    $_SESSION['score']++; ?>
    <!--ESPACE COMMENTAIRE BONNE RÉPONSE-->
    <section id="container_renaissance">
    <?php
    //RECHERCHE COMMENTAIRE ALÉATOIRE BONNE RÉPONSE DANS LA BDD
    $commentaireReussite = $bdd->query("SELECT commentaire_reussite, id_image FROM reussite ORDER BY RAND() LIMIT 1");
    $donneesReussite = $commentaireReussite->fetch();
    $felicitaion = $donneesReussite['commentaire_reussite'];
    //$image=$donneesReussite['id_image'];
    $commentaireReussite->closeCursor();
    ?>
      <header class="row justify-content-center">
        <h3><?php echo $felicitaion; ?></h3>
      </header>
      <div class="row justify-content-center">
          <img class="img-fluid" src="assets/img/clap.png" alt="applaudissements">
      </div>
      <header class="row justify-content-center">
        <h3><?php echo "Tu as ". $_SESSION['score']. " points";?></h3>
      </header>
    </section>
    <?php 
  }

  //CAS 2 **** ESPACE COMMENTAIRE RÉPONSE INCORRECTE
  else {
    ?>
    <section class="verification">
      <div class="container_renaissance">
        <div class="row justify-content-center">
          <div class= "col-lg-3"></div>
          <div class="col-lg-6">Oups, mauvaise réponse!</div>
        </div> 
        <div class="row justify-content-center">
          <div class= "col-lg-3"></div>     
          <div class="col-lg-6">La réponse est  : <?php echo $reponseCorrecte ?></div>
        </div>
      </div>
    </section>
    <?php
  }

  //LIMITE DE 8 QUESTIONS 
      
  if($numeroQuestion >= 8){
    ?>
    <section class="container-scoreFinal">
      <header class="row justify-content-center">
        <h3>
        <?php 
        //NOMBRE ÉTOILES
        for($i=1; $i == $_SESSION['score']; $i++ ){
        ?>
          <div class="row justify-content-center">
            <div class="col-lg-1"></div>
              <img class="img-fluid" src="assets/img/star.png" alt="étoile">
            </div>
          </div>
        <?php
        }
        echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur ". $numeroQuestion;
             
        //RÉINITIALISATION DU NOMBRE DE QUESTIONS ET DU SCORE
        $_SESSION['score'] = 0; 
        $_SESSION['numeroQuestion'] = 0;?></h3>
      </header>
   </section>
    ?><a href="http://localhost/jerevise/accueil.php">Accueil</a>
    <?php
  } else
  { 
  ?>

        
         <!--QUESTION SUIVANTE-->
        <section>
          <div class="row">
          <div class="col-lg-5"></div>
            <a class="btn btn-primary col-lg-2" href="http://localhost/jerevise/renaissance.php" role="button">Question suivante</a>
          </div>
        </section>

  <?php 
      }

      
      ?>
  </body>