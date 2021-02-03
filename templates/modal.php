<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body text-center">
        <div class="border">
            <div class="border1"> 
                <h3> <?= $annonce->prix ?> </h3>
            </div>
            <div>
                <h4><?= $annonce->auteur ?></h4>
                <h5><?= $annonce->titre ?></h5>
                <p><?= $annonce->description ?></p>
                <h5>05 80 96 02 56</h5>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>
</body>
</html>



