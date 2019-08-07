<!-- MATHS
    FONCTIONS AFFICHER OPÉRATIONS-->
<!-- FONCTIONS ACCUEIL-->

<?php function displayExerciceAdditionPoseeDeuxChiffres(){ 
  $a=0;
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
            <div class="col-lg-5"></div>
            <div class="col-lg-3"><?php $randFirstNumber = randCountNumberWithTwoFigures($a) ;?></div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-1">+</div>
            <div class="col-lg-3"><?php $randSecondNumber = randCountNumberWithTwoFigures($a)  ;?></div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-3">_________________</div>
            <div class="col-lg-4"></div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-1">=</div>
            <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            <input class="col-lg-3" type="hidden"
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
              <input class="col-lg-3" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-3"><?php $randFirstNumber = randCountNumberWithThreeFigures($a) ;?></div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-1">+</div>
            <div class="col-lg-3"><?php $randSecondNumber = randCountNumberWithThreeFigures($a)  ;?></div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-3">_________________</div>
            <div class="col-lg-4"></div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-1">=</div>
            <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            <input class="col-lg-3" type="hidden"
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


<!-- FONCTIONS ADDITION-->
<?php
    function addition($a,$b){
      $additionResult = $a + $b;
      return $additionResult;
    }

    function randCountNumberWithTwoFigures($a){
      //for($i=1; $i<7; $i++)
      $randNumberTwoFigures = $a.rand(10,99);
      echo $randNumberTwoFigures;
      //}
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