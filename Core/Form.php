<?php
namespace App\Core;

class Form
{
    /**
     * Valide si tous les champs proposés sont remplis
     * @param array $form Tableau issu du formulaire ($_POST, $_GET)
     * @param array $champs Tableau listant les champs obligatoires
     * @return bool 
     */
    public static function validate(array $form, array $champs)
    {
        // On parcourt les champs
        foreach($champs as $champ){
            // Si le champ est absent ou vide dans le formulaire
            if(!isset($form[$champ]) || empty($form[$champ])){
                // On sort en retournant false
                return false;
            }
        }
        return true;
    }
}


    