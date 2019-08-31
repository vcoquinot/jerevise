<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> ! <?php echo $_POST['resultatUn'] ?></p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<p><?php echo $_GET['resultatUn'] ?></p>
<p><?php echo $_GET['resultatDeux'] ?></p>
<p><?php echo "resultat correct 1 : ".$_GET['resultatCorrectUn'] ?></p>
<p><?php echo $_GET['resultatCorrectDeux'] ?></p>