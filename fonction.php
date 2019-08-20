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


function afficherScore(){
  ?>
        <section class="container-scoreFinal">
          <header class="row justify-content-center">
            <h3><?php echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur ". $_SESSION['numeroQuestion'];?></h3>
            <?php
            //RÉINITIALISATION DU NOMBRE DE QUESTIONS ET DU SCORE
            $_SESSION['score'] = 0; 
            $_SESSION['numeroQuestion'] = 0;
            //TO DO************
            //*****************
            //retour accueil
            header( "refresh:5;url=accueil.php"); 
}

function calculerNombreDeQuestionsPosees(){
    if (!isset ($_SESSION['numeroQuestion'])){
      $_SESSION['numeroQuestion']= 1;
    }else{
      $_SESSION['numeroQuestion']++;
    }
}
?>


<!-- MATHS
________________________________________________________
-->

<!-- FONCTIONS OPÉRATIONS-->
<?php
    function addition($a,$b){
      $additionResult = $a + $b;
      return $additionResult;
    }

    function soustraction($a,$b){
      $additionResult = $a - $b;
      return $additionResult;
    }

    function randCountNumberWithTwoFigures($a){
      //for($i=1; $i<7; $i++)
      $randNumberTwoFigures = $a.rand(10,99);
      echo $randNumberTwoFigures;
      //}
      return $randNumberTwoFigures;
    }

    function randCountNumberwithThreeFigures($a){
      //for($i=1; $i<7; $i++) {
      $randNumberThreeFigures = $a.rand(100,999);
      echo $randNumberThreeFigures;
      //}
      return $randNumberThreeFigures;
    }
  ?>

<!-- FONCTIONS AFFICHAGE DES OPÉRATIONS-->

<!-- ADDITIONS-->
<?php function displayExerciceAdditionPoseeDeuxChiffres(){ 
  $a=0;
  $_SESSION['nombreOperation'] = 0;
?>
  <br/>
  <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
              <div class="col-lg-5"></div>
              <input class="col-lg-3" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"><?php $randFirstNumber = randCountNumberWithTwoFigures($a) ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">+</div>
            <div class="col-lg-3"><?php $randSecondNumber = randCountNumberWithTwoFigures($a)  ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">=</div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            <input class="col-lg-2" type="hidden"
            name="sommeCorrecte" value="<?php $sommeCorrecte= addition($randFirstNumber, $randSecondNumber); 
            echo $sommeCorrecte;
            ?>">

            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <br/>
        <br/>

        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>
<?php 
    }
?>



<?php function displayExerciceAdditionPoseeTroisChiffres(){ 
  $a=0;
?>
  <br/>
  <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
              <div class="col-lg-5"></div>
              <input class="col-lg-3" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"><?php $randFirstNumber = randCountNumberWithThreeFigures($a) ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">+</div>
            <div class="col-lg-3"><?php $randSecondNumber = randCountNumberWithThreeFigures($a)  ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">=</div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            <input class="col-lg-2" type="hidden"
            name="sommeCorrecte" value="<?php $sommeCorrecte= addition($randFirstNumber, $randSecondNumber); 
            echo $sommeCorrecte;
            ?>">

            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <br/>
        <br/>

        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>
<?php 
    }
?>

<!-- FONCTIONS SOUSTRACTIONS-->
  <?php function displayExerciceSoustractionPoseeDeuxChiffres(){ 
  $a=0;
  $_SESSION['nombreOperation'] = 0;
?>
  <br/>
  <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
              <div class="col-lg-5"></div>
              <input class="col-lg-3" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"><?php $randFirstNumber = randCountNumberWithTwoFigures($a) ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">-</div>
            <div class="col-lg-3"><?php $randSecondNumber = randCountNumberWithTwoFigures($a)  ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">=</div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            <input class="col-lg-2" type="hidden"
            name="sommeCorrecte" value="<?php $sommeCorrecte= soustraction($randFirstNumber, $randSecondNumber); 
            echo $sommeCorrecte;
            ?>">

            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <br/>
        <br/>

        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>
<?php 
    }
?>

<?php function displayExerciceSoustractionPoseeTroisChiffres(){ 
  $a=0;
?>
  <br/>
  <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
              <div class="col-lg-5"></div>
              <input class="col-lg-3" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"><?php $randFirstNumber = randCountNumberWithThreeFigures($a) ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">-</div>
            <div class="col-lg-3"><?php $randSecondNumber = randCountNumberWithThreeFigures($a)  ;?></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-1">=</div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            <input class="col-lg-2" type="hidden"
            name="sommeCorrecte" value="<?php $sommeCorrecte= soustraction($randFirstNumber, $randSecondNumber); 
            echo $sommeCorrecte;
            ?>">

            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <br/>
        <br/>

        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>
<?php 
    }
?>

<!-- FRANçAIS
________________________________________________________
-->

<!-- FONCTIONS AFFICHAGE-->
<?php 
function afficherFormulaireConjugaison(){
  ?>
  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-6">
          <input type="text" name="reponseFutur" placeholder="ma réponse">
          <input type="hidden" name="numeroDeQuestionPosee" value="1">
        </div>
      </div>
    </div>
            
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-4"></div>
          <div class="col-lg-6">
            <input type="submit" value=" Phrase suivante ">
        </div>
      </div>

<?php
}
      
function verifierReponseUtilisateur(){
  ?>
  <section class="verification">
    <div class="container_conjugaison">
      <div class="row justify-content-center">
        <div class= "col-lg-3"></div>
          <div class="col-lg-6">Oups, mauvaise réponse!</div>
        </div> 
        <div class="row justify-content-center">
          <div class= "col-lg-3"></div>     
          <div class="col-lg-6">La réponse est  : <?php echo $_SESSION['reponseCorrecte']; ?>
<?php
}
?>

