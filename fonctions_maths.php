<!-- MATHS
    FONCTIONS AFFICHER OPÉRATIONS-->
<!-- FONCTIONS ACCUEIL-->

<?php function displayExerciceAdditionPoseeDeuxChiffres(){ 
  //TO DO ******
  //ÉVITER RÉPÉTITION DU DISPLAY !!!!
  $a=0;
?>
   <br/>
   <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <div class="container">
          <div class = "col-lg-6">
            <div class="row">
              <div class="col-lg-2"></div>
              <input class="col-lg-4" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-2"></div>
              <input class="col-lg-4" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
            </div>
          </div>
        </div>
      <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4"><?php $randCountFirstNumber = randCountNumberWithTwoFigures($a) ;?></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4"><?php $randCountFirstNumber= randCountNumberWithTwoFigures($a) ;?></div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2">+</div>
            <div class="col-lg-4"><?php $randCountSecondtNumber = randCountNumberWithTwoFigures($a)  ;?></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4"><?php $randCountSecondNumber = randCountNumberWithTwoFigures($a)  ;?></div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">_________________</div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">_________________</div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2">=</div>
            <input class="col-lg-4" name="sommeUne"  type="text"  id="inputSomme" placeholder="total"></input>
            <div class="col-lg-2">=</div>
            <input class="col-lg-4" name="sommeUne"  type="text"  id="inputSomme" placeholder="total"></input>
          </div>
        </div>
      </div>
        <br/>
        <br/>

        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Valider mes résultats">
        </div>
      </div>
    </form>
<?php 
    }
?>

<?php function displayExerciceAdditionPoseeTroisChiffres(){ 
  //TO DO ******
  //ÉVITER RÉPÉTITION DU DISPLAY !!!!
  $a=0;
?>
   <br/>
   <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <div class="container">
          <div class = "col-lg-6">
            <div class="row">
              <div class="col-lg-2"></div>
              <input class="col-lg-4" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
              <div class="col-lg-2"></div>
              <input class="col-lg-4" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              </input>
            </div>
          </div>
        </div>
      <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4"><?php $randCountFirstNumber = randCountNumberWithThreeFigures($a) ;?></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4"><?php $randCountFirstNumber= randCountNumberWithThreeFigures($a) ;?></div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2">+</div>
            <div class="col-lg-4"><?php $randCountSecondtNumber = randCountNumberWithThreeFigures($a)  ;?></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4"><?php $randCountSecondNumber = randCountNumberWithThreeFigures($a)  ;?></div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">_________________</div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">_________________</div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class = "col-lg-6">
          <div class="row">
            <div class="col-lg-2">=</div>
            <input class="col-lg-4" name="sommeUne"  type="text"  id="inputSomme" placeholder="total"></input>
            <div class="col-lg-2">=</div>
            <input class="col-lg-4" name="sommeUne"  type="text"  id="inputSomme" placeholder="total"></input>
          </div>
        </div>
      </div>
        <br/>
        <br/>

        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Valider mes résultats">
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