<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / maths additions</title>      
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
    displayExerciceAdditionPoseeDeuxChiffres();



    function randCountFirstNumber($a){
      //for($i=1; $i<7; $i++) {
        $firstRandNumber = $a.rand(10,99);
        echo $firstRandNumber;
      //}
        return $firstRandNumber;
    }

        function randCountSecondNumber($a){
      //for($i=1; $i<7; $i++) {
        $secondRandNumber = $a.rand(10,99);
        echo $secondRandNumber;
      //}
        return $secondRandNumber;
    }
   function displayExerciceAdditionPoseeDeuxChiffres(){
    ?>
            <?php $a=1; 
          for ($i=0; $i<2; $i++){
        ?>
        <div class="container">
      <form action="cible.php" method="post">

        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <aside class="col-lg-3"></aside>
              <input class="col-lg-1" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              <aside class="col-lg-2"></aside>
              <input class="col-lg-1" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
              <aside class="col-lg-2"></aside>
              <input class="col-lg-1" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <aside class="col-lg-offset-1 col-lg-3"></aside>
              <aside class="col-lg-offset-1 col-lg-3" name ="aleatoireUn">&nbsp&nbsp&nbsp 
              <?php randCountFirstNumber($a) ;?></aside>
              <aside class="col-lg-offset-1 col-lg-3">&nbsp&nbsp&nbsp 
              <?php randCountFirstNumber($a) ;?></aside>
              <aside class="col-lg-offset-1 col-lg-3">&nbsp&nbsp&nbsp 
              <?php randCountFirstNumber($a); ?></aside>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <aside class="col-lg-3"></aside>
                <aside class="col-lg-3" name ="aleatoireQuatre">+ <?php randCountSecondNumber($a); ?></aside>
                <aside class="col-lg-3">+ <?php randCountSecondNumber($a); ?></aside>
                <aside class="col-lg-3">+ <?php randCountSecondNumber($a); ?></aside>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <aside class="col-lg-3"></aside>
                <aside class="col-lg-3">_______</aside>
                <aside class="col-lg-3">_______</aside>
                <aside class="col-lg-3">_______</aside>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <aside class="col-lg-2"></aside>
                <span class="input-group-text">=</span>
                <input class="col-lg-2"  name="sommeUne" type="text"  id="inputSomme" >
                <aside class="col-lg-1"></aside>
                <span class="input-group-text">=</span>
                <input class="col-lg-2" name="sommeDeux" type="text"  id="inputSomme">
                <aside class="col-lg-1"></aside>
                <span class="input-group-text">=</span>
                <input class="col-lg-2" name="sommeTrois" type="text"  id="inputSomme">
              </div>
            </div>
          </div>
        </div>
        <br/>
        <br/>
      <?php
    }
    ?>
        <div class="row text-center">
          <div class="col-lg-6 text-center"></div>
          <input type="submit" value="Valider mes résultats">
        </div>
      </div>
    </form>
    <?php

    }
    ?>
  
  </body>
</html>
