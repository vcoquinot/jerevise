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

      <title>cible grammaire</title>      
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
<!--    <section id="futur_verbe_yer">
      <div class="row justify-content-center">
        <h2> Le futur des verbes en -YER (essuyer)</h2>
      </div>
      <div class="row justify-content-center">
        <img class="img-fluid" src="assets/img/futur_girl_yer.png" alt="conjugaison verbes _YER">
      </div>
    </section>-->

  <?php
  //***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
  $score=0;
  
  echo "reponse 1".$_GET['reponseUtilisateur1'];
  echo "reponse 2".$_GET['reponseUtilisateur2'];
  echo "reponse 3".$_GET['reponseUtilisateur3'];
  echo "reponse 4".$_GET['reponseUtilisateur4'];
  
  $reponseCorrecte=$_SESSION['intitule_reponse'];

  echo "N° question ".$numeroQuestion. "<br/>";
  //$nombreDeQuestions = count($question[])-1;
  $url = "grammaire.php";
  /*for($numeroQuestion=0; $numeroQuestion<=$nombreDeQuestions; $numeroQuestion++){*/
    if($reponseUtilisateur==$reponseCorrecte){
      $score++; 
      echo "ton score ".$score;
    }else{
      echo "ton score ". $score;
    }

    reinitialiserCompteurs(); ?>
      
      <section class="container">
        <div class="row justify-content-center">
          <a href="<?php echo $url ?>"><button type="button" class="btn">Rejouer</button></a>
          <a href="accueil.php"><button type="button" class="btn">Accueil</button></a>
        </div>
      </section>


  </body>
