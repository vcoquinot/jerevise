<?php session_start(); ?>
<?php include ("fonction.php"); ?>
<?php require_once("connexion_bdd.php"); ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / histoire : la Renaissance</title>      
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
    //****************************
    //INITIALISATION DES COMPTEURS
    //****************************

    //COMPTEUR SCORE      
    calculerScore();

    //COMPTEUR NOMBRE DE QUESTIONS 
    calculerNombreDeQuestionsPosees();
    

    //****************************
    //QUESTIONS
    //****************************
    //LIMITATION À 8 QUESTIONS OU RETOUR ACCUEIL 
    if($_SESSION['numeroQuestion'] >8){
      $_SESSION['numeroQuestion'] =0;
      $_SESSION['score'] =0;
      header("location:accueil.php");
    }else{
    ?>
    <section id="renaissance">
      <div class="row justify-content-center">
        
        <div class="col-lg-2">
          <img class="img-fluid" src="assets/img/caravel.png" alt="caravelle"></div>
        </div>
      </div>
    </section>
          
          
     <!-- affichage des questions-->
      <section id="accueil">
        <header class="row justify-content-center">
          <h3>Question N°<?php echo $_SESSION['numeroQuestion'] ?><br/></h3>
        </header>
      </section>

      <section class="questionnaire">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
              <form action="cible_renaissance.php" method="post">
              <?php
              //recherche alléatoire d'une question
              $questionRenaissance = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 3 && id_theme = 2 ORDER BY RAND() LIMIT 1");
              $donneesRenaissance = $questionRenaissance->fetch();
              ?>
              <h2><?php echo $donneesRenaissance['intitule_question'];?></h2>
              <?php
             
              $_SESSION['id_question'] = $donneesRenaissance['id_question'];
              ?>
              </form>
            </div>
            
          </div>
              <?php $questionRenaissance->closeCursor();?>

        </div>
      </section>

    <!--**************************
        RÉPONSES UTILISATEUR
    ****************************-->
      <section id="reponse_renaissance">
        <div class="container">
          <form action="cible_renaissance.php" method="post">
            
              <div class="col-lg-12">
                <div class="row">
                <div class="col-lg-4"></div>
              <div class="col-lg-6">
              <input type="text" name="reponseRenaissance" placeholder="ma réponse">
              <input type="hidden" name="numeroDeQuestionPosee" value="1">
              </div>
            </div>
            </div>
            
              <div class="col-lg-12">
                <div class="row">
                <div class="col-lg-4"></div>
              <div class="col-lg-6">
              <input type="submit" value=" Valider ma réponse ">
              </div>
            </div>
          </form>
        </div>
      </section>
      <?php
    }
      ?>
     
    </body>
  </html>
      