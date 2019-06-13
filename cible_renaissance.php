<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / histoire : la Renaissance, questionnaire</title>      
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
     //connexion BDD
      try{
        $bdd = new PDO('mysql:host=localhost;dbname=cm;charset=utf8', 'root' , '');
      }
      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }

      setlocale(LC_TIME, "fr_FR");
           
      //récupération réponse de l'utilsateur
      $inputRenaissance = $_POST["maReponse"];
      //récupération id question posée
      $idQuestion= $_SESSION['id_question'];

      //recherche de la réponse associée à la question
      $reponseRenaissance = $bdd->query("SELECT intitule_reponse 
            FROM question,reponse
            WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
      $donnees = $reponseRenaissance->fetch();
      $reponseCorrecte = strtoupper($donnees['intitule_reponse']);
      
      

      //Mise en majuscules des données pour comparaison 
      $reponseCorrecte = strtoupper($donnees['intitule_reponse']);
      $reponseUtilisateur = strtoupper($inputRenaissance);
      $isCorrect=false;
      $score =0;
         //vérification correspondance réponse utilisateur et réponse correcte
            $pattern = '/' . preg_quote($reponseUtilisateur) . '/';
            //calcul du score
            if(preg_match($pattern,$reponseCorrecte))
            { 
                  $isCorrect = true;
                  $nouveauScore=$score+1;
                  ?>

                  <!--ESPACE ACUEIL DE LA PAGE AVEC COMMENTAIRE-->
                  <section id="accueil_renaissance">
                      
                        <?php
                        //COMMENTAIRE ALÉATOIRE

                        $commentaireReussite = $bdd->query("SELECT commentaire_reussite, lien_image FROM reussite ORDER BY RAND() LIMIT 1");
                        $donneesReussite = $commentaireReussite->fetch();
                        $felicitaion = $donneesReussite['commentaire_reussite'];
                        $image=$donneesReussite['lien_image'];
                        ?>
                        <div class="container_renaissance">
                              <header class="row justify-content-center">
                                    <h3><?php echo $felicitaion; ?></h3>
                              </header>
                              <div class="row justify-content-center">
                                    <img class="img-fluid" src="<?php $image ?>" alt="bravo">
                              </div>
                        </div>
                              
                  </section>

                  
                  <!--ESPACE SCORE-->
                  <section id="score">
                    <div class="container_renaissance">
                        <div class="row">
                              <div class="col-lg-12">Ton score est <?php echo $nouveauScore ?></div>
                        </div>
                  <?php
            }else 
            { 
                  
            ?>
            
            <!--ESPACE VERIFICATION REPONSE DONNÉE-->
                  <section class="verification">
                    <div class="container_renaissance">
                        <div class="row justify-content-center">
                              <div class= "col-lg-3"></div>
                              <div class="col-lg-6">Oups, mauvaise réponse!</div>
                        </div> 
                        <div class="row justify-content-center">
                              <div class= "col-lg-3"></div>     
                              <div class="col-lg-6">La réponse est  : <?php echo $reponseCorrecte ?></div>                           
                        </div>
            <?php
            }
            ?>
            <div class="row">
                  <div class="col-lg-4"></div>
                  <a class="btn btn-primary col-lg-3" href="http://localhost/jerevise/renaissance.php" role="button">Question suivante</a>
           </div>
      </section>
