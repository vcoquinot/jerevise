<!-- FRANçAIS
________________________________________________________
-->

<!-- FONCTIONS AFFICHAGE-->
<?php 
function afficherFormulaireConjugaison(){
  ?>
  <div class="row justify-content-center">
    <input type="text" name="reponseFutur" placeholder="verbe au futur" style= "margin-bottom : 30px;">
  </div>
  <input type="hidden" name="numeroDeQuestionPosee" value="1">
  <div class="row justify-content-center">
    <input type="submit" value=" Vérifier ma réponse">
  </div>
<?php
}


function AfficherCommentaireMauvaiseReponse(){
  ?>
  <div class="container-fluid">
    <div class="row justify-content-center" style="font-size: 40px;"><b>Oups, mauvaise réponse!</b></div>
    <p><i class="fas fa-frown-open fa-3x red-text pr-3 row justify-content-center" aria-hidden="true"></i></p>
  </div> 
<?php  
}
function afficherReponseCorrecte(){
  ?>
  <div class="container-fluid">   
      <div class="row justify-content-center" style="font-size: 30px;"><b>C'était : <?php echo $_SESSION['reponseCorrecte']; ?></b>
      </div>
  </div>
</section>
<?php
}
?>

