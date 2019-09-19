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

    <title>Additions posées</title>      
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="operation">
    <?php     
    // deux nombres aléatoires à additioner        
    $a=0;
    $b=0;
    $randFirstNumber = mt_rand(10,999);
    $randSecondNumber = mt_rand(100,999);
    ?>
      <div class="container">
        <form action="cible_pose.php" method="get">
          <!--partie gauche-->
          <div class="row justify-content-center">
            <div class="col-lg-4 justify-content-center"><img width="400" preserveAspectRatio="xMidYMid slice" src="assets/img/maths_2_chiffres.png" alt="addition à deux chiffres"></div>
            <!--partie droite-->
            <!--intitulé opération-->
            <div class="col-lg-8">
              <div class="row justify-content-center">
                <span class="justify-content-center"></span>
                <h3 id="intituleQuestion"><b><?php echo "Calcule ". $randFirstNumber . " + " . $randSecondNumber ?></b></h3>
              </div>
              <br/>
              <!--retenues-->
              <div class="row justify-content-center">
                <small id="help" class="form-text text-muted" >Indique ici  les retenues si tu en as</small>
              </div>              
              <div class="row justify-content-center"> 
                <span class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></span> 
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
              </div>
              <!--première ligne addition-->
              <div class="row justify-content-center"> 
                <small id="help" class="form-text text-muted" >Place ton premier nombre (1 chiffre par case)</small>
              </div>
              <div class="row justify-content-center">
                <span class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></span>
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text"  style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text"  style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text"  style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text" style= "font-size:20px padding:1px">
              </div>
              <!--deuxième ligne addition-->
              <div class="row justify-content-center">
                <small id="help" class="form-text text-muted" >Place ton second nombre (1 chiffre par case)</small>
              </div>
              <div class="row justify-content-center">
                <div class="input-group-prepend col-lg-1">
                  <span id="operateur" class="input-group-text">+</span>
                </div>
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text" style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text" style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text" style= "font-size:20px padding:1px">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" name="chiffre" type="text" style= "font-size:20px padding:1px">
              </div>
              <br />
              <!--Somme totale-->
              <div class="row justify-content-center">
                <div class="input-group-prepend col-lg-1">
                  <span class="input-group-text"> =</span>
                </div>
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" type="text" class="form-control col-lg-1 justify-content-center" name="total1">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" type="text" class="form-control col-lg-1 justify-content-center" name="total2">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" type="text" class="form-control col-lg-1 justify-content-center" name="total3">
                <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2" type="text" class="form-control col-lg-1 justify-content-center" name="total4">
              </div>
              <br/><br/>
              <!-- en cache-->
              <input type="hidden" name="sommeCorrecte" value="<?php $sommeCorrecte= addition($randFirstNumber, $randSecondNumber); 
                    echo $sommeCorrecte; ?>">
              <input type="hidden" name="numeroQuestion">
            </div>
            <!-- bouton validation-->
            <div class="row justify-content-center">
              <button type="submit" class="btn btn-primary mb-2 justify-content-center">Vérifier</button>
            </div>
          </div>
        </form>
    </section>
  </body>
</html>