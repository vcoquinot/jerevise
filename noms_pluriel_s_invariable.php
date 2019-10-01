<?php session_start(); ?>
<?php require_once("connexion_bdd.php"); ?>
<?php include("fonction.php");?>
<?php include("fonctions_francais.php");?>
<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM">

      <title>pluriel noms en -s ou invariable</title>      
      <link href="style1.css"  type="text/css" rel="stylesheet">
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
      <section>
        <div class="row justify-content-center">
          <img class="img-fluid" src="assets/img/pluriel_nom_s_invariable.png" alt="pluriel des noms">
        </div>
      </section>
      <br/>


      <?php
          //recherche alléatoire d'une question
      for($i =0; $i<4; $i++){
            $question = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 2 && id_theme = 27 ORDER BY RAND() LIMIT 1");
            $donnees = $question->fetch();

            $_SESSION['id_question'] = $donnees['id_question'];            
            $_SESSION['intitule_question'] = $donnees['intitule_question'];

            $reponse="";
            $intitule = $_SESSION['intitule_question'];
      //Affichage exercice
      afficherExerciceGrammaireFrancais($intitule, $reponse);
          }
            $question->closeCursor();?>

      <?php
       

      $reponse="";
      //Affichage exercice
      afficherExerciceGrammaireFrancais($intitule, $reponse);
      ?>
    </body>
  </html>

