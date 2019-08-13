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
function calculerScore(){
    if (!isset ($_SESSION['score'])){
      $_SESSION['score']=0 ;
    }
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
