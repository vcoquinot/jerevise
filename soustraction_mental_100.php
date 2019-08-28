<?php session_start(); ?>
<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>-100</title>      
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
      <img class="img-fluid" src="assets/img/maths_-100.png" alt="addition de 7">
      </div>
    </section>

    <?php
    //initialisation des variables
    $firstNumber=0;
    $secondNumber=100;
    ?>

    <!--****************************
    //QUESTIONS
    //****************************-->

    <form action="cible_operation_mentale.php" method="get">
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5">

              <!-- premier chiffre aléatoire-->
              <span class="col-lg-1">
              <b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber);?></b></span>
              <i class="fa fa-minus-circle" style="color:#CF455C"></i> 
              <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <!-- transmission des données-->
              <input class="col-lg-3" name="resultatUn" type="text" placeholder="total" style="border-color:#CF455C"></input>
              <input class="col-lg-2" name="resultatCorrectUn" type="hidden"
               value="<?php echo $resultatCorrectUn= soustraction($randFirstNumber, $secondNumber); 
              ?>">
            </div>
            <!--Calcul N° deux-->
            <div class="col-lg-5">
              <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?></b></span>
              <i class="fa fa-minus-circle" style="color:#CF455C"></i>
              <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <input class="col-lg-3" name="resultatDeux" type="text" placeholder="total"style="border-color:#CF455C"></input>            
              <input class="col-lg-2" type="hidden"
              name="resultatCorrectDeux" value="<?php echo $resultatCorrectDeux= soustraction($randFirstNumber, $secondNumber); 
              ?>">
            </div>
          </div>
          <!--Calcul N° trois-->
          <div class="row">            
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <!-- premier chiffre aléatoire-->
              <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber);?></b></span>
              <i class="fa fa-minus-circle" style="color:#CF455C"></i> 
              <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
              <span class="col-lg-1"><b>=</b></span>
              <!-- transmission des données-->
              <input class="col-lg-3" name="resultatTrois" type="text" placeholder="total" style="border-color:#CF455C"></input>
              <input class="col-lg-2" name="resultatCorrectTrois" type="hidden"
               value="<?php echo $resultatCorrectDeux= soustraction($randFirstNumber, $secondNumber); 
              ?>">
            </div>
            <!--Calcul N° quatre-->
            <div class="col-lg-5">
              <span class="col-lg-1"><b><?php $randFirstNumber = randCountNumberWithTwoFigures($firstNumber) ;?></b></span> 
            <i class="fa fa-minus-circle" style="color:#CF455C"></i> 
            <span class="col-lg-1"><b><?php echo $secondNumber;?></b></span>
            <span class="col-lg-1"><b>=</b></span>
            <input class="col-lg-3" name="resultatQuatre" type="text" placeholder="total" style="border-color:#CF455C"></input>            
            <input class="col-lg-2" type="hidden"
            name="resultatCorrectQuatre" value="<?php echo $resultatCorrectQuatre= soustraction($randFirstNumber, $secondNumber); 
            ?>">
            </div>
          </div>

      
      <div class = "col-lg-12">
        <div class="row justify-content-center">
          <input type="submit" value=" Mon score " style="border-color:#CF455C; background-color: #CF455C; color: white; font-weight: bold; font-size:20px;" >
          <input class="col-lg-2" name="score" type="hidden" value="0">
        </div>
      </div>
    </form>
  </body>
</html>