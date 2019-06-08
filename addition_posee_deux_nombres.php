<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / maths additions posées à deux chiffres</title>      
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

      $nombre=0;
      $nombreAleatoireUn = $nombre.rand(10,99);
      echo "nombre un =" .$nombreAleatoireUn;
      $nombreAleatoireDeux = $nombre.rand(10,99);
      echo "nombre deux  =".$nombreAleatoireDeux;


    ?>
        <div class="container">
          <form action="cible.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <aside class="col-lg-5"></aside>
                  <input class="col-lg-1" name="retenue"  type="text"  id="inputRetenue" placeholder="retenue">
                  <aside class="col-lg-5"></aside>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <aside class="col-lg-5"></aside>
                  <div class="col-lg-1">&nbsp&nbsp&nbsp<?php echo $nombreAleatoireUn;?></div>
                  <aside class="col-lg-5"></aside>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <aside class="col-lg-5"></aside>
                    <div class="col-lg-1">+ <?php echo $nombreAleatoireDeux; ?></div>
                    <aside class="col-lg-5"></aside>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <aside class="col-lg-4"></aside>
                    <div class="col-lg-3">_____</div>
                    <aside class="col-lg-4"></aside>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <aside class="col-lg-5"></aside>                    
                    <input class="col-lg-1" name="somme" type="text"  id="inputSomme" placeholder="total" >
                    <aside class="col-lg-5"></aside>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            <br/>

            <div class="row text-center">
              <div class="col-lg-5 text-center"></div>
              <input type="submit" value=" Valider mon résultat ">
              <?php echo "ton résultat est " .($_POST["somme"]);?>
            </div>
          </div>
        </form>

   
  
  ?>

  
        
  
  </body>
</html>
