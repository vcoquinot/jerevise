
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

<!-- FONCTIONS ACCUEIL-->
<?php function afficherFormulaireConnexion(){
?>    
    <section id="formulaire">
      <form>
        <div class="form-group row justify-content-md-center"> 
          <div class="col-md-3 col-lg-3">           
            <input type="text" class="form-control" id="prenom" placeholder="Ton prénom">
          </div>
        </div>
        <div class="form-group row justify-content-md-center">
          <div class="col-md-3 col-lg-3">           
            <input type="text" class="form-control" id="pseudo" placeholder="Ton pseudo">
          </div>
        </div>
        <div class="form-group row justify-content-md-center">
          <div class="col-md-3 col-lg-3"> 
            <input type="password" class="form-control" id="mdp" placeholder="Ton mot de passe">
          </div>
        </div>
        <div class="form-group row justify-content-md-center">

        <a href="accueil.php" class="btn col-md-3 col-lg-3" role="button" aria-pressed="true" id="valider">Valider</a>
        </div>
        <div class="form-group row justify-content-md-center">
            <a href = "creation_compte.php">Créer mon compte</a>
        </div>
        <div class="form-group row justify-content-md-center">
            <a href = "">mot de passe oublié"</a>
        </div>
    </form>
<?php
    }
?>
    </section> 
   



<?php
function displayFormCreationCompte(){
?>
    <section id="formulaire-creation-compte" class="container-fluid">
        <form action="creation_compte.php" method="post">
            <div class="form-group row">
                <div class="col-lg-3"></div>
                <div class="col-lg-4">
                    <input name="pseudo" class="form-control" type="text" placeholder="Choisis ton pseudo*"
                  value="<?php echo (isset($_POST['pseudo'])) ? ($_POST['pseudo']) : "" ;?>" required>
                </div>  <!-- si pseudo existe tu me le mets sinon tu mets rien-->
                <div class="col-lg-3">
                    <input name="prenom" class="form-control" type="text" placeholder="Indique ton prénom*"
                value="<?php echo (isset($_POST['prenom'])) ? ($_POST['prenom']) : "" ;?>"required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4">
                    <input name="mdp" class="form-control" type="password" placeholder="Choisis un mot de passe*"
                    value="<?php echo (isset($_POST['mdp'])) ? ($_POST['mdp']) : "" ;?>"required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4">
                    <input name="mdp_confirm" class="form-control" type="password" placeholder="Confirme ton mot de passe*"
                value="<?php echo (isset($_POST['mdp_confirm'])) ? ($_POST['mdp_confirm']) : "" ;?>"required>
                </div>
            </div>

            <!-- bouton creation compte -->
            <section id="bouton-creer-compte" class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-6"></div>
                    <button class="col-md-3 col-lg-3" id="creer_compte" type="submit" value="créer mon compte"><a href="accueil.php"> Je crée mon compte</a></button>
                <!--TO DO *TO DO*TO DO* TO DO : lien sur bouton *TO DO  *TO DO * TO DO -->
                <!--TO DO *TO DO*TO DO* TO DO : direction compte créé *TO DO  *TO DO * TO DO -->
                </div>
            </section>
        </form>
    </section>
<?php
    }
?>

    <!-- FIN formulaire -->


<!-- *************************************************************--> 
<!-- *************************************************************--> 

<?php
function initialisationScore(){
    if (!isset ($_SESSION['score'])){
      $_SESSION['score']=0 ;
    }
  }


function afficherScore(){
  ?>
  <!-- TO DO : numero question en dur !!-->
  <section class="container-scoreFinal">
    <header class="row justify-content-center">
      <h3><?php echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur ". $_SESSION['numeroQuestion']-- ;?></h3>
    </header>
  </section>
  <?php
}

function reinitialiserCompteurs(){
//RÉINITIALISATION DU NOMBRE DE QUESTIONS ET DU SCORE
$_SESSION['score'] = 0; 
$_SESSION['numeroQuestion'] = 1;
}
?>

<?php
function calculerNombreDeQuestionsPosees(){
    if (!isset ($_SESSION['numeroQuestion'])){
      $_SESSION['numeroQuestion']= 1;
    }else{
      $_SESSION['numeroQuestion']++;
    }
}
?>


    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
    <!-- COMMENTAIRE SCORE TOTAL -->
    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>

    <?php  
    function afficherCommentaire(){
      $nombreCalculs= 4;
      $score= $_GET['score'];
      ?>
      <section class="container">
      <div class="row justify-content-center">
        <?php
        if($score==$nombreCalculs){
          $commentaireReussite = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
          
          $donneesReussite = $commentaireReussite->fetch();
          $felicitation = $donneesReussite['commentaire_reussite'];
          ?>
          <h2 class="commentaire" style="color:#FF8080"><?php echo $felicitation; ?></h2>
        <?php        
        }else{
          ?>
          <h2 class="commentaire" style="color:#FF8080"><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
        <?php
        }
        ?>
      </div>
    </section>
    <?php
    } 
    ?> 

    <!-- REDIRECTION-->
    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
    <?php function redirectionFrancais(){
    ?>
    <section class="container col-lg-12" id="redirection" style = "text-align:center;">
      <div class="row justify-content-center">
        <a href="francais.php"><button type="button" class="btn" style="border-color:#none; background-color: #2D3561; color: white; font-weight: bold; font-size:20px;">Rejouer</button></a>
      <div class="col-lg-1"></div>
        <a href="accueil.php"><button type="button" class="btn" style="border-color:#none; background-color: #2D3561; color: white; font-weight: bold; font-size:20px;">Accueil</button></a>
      </div>
    </section>
    <?php
    }
    ?>

<!-- FONCTIONS AFFICHAGE DES OPÉRATIONS-->




