<!-- FRANçAIS
________________________________________________________
-->

<!-- FONCTIONS AFFICHAGE-->
<?php 
function afficherFormulaireConjugaison(){
  ?>
  <div class="row justify-content-center">
    <input type="text" name="reponse" placeholder="ton verbe conjugué" style= "margin-bottom : 30px;">
  </div>
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

<!-----------------------------------------------------------------
<------------------------------------------------------------------>
<!-- GrammaireFrancais-->
<!-----------------------------------------------------------------
<------------------------------------------------------------------>

<?php
function afficherExerciceGrammaireFrancais($intitule, $reponse){
  ?>
  <form action="cible_francais.php" method="get">
    <div class="container">
      <div class="col-12">
        <div class="row justify-content-center"> 
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 justify-content-left">

            <!-- premier mot-->
            <span class="col-lg-4 col-md-2 col-sm-2 col-xs-2 justify-content-left">
            <b><?php echo $intitule ;?></b></span>
            <span class="col-lg-4 col-md-2 col-sm-2 col-xs-2 justify-content-left">
            <i class="fa fa-arrow-circle-right justify-content-left" style="color:#FF502F"></i></span>
            <!-- transmission des données-->
            <input class="col-lg-4 col-md-3 col-sm-3 col-xs-3 justify-content-left" name="resultatUn" type="text" placeholder="Des..."></input>
            
            </div>      
          </div>
        </div>
  </form>
  <?php
}
?>


