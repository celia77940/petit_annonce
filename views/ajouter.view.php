<?php

require '../templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/ajouter">
        <div>
            <label  for="">Auteur</label>
            <input type="text" class="form-control" name="auteur">
        </div>
        <div>
            <label  for="">Titre</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <button type="sumbit">Submit</button>
    </form>
</body>
</html>