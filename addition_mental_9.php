<?php session_start(); ?>
<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>+9</title>      
      <link href="style1.css"  type="text/css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

<!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="mentalPlusNeuf">
      <div class="row justify-content-center">
      <img class="img-fluid" src="assets/img/+9.png" alt="+9">
      </div>
    </section>

    <?php
    calculerScore(); 
    calculerNombreDeQuestionsPosees();
    //****************************
    //QUESTIONS
    //****************************
    //LIMITATION À 8 QUESTIONS OU RETOUR ACCUEIL + remise compteurs à zéro
    if($_SESSION['numeroQuestion'] >8){
      $_SESSION['numeroQuestion'] =0;
      $_SESSION['score'] =0;
      header("location:accueil.php");
    }else{
    //initialisation des variables
    $firstNumber=0;
    $secondNumber=9;
    $numeroQuestion =0;
    ?>
      <form action="cible_addition.php" method="post">
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <!--Calcul N° un-->
              <input type="hidden" name="numeroQuestion" value="<?php $numeroQuestion= $numeroQuestion++?>">
              <?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber);?> + 
              <?php echo $secondNumber;?> =
              <input class="col-lg-3" name="resultatUn" type="text" placeholder="total"></input>
              <input class="col-lg-2" type="hidden"
              name="sommeCorrecte" value="<?php $sommeCorrecte= addition($randFirstNumber, $secondNumber); 
              ?>">
            </div>
            <!--Calcul N° deux-->
            <input type="hidden" name="numeroQuestion" value="<?php $numeroQuestion++?>">
            <div class="col-lg-5"><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?> 
            + 
            <?php echo $secondNumber;?> = <input class="col-lg-3" name="resultatDeu" type="text" placeholder="total"></input>
            
            <input class="col-lg-2" type="hidden"
            name="resultatCorrectDeux" value="<?php $sommeCorrecte= addition($randFirstNumber, $secondNumber); 
            ?>">
            </div>
          </div>


                
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5"><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?> + <?php echo $secondNumber;?> = <input class="col-lg-3" name="sommeNumeroTrois" type="text" placeholder="total"></input>
            <input type="hidden" name="numeroQuestion" value="<?php $numeroQuestion++?>">
            <input class="col-lg-2" type="hidden"
            name="sommeCorrecteNumeroTrois" value="<?php $sommeCorrecte= addition($randFirstNumber, $secondNumber); 
            ?>">
            </div><div class="col-lg-5"><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?> + <?php echo $secondNumber;?> = <input class="col-lg-3" name="sommeNumeroQuatre" type="text" placeholder="total"></input>
            <input type="hidden" name="numeroQuestion" value="<?php $numeroQuestion++?>">
            <input class="col-lg-2" type="hidden"
            name="sommeCorrecteNumeroQuatre" value="<?php $sommeCorrecte= addition($randFirstNumber, $secondNumber); 
            ?>">
            </div>
          </div>
        </div>
      </div>
      
      <div class = "col-lg-12">
        <div class="row justify-content-center">
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>
    <?php
    }
    ?>
  </body>
</html>