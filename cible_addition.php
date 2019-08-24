<?php include("addition_mental_7.php");?>
<?php require_once("connexion_bdd.php")?>

<?php
$numeroQuestion = $_POST['numeroQuestion'];
$nombreQuestions=$numeroQuestion++;
echo $_POST['sommeCorrecte'];
echo $nombreQuestions;
//*****LIMITATION À 8 QUESTIONS
if($nombreQuestions<=8){
    //***** TRAITEMENT DE LA RÉPONSE DE L'UTILISATEUR *****

      //CAS 1 **** RÉPONSE CORRECTE
    $isCorrect=false;
    if($_POST["somme"] == $_POST["sommeCorrecte"]){ 
      $isCorrect === true; 
      $_SESSION['score']++; ?>
        <header class="row justify-content-center">
          <h3><?php echo "Tu as ". $_SESSION['score']. " points";?></h3>
        </header>
      </section>
      <?php 
    }else{
    //CAS 2 **** RÉPONSE INCORRECTE
        ?>
        <section class="verification">
          <div class="container"> 
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