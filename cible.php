<?php

    function addition($a,$b){
        $additionResult = $a + $b;
        return $additionResult;
    }

      
    $score=0;
    $resultatAdditionCorrect = addition($nombreAleatoireUn,$nombreAleatoireDeux);
    echo "resultatAdditionCorrect = ".$resultatAdditionCorrect;

    if($_POST["somme"] == $resultatAdditionCorrect){
        $score++;
        echo "Bravo !! Tu as ". $score . "point";
    }

?>

