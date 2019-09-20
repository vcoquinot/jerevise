<?php require_once("connexion_bdd.php")?>
<?php include("fonction.php");?>
<?php include("fonctions_maths.php");?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de révisions pour les élèves de CM1">

    <title>cible calcul mental</title>      
    <link href="main1.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
      $nombreCalculs= 4;
      $score= $_GET['score'];
      $resultatUn= $_GET['resultatUn'];
      $resultatCorrectUn= $_GET['resultatCorrectUn'];
      $resultatDeux= $_GET['resultatDeux'];
      $resultatCorrectDeux= $_GET['resultatCorrectDeux'];
      $resultatTrois= $_GET['resultatTrois'];
      $resultatCorrectTrois= $_GET['resultatCorrectTrois'];
      $resultatQuatre= $_GET['resultatQuatre'];
      $resultatCorrectQuatre= $_GET['resultatCorrectQuatre'];
      //* TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR */
      $isCorrect=false;
      if($resultatUn == $resultatCorrectUn){ 
        $isCorrect === true; 
        $score++; 
      }
      if($resultatDeux == $resultatCorrectDeux){ 
        $isCorrect === true; 
        $score++; 
      }
      if($resultatTrois == $resultatCorrectTrois){ 
        $isCorrect === true; 
        $score++; 
      }
      if($resultatQuatre == $resultatCorrectQuatre){ 
        $isCorrect === true; 
        $score++; 
      }
    ?>
      <section class="container" id="score">
        <div class="row justify-content-center">
          <div class="col-lg-2">
          <img class="img-fluid" src="assets/img/target.png" alt ="cible">
          </div>
        </div>
        <header class="row justify-content-center">
          <h3><?php echo "Tu as obtenu ". $score. " points sur ". $nombreCalculs;?></h3>
        </header>
      </section>

    <section class="container">
        <div class="row justify-content-center">
          <?php
          if($score==$nombreCalculs){
            $commentaireReussite = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
            
            $donneesReussite = $commentaireReussite->fetch();
            $felicitation = $donneesReussite['commentaire_reussite'];
            ?>
            <h2 class="commentaire" style="color:#FF8080"><?php echo $felicitation; ?></h2>
          <?php        
          }else{
            ?>
            <h2 class="commentaire" style="color:#FF8080"><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
          <?php
          }

          //RÉINITIALISATION DES DONNÉES
          $score = 0; 
          $resultatUn= 0;
          $resultatCorrectUn= 0;
          $resultatDeux= 0;
          $resultatCorrectDeux= 0;
          $resultattrois= 0;
          $resultatCorrectTrois= 0;
          $resultatQuatre= 0;
          $resultatCorrectQuatre= 0;
          
          //REDIRECTION CALCUL MENTAL OU ACCUEIL
          redirection();
          ?>  
        </div>
      </section>
</body>

