<?php session_start(); ?>
<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Site de révisions pour les élèves de CM1">

      <title>Je révise ! / additions possée à 2 chiffres</title>      
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
   
<?php 

calculerScore(); 
calculerNombreDeQuestionsPosees();

  //****************************
    //QUESTIONS
    //****************************
    //LIMITATION À 8 QUESTIONS OU RETOUR ACCUEIL 
    if($_SESSION['numeroQuestion'] >8){
      $_SESSION['numeroQuestion'] =0;
      $_SESSION['score'] =0;
      redirection();
    }else{
      ?>
      <section>
        <div class="row justify-content-center">
          <img class="img-fluid" src="assets/img/maths_2_chiffres.png" alt="addition à deux chiffres">
        </div>
      </section>
      <?php
          $a=0;
    $_SESSION['numeroQuestion'] = 0;
    // deux nombres aléatoires à additioner        
    $a=0;
    $b=0;
    $randFirstNumber = $a.rand(10,99);;
    $randSecondNumber = $a.rand(10,99);
                
  ?>
  <br/>
  <br/>
        
    <form action="cible_addition_posee.php" method="post">
        <!-- retenues-->
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
              <h3 class="col-lg-12 row justify-content-center"><?php echo "Pose ". $randFirstNumber . "+" . $randSecondNumber?></h3>
            </div>
          </div>
        </div>
        <!-- retenues-->
        <div class="container">
          <div class = "col-lg-12">
            <div class="row">
            <div class="col-lg-3"></div>
            <small id="emailHelp" class="form-text text-muted col-lg-3" >Indique ici  les retenues si tu en as -></small>
                <!-- séparation en chiffres par dizaine, unité-->
                
                <b><input class="col-lg-1" name="retenue" type="text" placeholder="retenue" style= "font-size:20px padding:1px">
                </b>
                <span class="col-lg-1"></span>
              </div>
          </div>
        </div>
      <!-- Premier nombre à additionner-->
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-3"></div>
            <small id="emailHelp" class="form-text text-muted col-lg-3" >Place ton premier nombre dans les cases -></small>
              <!-- séparation en chiffres par dizaine, unité-->
              <b><input class="col-lg-1" style= "font-size:20px; padding:1px">
              <input class="col-lg-1" style= "font-size:20px padding:1px">
              </b>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
      <!--opérateur-->
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-1"></div> 
              <i class="fa fa-plus-circle" style="color:#FF502F; font-size: 30px"></i>               
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
      <!-- Second nombre à additionner-->
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-3"></div>
            <small id="emailHelp" class="form-text text-muted col-lg-3" >Place ton second nombre dans les cases -></small>
              <!-- séparation en chiffres par dizaine, unité-->
              <b><input class="col-lg-1" style= "font-size:20px; padding:1px">
              <input class="col-lg-1" style= "font-size:20px padding:1px">
              </b>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
      <!--total opération-->
      <div class="container">
        <div class = "col-lg-12">
          <div class="row">
            <div class="col-lg-6"></div>
      <!--Résultat opération-->
              <input class="col-lg-1" name="somme"  type="text" placeholder="total">
              <input type="hidden"
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
  </body>
</html>