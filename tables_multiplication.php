<?php session_start(); ?>
<?php include("fonction.php");?>
<?php include("fonctions_maths.php");?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title >Multiplications unités</title>      
      <link href="style1.css"  type="text/css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

<!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <section>
      <div class="row justify-content-center">
      <img class="img-fluid" src="assets/img/maths_multiply.png" alt="addition d' unités">
      </div>
    </section>
    <br />

    <?php
    //initialisation des variables
    $firstNumber=0;
    $secondNumber=0;
    ?>

    <!--****************************
    //QUESTIONS
    //****************************-->

    <form action="cible_calcul_mental.php" method="get">
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5">

              <!-- premier chiffre aléatoire-->
              <span class="col-lg-1">
              <b><?php $randFirstNumber = randCountNumberWithOneFigure($firstNumber);?></b></span>
              <i class="fa fa-times-circle" style="color:#FF502F"></i> 
              <span class="col-lg-1"><b><?php $randSecondNumber = calculMentalUnité($secondNumber) ;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <!-- transmission des données-->
              <input class="col-lg-3" name="resultatUn" type="text" placeholder="total"></input>
              <input class="col-lg-2" name="resultatCorrectUn" type="hidden"
               value="<?php echo $resultatCorrectUn= multiplication($randFirstNumber, $randSecondNumber);?>">
               <input class="col-lg-2" name="score" type="hidden"
               value="0";></input>
            </div>
            <!--Calcul N° deux-->
            <div class="col-lg-5">
              <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithOneFigure($firstNumber) ;?></b></span>
            <i class="fa fa-times-circle" style="color:#FF502F"></i>
            <span class="col-lg-1"><b><?php $randSecondNumber =calculMentalUnité($secondNumber) ;?></b></span>
            <span class="col-lg-1"><b>=</b></span>
            <input class="col-lg-3" name="resultatDeux" type="text" placeholder="total"></input>
            
            <input class="col-lg-2" type="hidden"
            name="resultatCorrectDeux" value="<?php echo $resultatCorrectDeux= multiplication($randFirstNumber, $randSecondNumber); 
            ?>">
            </div>
          </div>
          <br /><br />
          <!--Calcul N° trois-->
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <!-- premier chiffre aléatoire-->
              <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithOneFigure($firstNumber);?></b></span>
              <i class="fa fa-times-circle" style="color:#FF502F"></i> 
              <span class="col-lg-1"><b><?php $randSecondNumber =calculMentalUnité($secondNumber) ;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <!-- transmission des données-->
              <input class="col-lg-3" name="resultatTrois" type="text" placeholder="total"></input>
              <input class="col-lg-2" name="resultatCorrectTrois" type="hidden"
               value="<?php echo $resultatCorrectTrois= multiplication($randFirstNumber, $randSecondNumber); 
              ?>">
            </div>
            <!--Calcul N° quatre-->
            <div class="col-lg-5">
              <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithOneFigure($firstNumber) ;?></b></span> 
            <i class="fa fa-times-circle" style="color:#FF502F"></i> 
            <span class="col-lg-1"><b><?php $randSecondNumber =calculMentalUnité($secondNumber) ;?></b></span>
            <span class="col-lg-1"><b>=</b></span>
            <input class="col-lg-3" name="resultatQuatre" type="text" placeholder="total"></input>
            
            <input class="col-lg-2" type="hidden"
            name="resultatCorrectQuatre" value="<?php echo $resultatCorrectQuatre= multiplication($randFirstNumber, $randSecondNumber); 
            ?>">
            </div>
          </div>
          <br /><br />
      
      <div class = "col-lg-12">
        <div class="row justify-content-center">
          <input type="submit" value=" Mon score " style="border-color:#56aef6; background-color: #56aef6; color: black; font-weight: bold; font-size:20px;" >
          <input class="col-lg-2" name="score" type="hidden" value="0">
        </div>
      </div>
    </form>
  </body>
</html>