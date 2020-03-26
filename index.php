<?php
require ('templates/header.php');
require ('functions.php');
?>

<body>

<h1>Machine à voyager dans le temps</h1>
    
<p> 
    Salut à toi voyageur du temps<br>
    J'ai préparé pour toi une machine à voyager dans le temps. 
    Enfin.. elle n'est pas encore finie. <br>
    Choisis une date et découvre son histoire.
</p>

<!-- Partie formulaire -->
<div class="test">
    <h2>Alors on part en quelle année ? (0 à 2020)</h2>
    <form action='resultat.php' method="GET">
    <input class="entree" name='date' type="input" pattern="[0-9]+" required>
    <input class="button" type="submit" value="Let's GO">
</form>

<?php
// la fonction calculDeOuf permet de récupérer la donnée date de l'utilisateur
   calculDeOuf();
?>

</div>
<br>
    <img src="images/dolorean.jpg" alt="une tuture MARTY">

<?php 
require ('templates/footer.php');
?>
