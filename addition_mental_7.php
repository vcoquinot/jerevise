<?php session_start(); ?>
<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>+7</title>      
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
    <?php 
    $a=0;
    $secondNumber=7;
    ?>
    <section id="mentalPlusSept">
      <div class="row justify-content-center">
      <img class="img-fluid" src="assets/img/maths_+7.png" alt="conjugaison">
      </div>
    </section>   

      <form action="cible_addition_mentale.php" method="post">
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <?php 
            for ($i= 1; $i<9 ; $i++){
              ?>
            <div class="col-lg-6"><?php $randFirstNumber = randCountNumberWithTwoFigures($a) ;?> + <?php echo $secondNumber;?> = <input class="col-lg-3" name="somme" type="text" placeholder="total"></input>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      
      <div class = "col-lg-12">
        <div class="row justify-content-center">
          <input type="submit" value="Vérifier">
        </div>
      </div>
    </form>
  </body>
</html>