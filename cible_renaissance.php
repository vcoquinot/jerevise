<?php
session_start();
?>
<?php
     //connexion BDD
      try{
        $bdd = new PDO('mysql:host=localhost;dbname=cm;charset=utf8', 'root' , '');
      }
      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }

      setlocale(LC_TIME, "fr_FR");
      ?>

      <?php
            //RENAISSANCE 
            
            //récupération réponse de l'utilsateur
            $inputRenaissance = $_POST["maReponse"];
            //récupération id question posée
            $idQuestion= $_SESSION['id_question'];

            //recherche de la réponse associée à la question
            $reponseRenaissance = $bdd->query("SELECT intitule_reponse
            FROM question,reponse
            WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
            $donnees = $reponseRenaissance->fetch();
            echo "la bonne réponse est ".$donnees['intitule_reponse'];

            //calcul du score          

            $score= 0;
            if($inputRenaissance == $donnees['intitule_reponse']){
                  $score++;

            switch ($score) {
                case 0:
                ?><div class="bar col-lg-1"><progress class="bar" value="0" max="10"></progress></div>
                <?php break;
                case 1:
                ?><div class="col-lg-1"><progress class="bar" value="1" max="10"></progress></div>
                <?php break;
                case 2:
                ?><div class="col-lg-1"><progress class="bar" value="2" max="10"></progress></div>
                <?php break;
                case 3:
                ?><div class="col-lg-1"><progress class="bar" value="3" max="10"></progress></div>
                <?php break;
                case 4:
                ?><div class="col-lg-1"><progress class="bar" value="4" max="10"></progress></div>
                <?php break;
                case 5:
                ?><div class="col-lg-1"><progress value="5" max="10"></progress></div>
                <?php break;
                case 6:
                ?><div class="col-lg-1"><progress value="6" max="10"></progress></div>
                <?php break;
                case 7:
                ?><div class="col-lg-1"><progress value="7" max="10"></progress></div>
                <?php break;
                case 8:
                ?><div class="col-lg-1"><progress value="8" max="10"></progress></div>
                <?php break;
                case 9:
                ?><div class="col-lg-1"><progress value="9" max="10"></progress></div>
                <?php break;
                case 10:
                ?><div class="col-lg-1"><progress value="10" max="10"></progress></div>
                <?php break;
              }

            }
            echo "ton score est ".$score;

            //redirection          
            header('Location: http://localhost/jerevise/renaissance.php');

?>