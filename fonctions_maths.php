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

function randCountNumberWithOneFigure($a){
      $randNumberOneFigure = $a.rand(1,9);
      echo $randNumberOneFigure;
      return $randNumberOneFigure;
    }

    function randCountNumberWithTwoFigures($a){
      $randNumberTwoFigures = $a.rand(10,99);
      echo $randNumberTwoFigures;
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

  <?php
  function randCountNumberOverHundred($a){
      //for($i=1; $i<7; $i++) {
      $randCountNumberOverHundred = $a.rand(101,999);
      echo $randCountNumberOverHundred;
      //}
      return $randCountNumberOverHundred;
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

