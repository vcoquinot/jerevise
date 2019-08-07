<?php session_start();?>
<?php require_once("connexion_bdd.php")?>
    


<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / histoire : la Renaissance</title>      
      <link href="main.css"  type="text/css" rel="stylesheet">
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
    if (!isset ($_SESSION['score'])){
      $_SESSION['score']=0 ;
    }

    //COMPTEUR NOMBRE DE QUESTIONS 
    if (!isset ($_SESSION['numeroQuestion'])){
      $_SESSION['numeroQuestion']= 1;
    }else{
      $_SESSION['numeroQuestion']++;
    }
    

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

          <img class="defil" src="assets/img/caravel.png" alt="Third slide">
          
     <!-- affichage des questions-->
      <section id="accueil">
        <header class="row justify-content-center">
          <h3>Question N°<?php echo $_SESSION['numeroQuestion'] ?><br/></h3>
        </header>
      </section>

      <section class="questionnaire">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <form action="cible_renaissance.php" method="post">
              <?php
              //recherche alléatoire d'une question
              $questionRenaissance = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 3 && id_theme = 2 ORDER BY RAND() LIMIT 1");
              $donneesRenaissance = $questionRenaissance->fetch();
              ?>
              <p><?php echo $donneesRenaissance['intitule_question'];?></p>
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
            <div class="row">
              <div class="col-lg-12">
              <input type="text" name="reponseRenaissance" placeholder="ma réponse">
              <input type="hidden" name="numeroDeQuestionPosee" value="1">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
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
      