<?php session_start(); ?>
<?php include("fonction_maths.php");?>
<?php
   
    $score=0;

    $resultatAdditionCorrect = addition($nombreAleatoireUn,$nombreAleatoireDeux);
    echo "resultatAdditionCorrect = ".$resultatAdditionCorrect;

    if($_POST["somme"] == $resultatAdditionCorrect){
        $score++;
        echo "Bravo !! Tu as ". $score . "point";
    }

?>


            
            
              


