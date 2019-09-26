<?php session_start(); ?>
<?php include ("fonction.php"); ?>
<?php include "fonctions_francais.php" ?>
<?php require_once("connexion_bdd.php"); ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Futur </title>      
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

  //COMPTEUR SCORE      
  initialisationScore();
  ?>

    <section>
      <div class="row justify-content-center">
        <h2>Le futur</h2>
      </div>
      <div class="row justify-content-center">
        <img class="img-fluid" src="assets/img/futur.png" alt="futur">
      </div>
    </section>
    
    <!-- affichage des questions + formulaire réponse-->
    <section class="questionnaire">      
      <div class="row justify-content-center">
        <h2 style =" color:#007065; margin-bottom:20px;">C'est parti !</h2>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <form action="cible_conjugaison.php" method="get">
            <?php
            //recherche alléatoire d'une question
            $question = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 2 && id_theme BETWEEN '5' AND '9' ORDER BY RAND() LIMIT 1");
            $donnees = $question->fetch();
            ?>
            <h2><?php echo $donnees['intitule_question'];?></h2>
            <?php
            $_SESSION['id_question'] = $donnees['id_question'];
            $_SESSION['intitule_question'] = $donnees['intitule_question'];
            $question->closeCursor();?>
    
          <!--Formulaire réponse-->
         <?php afficherFormulaireConjugaison(); ?>
          <input type="hidden" name="url" value="futur.php">
        </form>
      </div>
    </section>

  </body>
</html>