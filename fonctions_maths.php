<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
    <!-- REDIRECTION-->
    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
    <?php function redirection(){
    ?>
    <section class="container col-lg-12" id="redirection" style = "text-align:center;">
      <div class="row justify-content-center">
        <a href="calcul_mental.php"><button type="button" class="btn" style="border-color:#none; background-color: #2D3561; color: white; font-weight: bold; font-size:20px;">Rejouer</button></a>
      <div class="col-lg-1"></div>
        <a href="accueil.php"><button type="button" class="btn" style="border-color:#none; background-color: #2D3561; color: white; font-weight: bold; font-size:20px;">Accueil</button></a>
      </div>
    </section>
    <?php
    }
    ?>

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

    function multiplication($a,$b){
      $additionResult = $a * $b;
      return $additionResult;
    }

    function division($a,$b){
      $additionResult = $a / $b;
      return $additionResult;
    }

    function calculMentalUnité($a){
      $uniteAleatoire = $a.rand(2,9);
      echo $uniteAleatoire;
      return $uniteAleatoire;
    }

function randCountNumberWithOneFigure($number){
      $randNumberOneFigure = $number.mt_rand(1,9);
      $randNumber=substr($randNumberOneFigure,1);
      echo $randNumber;
      return $randNumber;
    }

    function randCountNumberWithTwoFigures($number){
      $randNumberTwoFigures = $number.mt_rand(10,99);
      $randNumber=substr($randNumberTwoFigures,1);
      echo $randNumber;
      return $randNumber;
    }

    function randCountNumberwithThreeFigures($number){
      //for($i=1; $i<7; $i++) {
      $randNumberThreeFigures = $number.mt_rand(100,999);
      $randNumber=substr($randCountNumberwithThreeFigures,1);
      echo $randNumber;
      //}
      return $randNumber;
    }
  ?>

  <?php
  function randCountNumberOverHundred($number){
      //for($i=1; $i<7; $i++) {
      $randCountNumberOverHundred = $number.mt_rand(101,999);
      $randNumber=substr($randCountNumberOverHundred,1);
      echo $randNumber;
      //}
      return $randNumber;
    }
  ?>

    <?php
  function randCountDecimal($number){
      $randCountDecimal = $number.mt_rand(10,900)/10;
      $decimal = substr($randCountDecimal, 1);
      echo $decimal;
      return $decimal;
    }
  ?>


<!-----------------------------------------------------------------
<------------------------------------------------------------------>
<!-- CALCUL MENTAL-->
<!-----------------------------------------------------------------
<------------------------------------------------------------------>

<?php
function afficherCalculMental($firstNumber, $secondNumber){
  ?>
  <form action="cible_calcul_mental.php" method="get">
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">            
              <div class="col-lg-2"></div>
              <div class="col-lg-5">

                <!-- premier chiffre aléatoire-->
                <span class="col-lg-1">
                <b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber);?></b></span>
                <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
                <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
                <span class="col-lg-1"><b>=</b></span>
                <!-- transmission des données-->
                <input class="col-lg-3" name="resultatUn" type="text" placeholder="total"></input>
                <input class="col-lg-2" name="resultatCorrectUn" type="hidden"
                 value="<?php echo $resultatCorrectUn= addition($randFirstNumber, $secondNumber); 
                ?>">
              </div>
              <!--Calcul N° deux-->
              <div class="col-lg-5">
                <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?></b></span>
              <i class="fa fa-plus-circle" style="color:#FF502F"></i>
              <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <input class="col-lg-3" name="resultatDeux" type="text" placeholder="total"></input>
              
              <input class="col-lg-2" type="hidden"
              name="resultatCorrectDeux" value="<?php echo $resultatCorrectDeux= addition($randFirstNumber, $secondNumber); 
              ?>">
              </div>
            </div>
            <!--Calcul N° trois-->
            <div class="row">            
              <div class="col-lg-2"></div>
              <div class="col-lg-5">
                <!-- premier chiffre aléatoire-->
                <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber);?></b></span>
                <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
                <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
                <span class="col-lg-1"><b>=</b></span>
                <!-- transmission des données-->
                <input class="col-lg-3" name="resultatTrois" type="text" placeholder="total"></input>
                <input class="col-lg-2" name="resultatCorrectTrois" type="hidden"
                 value="<?php echo $resultatCorrectDeux= addition($randFirstNumber, $secondNumber); 
                ?>">
              </div>
              <!--Calcul N° quatre-->
              <div class="col-lg-5">
                <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?></b></span> 
              <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
              <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <input class="col-lg-3" name="resultatQuatre" type="text" placeholder="total"></input>
              
              <input class="col-lg-2" type="hidden"
              name="resultatCorrectQuatre" value="<?php echo $resultatCorrectQuatre= addition($randFirstNumber, $secondNumber); 
              ?>">
              </div>
            </div>

        
        <div class = "col-lg-12">
          <div class="row justify-content-center">
            <input type="submit" value=" Mon score " style="border-color:#FF502F; background-color: #FF502F; color: white; font-weight: bold; font-size:20px;" >
            <input class="col-lg-2" name="score" type="hidden" value="0">
          </div>
        </div>
      </form>
      <?php
    }
    ?>

    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
    <!-- OPERATIONS POSEES-->
    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>

  <!-- ADDITIONS-->
  <?php function afficherExerciceAdditionPoseeDeuxChiffres(){ 
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





    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
    <!-- SCORE TOTAL OPERATIONS-->
    <!-----------------------------------------------------------------
    <------------------------------------------------------------------>
  <?php 
    function calculerScoreTotalOperations(){
      $nombreCalculs= 4;
      $score= $_GET['score'];
      $resultatUn= $_GET['resultatUn'];
      $resultatCorrectUn= $_GET['resultatCorrectUn'];
      $resultatDeux= $_GET['resultatDeux'];
      $resultatCorrectDeux= $_GET['resultatCorrectDeux'];
      $resultatTrois= $_GET['resultatTrois'];
      $resultatCorrectTrois= $_GET['resultatCorrectTrois'];
      $resultatQuatre= $_GET['resultatQuatre'];
      $resultatCorrectQuatre= $_GET['resultatCorrectQuatre'];
      //* TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR */
      $isCorrect=false;
      if($resultatUn == $resultatCorrectUn){ 
        $isCorrect === true; 
        $score++; 
      }
      if($resultatDeux == $resultatCorrectDeux){ 
        $isCorrect === true; 
        $score++; 
      }
      if($resultatTrois == $resultatCorrectTrois){ 
        $isCorrect === true; 
        $score++; 
      }
      if($resultatQuatre == $resultatCorrectQuatre){ 
        $isCorrect === true; 
        $score++; 
      }
         ?>
      <section class="container" id="score">
        <div class="row justify-content-center">
          <div class="col-lg-2">
          <img class="img-fluid" src="assets/img/target.png" alt ="cible">
          </div>
        </div>
        <header class="row justify-content-center">
          <h3><?php echo "Tu as obtenu ". $score. " points sur ". $nombreCalculs;?></h3>
        </header>
      </section>
    <?php
    }
    ?>

        <?php
  function conversionKgEnGramme($masse){
    $masse=0;
    $resultatGramme = $masse * 1000;
    echo $resultatGramme;
    
    return $resultatGramme;
    }
  ?>



