
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
    /* utilisation de session pour compter nombre de questions posees */
    session_start();
    /* verification session en démarrage ou en cours */
    if(isset($_SESSION['nombreQuestion']))
    {
      $_SESSION['nombreQuestion'] = $_SESSION['nombreQuestion']++;
    }
    /* initialisation des variables*/
    else
    {
    /* initialisation du nombre de questions */
    $_SESSION['nombreQuestion']=0;
    }

//SCORE
    /* verification session en démarrage ou en cours */
    if(isset($_SESSION['score']))
    {
      $_SESSION['score'] = $_SESSION['score']++;
    }
    /* initialisation des variables*/
    else
    {
    /* initialisation du score */
    $_SESSION['score']= 0;
}



     //connexion BDD
require_once("connexion_bdd.php")?>
        <section id="accueil">
          <header class="row justify-content-center">
            <h3>Tu vas avoir une suite de 6 questions.<br/> Vérifie si tes réponses sont justes et tu sauras si tu es calé(e) !</h1>
          </header>
        </section>

        <section id="questionnaire_renaissance">
          <div class="container-fluid">
            
            
            <!--QUESTION ALLEATOIRE-->
            <div class="row">
              <div class="col-lg-12">
                <form action="cible_renaissance.php" method="post">
              <?php
                  //recherche alléatoire d'une question
                $questionsRenaissance = $bdd->query("SELECT intitule, id_question FROM question WHERE 3 ORDER BY RAND() LIMIT 1");
                $donnees = $questionsRenaissance->fetch();
                ?><p><?php echo $donnees['intitule'];?></p><?php
                $idQuestion =  $donnees['id_question'];
                $_SESSION['id_question'] = $donnees['id_question'];
                ?>
              </form>
              </div> 
            </div>
              <?php $questionsRenaissance->closeCursor();?>

          </div>
        </section>

          <!--ESPACE REPONSE-->
        <section id="reponse_renaissance">
          <div class="container">
            <form action="cible_renaissance.php" method="post">
            <div class="row">
              <div class="col-lg-12">
              <input type="text" name="maReponse" placeholder="ma réponse">
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
     
    </body>
  </html>
      