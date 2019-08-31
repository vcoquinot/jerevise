<?php session_start(); ?>

<?php require_once("connexion_bdd.php")?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Futur -YER</title>      
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
    <section id="futur_premier_groupe">
      <div class="row justify-content-center">
        <h2>Le futur des verbes en -ER et -IR</h2>
      </div>
      <div class="row justify-content-center">
        <img class="img-fluid" src="assets/img/futur_boy.png" alt="conjugaison">
      </div>
    </section>
  <?php
     
  //***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
  $reponseUtilisateur = $_GET["reponseFutur"];
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
    $reponseFutur->closeCursor();
    
      //CAS 1 **** RÉPONSE CORRECTE
      if($reponseUtilisateur != null && ($_SESSION['reponseCorrecte'] == $reponseUtilisateur))
      { 
        $isCorrect === true; 
        // + 1 point
        $_SESSION['score']++; 

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
        //question suivante
        header( "Location: futur_1.php");
        
        } else{//CAS 2 : réponse incorrecte
      ?>
      <!-- indication réponse incorrecte-->
      <div class="container-fluid">
        <div class="row justify-content-center">
          <p style="font-size: 40px;"><b>Oups, mauvaise réponse!</b></p>
        </div>
        <div class="row justify-content-center">
          <p><i class="fas fa-frown-open fa-3x red-text pr-3 row justify-content-center" aria-hidden="true"></i></p>
        </div>
      </div>
      <!-- affichage réponse correcte-->    
        <div class="container-fluid">   
          <div class="row justify-content-center" style="font-size: 30px;"><b>C'était : <?php echo $_SESSION['reponseCorrecte']; ?></b>
          </div>
        </div>
      <?php
      }
      //question suivante 
      header("refresh:2; url=futur_1.php");     
     //AU DESSUS DU NOMBRE DE QUESTIONS SOUHAITÉE
    }else{
      afficherScore();
      //REINITIALISATION NOMBRE QUESTIONS ET SCORE
      $_SESSION['score'] = 0;
      $_GET['numeroDeQuestionPosee'] = 0;

      //redirection rejouer ou accueil
      redirectionFrancais();
    }      
  ?>
  </body>