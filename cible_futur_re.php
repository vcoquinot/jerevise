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

      <title>Futur verbes -RE</title>      
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
    <section id="futur_premier_groupe">
      <div class="row justify-content-center">
        <h2>Le futur des verbes en -RE come prendre, peindre,...</h2>
      </div>
      <div class="row justify-content-center">
        <img class="img-fluid" src="assets/img/futur_dre.png" alt="garçon">
      </div>
    </section>

  <?php
     
  //***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
  $reponseUtilisateur = $_GET['reponseFutur'];
  $idQuestion= $_SESSION['id_question'];
  $numeroQuestion = $_GET['numeroDeQuestionPosee'];

  //*****LIMITATION NOMBRE QUESTIONS
  if($numeroQuestion<=5){
      //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****
    //recherche de la réponse associée à la question dans la BDD
    $reponseFutur = $bdd->query("SELECT intitule_reponse 
    FROM question,reponse
    WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
    $donnees = $reponseFutur->fetch();

    //Comparaison réponse de l'utilisateur et réponse correcte
    $isCorrect=false;
    $_SESSION['reponseCorrecte'] = $donnees['intitule_reponse'];   
    /*$pattern = '/' . preg_quote($reponseUtilisateur) . '/';*/
    $reponseFutur->closeCursor();   

    $isCorrect === true; 
      //CAS 1 **** RÉPONSE CORRECTE
      if($reponseUtilisateur != null && ($_SESSION['reponseCorrecte'] === $reponseUtilisateur))
      { 
        // + 1 point
        $_SESSION['score']++; 
        //question suivante
        header( "Location: futur_verbe_re.php"); 
        //ESPACE COMMENTAIRE BONNE RÉPONSE
        ?>
        <section>
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
          <p><i class="fas fa-laugh-squint fa-3x green-text pr-3 row justify-content-center" aria-hidden="true"></i></p>
        </section>
        <?php
        }
      else{//cas 2 : réponse incorrecte
        afficherCommentaireMauvaiseReponse();
        //affichage de la bonne réponse
        afficherReponseCorrecte();
              //question suivante
        header( "refresh:2;url=futur_verbe_re.php"); 
      }
      
     //AU DESSUS DU NOMBRE DE QUESTIONS SOUHAITEES
     }else{
      afficherScore();
      //réinitialisation nombresQuestions et score
      $_SESSION['score']=0;
      $_GET['numeroQuestionPosee']=0;
    }      
  ?>
  </body>