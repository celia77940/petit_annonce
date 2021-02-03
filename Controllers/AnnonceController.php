<?php
namespace App\Controllers;

use App\Models\AnnoncesModel;

class AnnonceController{

    public static function index()
    {
        $annoncesModel = new AnnoncesModel;
        $annonces = $annoncesModel->findAll();

        require_once '../views/index.view.php';
    }

    public static function lire($idannonce)
    {
        $annoncesModel = new AnnoncesModel;
        $annonces = $annoncesModel->find($idannonce);

        require_once '../templates/modal.php';
    }

    

}