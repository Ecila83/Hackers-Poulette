<?php
require_once("./db.inc.php");
$pdo = connect_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="src/Hackers-Poulette/Php/js/validationClient.js" defer></script>

</head>
<body>
    <h1>Hackers Poulette</h1>
    <form class = "form" action="" method="post" enctype="multipart/form-data">
        <div class="form_nom">
            <label  for="nom">Nom</label>
            <input id="nom" type="text" name="nom" value="">
        </div>
        <div class="form_prenom">
            <label  for="prenom">Prénom</label>
            <input id="prenom" type="text" name="prenom" value="">
        </div>
        <div class="form_mail">
            <label  for="mail">Prénom</label>
            <input id="mail" type="text" name="mail" value="">
        </div>
        <div class="form_photo">
            <label for="photo">Photo (jpg, png, gif) :</label>
            <input type="file" id="photo" name="photo" accept=".jpg, .png, .gif">
        </div>

        <div class="form_description">
            <label for="description">Décrire votre probléme</label>
            <input id="description" type="text" name="description" value="">
        </div>
        <div class="form_boutton">
           
            <input id= "boutton" type="submit" value="Soumettre" >
        </div>
       
    </form>
</body>
</html>