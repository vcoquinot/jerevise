
<?php require_once("connexion_bdd.php")?>

<?php
//***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
if (!isset($_SESSION['score'])){
  $_SESSION['score'] = 0;
}
if (!isset($_SESSION['numeroQuestion'])){
  $_SESSION['numeroQuestion'] = 1;
}

//*****LIMITATION NOMBRE QUESTIONS
$nombreQuestion=5;

if($_SESSION['numeroQuestion']<=$nombreQuestion){
    //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****
    $isCorrect=false;
    $reponse = $_GET["total1"].$_GET["total2"].$_GET["total3"].$_GET["total4"];

    //CAS 1 **** RÉPONSE CORRECTE
    if($reponse == $_GET["sommeCorrecte"]){ 
      $isCorrect === true; 
      $_SESSION['score']++;
      $commentaireReussite = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
      // recherche d'un commentaire de réussite alléatoire   
      $donneesReussite = $commentaireReussite->fetch();
      $felicitation = $donneesReussite['commentaire_reussite'];
      $commentaireReussite->closeCursor();
      ?>
      <!--affichage du commentaire-->
      <section class="row justify-content-center">
        <h2 class="commentaire" style="color:#FF8080"><?php echo $felicitation; ?></h2>
      </section>
      <?php 
      //opération suivante
      header( "refresh:2;url=additions_posees"); 
    }else{
      //CAS 2 **** RÉPONSE INCORRECTE
      ?>
      <div class="container">
        <div class="row justify-content-center ">
          <h2 style="color:#FF8080"><b><?php  echo "Oups, mauvaise réponse !"; ?></b></h2>
        </div>
        <div class="row justify-content-center col-12">
          <?php header( "refresh:2;url=additions_posees.php") ?>
        </div>
        <?php
        }
    $_SESSION['numeroQuestion']++;
}else{
  //Quand nombre de questions atteint
  afficherScore();
  //remarque en cas de score à améliorer
  if($_SESSION['score'] <= ($_SESSION['numeroQuestion']-1)){
    ?>        
    <div class="container">
      <div class="row justify-content-center ">
        <h2 class="commentaire" style="color:#569ef6"><b><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></b></h2> 
      </div>
    </div>
    <?php
  }
  reinitialiserCompteurs();
  ?>

  <!-- REDIRECTION-->
  <section class="container">
    <div class="row justify-content-center">
      <a href="futur_1.php"><button type="button" class="btn">Rejouer</button></a>
      <a href="accueil.php"><button type="button" class="btn">Accueil</button></a>
    </div>
  </section>
  <?php
  }      
  ?>

  