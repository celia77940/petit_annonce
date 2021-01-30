<?php
namespace App\Models;

class AnnoncesModel extends Model
{       
    protected $idannonce;
    protected $auteur;
    protected $titre;
    protected $prix;
    protected $description;

    public function __construct()
    {
        $this->table = 'annonce'; 

    }

    /**
     * Get the value of idannonce
     */ 
    public function getIdannonce()
    {
        return $this->idannonce;
    }

    /**
     * Set the value of idannonce
     *
     * @return  self
     */ 
    public function setIdannonce($idannonce)
    {
        $this->idannonce = $idannonce;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}