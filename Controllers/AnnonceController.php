<?php
namespace App\Controllers;

use App\Models\AnnoncesModel;

class AnnonceController{

    public static function index()
    {
        $annoncesModel = new AnnoncesModel;
        $annonces = $annoncesModel->findAll();

        require_once '../templates/annonce.php';
    }

}