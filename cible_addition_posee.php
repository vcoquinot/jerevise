<?php session_start(); ?>

<?php include("fonctions_maths.php");?>
<?php
   
    $score=0;

    if($_POST["somme"] == $_POST["sommeCorrecte"]){
       $score++;
    }
        echo "Tu as ". $score . "point";


?>


            
            
              


