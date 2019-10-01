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
function afficherExerciceGrammaireFrancais($intituleQuestion){
  ?>
    <div class="container">
      <div class="col-12">  
      <?php
      for($i=1; $i<=4; $i++){ ?>     
          <div class="row justify-content-center"> 
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 justify-content-left">
              <b><?php echo $intituleQuestion ;?></b></span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
              <i class="fa fa-arrow-circle-right justify-content-left" style="color:#FF502F"></i></span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 justify-content-left">
              <span class="justify-content-left">Des</span>
            </div>
              <!-- transmission des données-->
              <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3 justify-content-left" name="reponseUtilisateur" type="text" placeholder="pluriel"></input>
              <input name="numeroQuestion" value=$i>

          </div>      
        </div>
      </div>
      <?php
    }
    }
    ?>