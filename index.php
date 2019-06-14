<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / CM1</title>
      <link href="style1.css"  type="text/css" rel="stylesheet">
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
    <?php require_once("connexion_bdd.php")?>
    <?php include ("fonction.php");?>
    <div class="container-fluid">
      <div class="brief">
        <h1>CM AU TOP</h1>
      </div>
    </div> 


    <!-- ***************************************   -->
    <!-- TESTS CONNEXION UTILISATEUR          -->
    <!-- ***************************************   -->
    <?php

      if (!(isset($_POST['pseudo']))){
        afficherFormulaireConnexion();
      }else
        {
          $pseudo = $_POST['pseudo'];
          $mdp= md5($_POST['mdp']); 
          
          //Vérification que le pseudo existe dans BDD
          $donneebdd_pseudo = $bdd->query("SELECT pseudo FROM utilisateur WHERE pseudo = '$pseudo'");
          $donnee_pseudo = $donneebdd_pseudo->fetch();
          $donneebdd_pseudo->closeCursor();
              
            if ($pseudo == $donnee_pseudo['pseudo']){
              //vérification pwd correct+ si pwd associé au pseudo
              $donneebdd_mdp = $bdd->query("SELECT mdp FROM utilisateur WHERE mdp = '$mdp' AND pseudo = '$pseudo'");
              $donnee_mdp = $donneebdd_mdp->fetch(); 
              $donneebdd_mdp->closeCursor();
                //redirection page accueil         
                if($mdp == $donnee_mdp['mdp']){
                  $_SESSION['pseudo']=$pseudo;
                  header('Location: /jerevise/accueil.php');    
                }else{
                    echo "<p class='message'>Ce n'est pas le bon mot de passe !</p>";
                    afficherFormulaireConnexion();
                }
            }else
            {
          echo "<p class='message'>Ce pseudo n'existe pas</p>";
          afficherFormulaireConnexion();
        }
      }
    ?>

    

 </body>