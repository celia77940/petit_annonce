<?php 

namespace App\Controllers;

use App\Core\Form;
use App\Models\AnnoncesModel;

class FormController
{
    public function ajouter(){

        // Opérateur de portée
        if(Form::validate($_POST, ['auteur', 'titre'])){
            // Le formulaire est complet
            // On se protège contre les failles XSS
            // strip_tags, htmlentities, htmlspecialchars
            $auteur = strip_tags($_POST['auteur']);
            $titre = strip_tags($_POST['titre']);

            // On instancie notre modèle
            $annonce = new AnnoncesModel;

            // On hydrate
            $annonce->setAuteur($auteur)
                ->setTitre($titre);

            // On enregistre
            $annonce->create();

            header('Location: /');             
        }
        
        require '../views/ajouter.view.php'; 
    }
}
