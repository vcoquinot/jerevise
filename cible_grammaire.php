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
    <br/>
    <section class="container" id="score">
      <div class="row justify-content-center">
        <div class="col-lg-2">
          <img class="img-fluid" src="assets/img/target.png" alt ="cible">
        </div>
      </div>
    </section>
      
    <?php
    //***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
    $nombreDeQuestions=$_SESSION['nombreDeQuestions'];
    $score=0;
    $url = "grammaire.php";

    //TRAITEMENT DES RÉPONSES
    //comparaison de chaque réponse utilisateur avec la réponse correcte
    for($i=1; $i<$nombreDeQuestions+1; $i++){
      if($_GET['reponseUtilisateur'.$i]==$_SESSION['intitule_reponse'.$i]){
         $score++;       
      }
    }
  ?>    
        <header class="row justify-content-center">
          <h3><?php echo "Tu as obtenu ". $score. " points sur ". $nombreDeQuestions;?></h3>
        </header>
      </section>
      <?php
  if($score<$nombreDeQuestions-1){
    ?>
    <h2 class="commentaire row justify-content-center" style="color:#FF8080"><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
    <?php
    }

    reinitialiserCompteurs(); ?>
      
      <section class="container">
        <div class="row justify-content-center">
          <a href="<?php echo $url ?>"><button type="button" class="btn">Rejouer</button></a>
          <a href="accueil.php"><button type="button" class="btn">Accueil</button></a>
        </div>
      </section>


  </body>
