<?php require_once("connexion_bdd.php")?>

<?php
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

    //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****

      //CAS 1 **** RÉPONSE CORRECTE
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
    <section class="container">
      <div class="row justify-content-center">
        <div class="col-lg-2">
        <img class="img-fluid" src="assets/img/target.png" alt ="cible">
      </div>
      <header class="row justify-content-center">
      <h3><?php echo "Tu as obtenu un total de ". $score. " points sur ". $nombreCalculs;?></h3>
      </header>

        <?php 
        //RÉINITIALISATION DES DONNÉES
        $score = 0; 
        $resultatUn= 0;
        $resultatCorrectUn= 0;
        $resultatDeux= 0;
        $resultatCorrectDeux= 0;
        $resultattrois= 0;
        $resultatCorrectTrois= 0;
        $resultatQuatre= 0;
        $resultatCorrectQuatre= 0;
 
    ?>
  </section>


  <section class="container">
    <div class="row justify-content-center">
      <a href="maths.php"><button type="button" class="btn">Rejouer</button></a>
      <a href="accueil.php"><button type="button" class="btn">Accueil</button></a>
    </div>
  </section>
  
</body>

