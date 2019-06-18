<?php include "fonction.php"; ?>

<!DOCTYPE html>
<html lang="fr">
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="Site de révisions pour les élèves de CM1">

          <title>Je révise ! / Création de compte</title>
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
        <?php
        include ("fonction.php");
        //affichage formualire si non connecté
        /* ****************************************/
            if (!(isset($_POST['pseudo']))) 
            {
                 displayFormCreationCompte();
            }
            else 
            {
                $prenom= addslashes(htmlspecialchars(strip_tags($_POST['prenom'])));
                $pseudo = addslashes(htmlspecialchars(strip_tags($_POST['pseudo'])));
                $mdp = addslashes(htmlspecialchars(strip_tags($_POST['mdp'])));
                $mdp_confirm = addslashes(htmlspecialchars(strip_tags($_POST['mdp_confirm']))); 
                
                //vérification si pseudo déjà utilisé
                $donneebdd_pseudo = $bdd->query("SELECT pseudo FROM utilisateur WHERE pseudo = '$pseudo'");     
                $donnee_pseudo = $donneebdd_pseudo->fetch();
                $donneebdd_pseudo->closeCursor();
                //Si pseudo ok, vérification mdp et mdp confirm identiques 
                if ($pseudo !== $donnee_pseudo['pseudo'] &&  $mdp == $mdp_confirm)
                {
                    //INSERTION DONNEES DANS BDD
     
                     //insertion reste des donnees du formulaire
                    $mdp = md5($mdp);
                    
                    $bdd->exec("INSERT INTO `utilisateur`(`prenom`,`pseudo`,`mdp`) VALUES ('$prenom','$pseudo','$mdp')");

                     //REDIRECTION TABLEAU DE BORD                 
                     header("location:accueil.php");
                    
                } 
                //EN CAS DE PROBLEME
                else
                {
                    //cas où pseudo déjà utilisé
                    if($pseudo == $donnee_pseudo['pseudo'])
                    {                     
                        echo "<p class='message'>Ce pseudo est déjà utilisé</p>";
                        displayFormCreationCompte();
                    }
                    //cas pwd et pwd confirm non identiques
                    else 
                    {

                        if ($mdp != $mdp_confirm)
                        {
                            echo "<p class='message'>Les mots de passe ne sont pas identiques</p>";
                            displayFormCreationCompte();
                        }
                        
                    }
                }
            }
        ?>
    </body>
</html>
