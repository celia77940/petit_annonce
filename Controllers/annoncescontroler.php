<?php 
namespace App\Controllers;

use App\Models\AnnoncesModel;

class AnnonceController
{
    public function index()
    {
        $annoncesModel = new AnnoncesModel;
        $annonces = $annoncesModel->findAll();

        header('Location: ../templates/annonces');


    }
}

?>