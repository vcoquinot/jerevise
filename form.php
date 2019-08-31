
<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
<p>
    <input type="text" name="prenom" />
    
    <input type="submit" value="Valider" />
</p>
</form>

    <?php
    //initialisation des variables
    $firstNumber=12;
    $secondNumber=8;
    $score= 0;
    $resultatCorrectUn=$firstNumber+$secondNumber;
    $resultatCorrectDeux=$firstNumber+$secondNumber;
    ?>

    <form action="cible.php" method="get">
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <!-- premier chiffre aléatoire-->
              <?php echo $firstNumber ;?> 
              + 
              <?php echo $secondNumber;?> =
              <!-- transmission des données-->
              <input class="col-lg-3" name="resultatUn" type="text" placeholder="total"></input>
              <input class="col-lg-2" name="resultatCorrectUn" type="hidden"
               value="<?php echo $resultatCorrectUn ?>">
            </div>


            <!--Calcul N° deux-->
            <div class="col-lg-5"><?php echo $firstNumber;?> 
            + 
            <?php echo $secondNumber;?> = <input class="col-lg-3" name="resultatDeux" type="text" placeholder="total"></input>
            
            <input class="col-lg-2" type="hidden"
            name="resultatCorrectDeux" value="<?php $resultatCorrectDeux; 
            ?>">
            </div>
          </div>

      
      <div class = "col-lg-12">
        <div class="row justify-content-center">
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>