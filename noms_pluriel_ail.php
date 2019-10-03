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

      <title>pluriel noms en -ail</title>      
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
          <img class="img-fluid" src="assets/img/pluriel_ail.png" alt="pluriel des noms en -ail">
        </div>
      </section>
      <br/>
      <!-- QUIZZ-->
      <form action="cible_grammaire.php" method="get">
        <?php
        $nombreDeQuestions=4;
        $_SESSION['nombreDeQuestions']= $nombreDeQuestions;
        for($i=1; $i<=$nombreDeQuestions; $i++){
          //recherche alléatoire des questions
          $question = $bdd->query("SELECT question.intitule_question, reponse.intitule_reponse FROM question, reponse WHERE question.id_theme= 26
            AND reponse.id_reponse = question.id_question
            ORDER BY RAND()
            LIMIT 4");
          $donnees = $question->fetch();
        
          $_SESSION['intitule_question'.$i] = $donnees['intitule_question'];
          $_SESSION['intitule_reponse'.$i] = $donnees['intitule_reponse'];
          $question->closeCursor();
          ?>
          <div class="container">
            <div class="col-12">       
              <div class="row justify-content-center"> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 justify-content-left">
                  <b><?php echo $_SESSION['intitule_question'.$i] ;?></b></span>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  <i class="fa fa-arrow-circle-right justify-content-left" style="color:#FF502F"></i></span>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 justify-content-left">
                <span class="justify-content-left">Des</span>
              </div>
                <!-- transmission des données-->
                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3 justify-content-left" name="reponseUtilisateur<?php echo $i; ?>" type="text"></input>

              </div>      
            </div>
          </div>
          <br/>
        <?php
        }
        ?>
        
      <br/>
      <!--bouton validation-->
      <section>
        <div class="row justify-content-center">
          <input type="submit" value=" Vérifier mes réponses">
          
        </div>
      </section>
    </form>
    </body>
  </html>

