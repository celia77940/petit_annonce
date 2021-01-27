<?php 
namespace App\Controllers;

use App\Models\AnnoncesModel;

class AnnonceController
{
    
    public function index()
    {
        // J'appelle ma classe AnnoncesModel
        $annoncesModel = new AnnoncesModel;
        // Et je vais chercher la fonction find All
        $annonces = $annoncesModel->findAll();

        // Et la il faut mettre un trucs non ? Pour que sa renvoie a ma card annonce
        // si tu va dans mon templates j'ai une table annonces
        // et dedans j'ai fait une foreach et j'ai déclarer juste une données getitre pour voir si sa marche mais rien.
        // Je pense qu'il manque quelque choses a faire et on y est depuis 8h30
        //  A l'aide please
    }
}

?>