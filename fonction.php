
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
      <h3><?php echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur 5";?></h3>
    </header>
  </section>
      <?php
      //RÉINITIALISATION DU NOMBRE DE QUESTIONS ET DU SCORE
      $_SESSION['score'] = 0; 
      $_SESSION['numeroDeQuestionPosee'] = 1;
}

function calculerNombreDeQuestionsPosees(){
    if (!isset ($_SESSION['numeroDeQuestionPosee'])){
      $_SESSION['numeroDeQuestionPosee']= 1;
    }else{
      $_SESSION['numeroDeQuestionPosee']++;
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

<!-- ADDITIONS-->
  <?php function afficherExerciceAdditionPoseeDeuxChiffres(){ 
    $a=0;
    $_SESSION['numeroQuestion'] = 0;
    // deux nombres aléatoires à additioner        
    $a=0;
    $b=0;
    $randFirstNumber = $a.rand(10,99);;
    $randSecondNumber = $a.rand(10,99);
                
  ?>
  <br/>
  <br/>
        
    <form action="cible_addition_posee.php" method="get">
        <!-- retenues-->
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
              <span class="col-lg-6"></span>
              <input class="col-lg-1" name="retenue" type="text" placeholder="retenue" id="inputRetenue">
              <span class="col-lg-6"></span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
              <!-- séparation en chiffres par dizaine, unité-->
              <b><span class="col-lg-1" style= "font-size:20px"><?php echo $dizaine=substr($randFirstNumber,1,1); ?></span>
              <span class="col-lg-1" style= "font-size:20px"><?php echo $unite=substr($randFirstNumber,2,3); ?></span></b>
              <span class="col-lg-1"></span>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
      <!--opérateur-->
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-1"></div> 
              <i class="fa fa-plus-circle" style="color:#FF502F; font-size: 30px"></i>               
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>  

              <!-- séparation en chiffres par dizaine, unité-->
              <b><span class="col-lg-1" style= "font-size: 20px"><?php echo $dizaine=substr($randSecondNumber,1,1); ?></span>
              <span class="col-lg-1" style= "font-size: 20px"><?php echo $unite=substr($randSecondNumber,2,3); ?></span>
            <div class="col-lg-3"></div>
          </div>
        </div>      
      </div>
      <!--total opération-->
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
      <!--Résultat opération-->
              <input class="col-lg-1" name="somme"  type="text" placeholder="total">
              <input type="hidden"
            name="sommeCorrecte" value="<?php $sommeCorrecte= addition($randFirstNumber, $randSecondNumber); 
            echo $sommeCorrecte;
            ?>">
            <input type="hidden" name="nombreDoperation" value="1">
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
          <input class="col-lg-3" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue"></input>
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

<?php
function poseAddition($firstNumber, $secondNumber){
?>
<form action="cible_pose.php" method="get">
  <!-- Opération à poser-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row">
      <h3 class="col-lg-12 row justify-content-center"><?php echo "Pose ". $firstNumber . "+" . $secondNumber?></h3>
      </div>
    </div>
  </div>
  <!-- retenues-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row">
        <div class="col-lg-3"></div>
        <small id="emailHelp" class="form-text text-muted col-lg-3" >Indique ici  les retenues si tu en as -></small>
        <input class="col-lg-1" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
        <input class="col-lg-1" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
        <span class="col-lg-1"></span>
      </div>
    </div>
  </div>
  <!-- Premier nombre à additionner-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row">
        <div class="col-lg-3"></div>
          <small id="emailHelp" class="form-text text-muted col-lg-3" >Place ton premier nombre dans les cases -></small>
          <!-- séparation en chiffres par dizaine, unité-->
          <span class="col-lg-1"></span>
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px padding:1px">
      <div class="col-lg-3"></div>
    </div>
  </div>
  </div>
  <!--opérateur-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-6" style="margin-left:45px"></div>
          <i class="fa fa-plus-circle col-lg-1" style="color:#FF502F; font-size: 30px"></i>               
          </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <!-- Second nombre à additionner-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-3"></div>
          <small id="emailHelp" class="form-text text-muted col-lg-3" >Place ton second nombre dans les cases -></small>
          <!-- séparation en chiffres par dizaine, unité-->
          <span class="col-lg-1"></span>
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px padding:1px">
          <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
    <!--=-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-6" style="margin-left:45px"></div>
          <p class="col-lg-1" style="color:#FF502F; font-size: 30px">=</p></div>
      <div class="col-lg-3"></div>
    </div>
    </div>
    <!-- Second nombre à additionner-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-3"></div>
          <small id="emailHelp" class="form-text text-muted col-lg-3" >Ton résultat (centaine, dizaine, unité)-></small>
          <!-- séparation en chiffres par dizaine, unité-->
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px padding:1px">
        <div class="col-lg-3"></div>
      </div>
    </div>
  </div>
  <!--total opération-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row justify-content-center">
        <div class="col-lg-4 md-form">
        <!--Résultat opération-->
        <input type="text" id="form1" class="form-control" class="col-lg-4" name="somme" style="color:#FF502F; border-bottom: 1px solid #FF502F !important">
        <label for="form1" class="col-lg-4" style=" color:#FF502F; font-weight: bold">TOTAL:</label>
        <input type="hidden" name="sommeCorrecte" value="<?php $sommeCorrecte= addition($firstNumber, $secondNumber); 
          echo $sommeCorrecte; ?>">
        <input type="hidden" name="numeroDeQuestionPosee" value="1">
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <input class="col-lg-3 row justify-content-center" type="submit" value="Vérifier" style=" color:white; font-weight: bold; background-color: #007065 !important; border: none; ">
  </div>
</form>
<?php
}
?>

<?php
function poseAdditionTroisChiffres($firstNumber, $secondNumber){
?>
<form action="cible_pose.php" method="get">
  <!-- Opération à poser-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row">
      <h3 class="col-lg-12 row justify-content-center"><?php echo "Pose ". $firstNumber . "+" . $secondNumber?></h3>
      </div>
    </div>
  </div>
  <!-- retenues-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row">
        <div class="col-lg-3"></div>
        <small id="emailHelp" class="form-text text-muted col-lg-3" >Indique ici  les retenues si tu en as -></small>
        <input class="col-lg-1" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
        <input class="col-lg-1" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
        <input class="col-lg-1" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
        <span class="col-lg-1"></span>
      </div>
    </div>
  </div>
  <!-- Premier nombre à additionner-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row">
        <div class="col-lg-3"></div>
          <small id="emailHelp" class="form-text text-muted col-lg-3" >Place ton premier nombre dans les cases -></small>
          <!-- séparation en chiffres par dizaine, unité-->
          <span class="col-lg-1"></span>
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px padding:1px">
      <div class="col-lg-3"></div>
    </div>
  </div>
  </div>
  <!--opérateur-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-6" style="margin-left:45px"></div>
          <i class="fa fa-plus-circle col-lg-1" style="color:#FF502F; font-size: 30px"></i>               
          </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <!-- Second nombre à additionner-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-3"></div>
          <small id="emailHelp" class="form-text text-muted col-lg-3" >Place ton second nombre dans les cases -></small>
          <!-- séparation en chiffres par dizaine, unité-->
          <span class="col-lg-1"></span>
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px padding:1px">
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
    <!--=-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-6" style="margin-left:45px"></div>
          <p class="col-lg-1" style="color:#FF502F; font-size: 30px">=</p></div>
      <div class="col-lg-3"></div>
    </div>
    </div>
    <!-- Second nombre à additionner-->
    <div class="container">
      <div class = "col-lg-12">
        <div class="row">
          <div class="col-lg-3"></div>
          <small id="emailHelp" class="form-text text-muted col-lg-3" >Ton résultat (centaine, dizaine, unité)-></small>
          <!-- séparation en chiffres par dizaine, unité-->
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
          <input class="col-lg-1" style= "font-size:20px; padding:1px">
        <div class="col-lg-3"></div>
      </div>
    </div>
  </div>
  <!--total opération-->
  <div class="container">
    <div class = "col-lg-12">
      <div class="row justify-content-center">
        <div class="col-lg-4 md-form">
        <!--Résultat opération-->
        <input type="text" id="form1" class="form-control" class="col-lg-4" name="somme" style="color:#FF502F; border-bottom: 1px solid #FF502F !important">
        <label for="form1" class="col-lg-4" style=" color:#FF502F; font-weight: bold">TOTAL:</label>
        <input type="hidden" name="sommeCorrecte" value="<?php $sommeCorrecte= addition($firstNumber, $secondNumber); 
          echo $sommeCorrecte; ?>">
        <input type="hidden" name="numeroDeQuestionPosee" value="1">
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <input class="col-lg-3 row justify-content-center" type="submit" value="Vérifier" style=" color:white; font-weight: bold; background-color: #007065 !important; border: none; ">
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



