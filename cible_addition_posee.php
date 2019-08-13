<?php session_start(); ?>

<?php include("fonctions_maths.php");?>
<?php include("addition_posee_deux_chiffres.php");?>
<?php
   
    $score=0;

    if($_POST["somme"] == $_POST["sommeCorrecte"]){
       $score++;
    }
        echo "Tu as ". $score . "point";

    if (!isset ($_SESSION['numeroOperation'])){
      $_SESSION['numeroQuestion']= 1;
    }else{
      $_SESSION['numeroQuestion']++;
    }



?>


            
            
              


