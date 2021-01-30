<?php
require 'modal.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/annonce.css">
    <title>Document</title>
</head>
<body>
<?php foreach($annonces as $annonce): ?>
<article class="">
    <article class="display" >
        <div>
           <img src="img/livre.jpg" height="400em" alt="">
        </div>
        <div class="border">
            <div class="border1"> 
                <h3> <?= $annonce->prix ?></h3>
            </div>
            <div>
                <h4> <?= $annonce->auteur ?> </h4>
                <h5> <?= $annonce->titre ?> </h5>
                <p> <?= $annonce->description ?>  </p>
                <h5></h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                  Launch demo modal
                </button>
            </div>
        </div>
    </article>
<?php endforeach; ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>    
</body>
</html>