<?php include("addition_posee_deux_chiffres.php");?>
<?php require_once("connexion_bdd.php")?>

<?php
//***** RÉCUPÉRATION DES DONNÉES SESSION ET FORMULAIRE *****
$numeroQuestion = $_SESSION['numeroQuestion'];

//*****LIMITATION À 8 QUESTIONS
if($numeroQuestion<=8){
    //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****

      //CAS 1 **** RÉPONSE CORRECTE
    $isCorrect=false;
    if($_POST["somme"] == $_POST["sommeCorrecte"]){ 
      $isCorrect === true; 
      $_SESSION['score']++; ?>

      <!--ESPACE COMMENTAIRE BONNE RÉPONSE-->
      <section id="container_renaissance">
      <?php
      //RECHERCHE COMMENTAIRE ALÉATOIRE BONNE RÉPONSE DANS LA BDD
      $commentaireReussite = $bdd->query("SELECT commentaire_reussite, id_image FROM reussite ORDER BY RAND() LIMIT 1");
      $donneesReussite = $commentaireReussite->fetch();
      $felicitaion = $donneesReussite['commentaire_reussite'];
      //$image=$donneesReussite['id_image'];
      $commentaireReussite->closeCursor();
      ?>
        <header class="row justify-content-center">
          <h3><?php echo $felicitaion; ?></h3>
        </header>
        <header class="row justify-content-center">
          <h3><?php echo "Tu as ". $_SESSION['score']. " points";?></h3>
        </header>
      </section>
      <?php 
    }else{
    //CAS 2 **** ESPACE COMMENTAIRE RÉPONSE INCORRECTE
        ?>
        <section class="verification">
          <div class="container_renaissance">
            <div class="row justify-content-center">
              <div class= "col-lg-3"></div>
              <div class="col-lg-6">Oups, mauvaise réponse!</div>
            </div> 
            <div class="row justify-content-center">
              <div class= "col-lg-3"></div>     
              <div class="col-lg-6">Le résultat est : <?php echo $_POST["sommeCorrecte"] ?></div>
            </div>
          </div>
        </section>
        <?php
		}
}else{
?>
    <section class="container-scoreFinal">
        <header class="row justify-content-center">
        <h3><?php echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur ". $numeroQuestion;?></h3>
        <?php //RÉINITIALISATION DU NOMBRE DE QUESTIONS ET DU SCORE
        $_SESSION['score'] = 0; 
        $_SESSION['numeroQuestion'] = 0;
            //TO DO************
            //*****************
            //retour accueil
        header( "refresh:10;url=accueil.php" ); 
    }      
?>
  
</body>