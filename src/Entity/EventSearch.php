<?php 

namespace App\Entity;


/**
 * Fichier créé manuellement afin qu'il ne s'insere pas dans la base de donnée
 * permet de chercher dans la base de donnée pour la fonction de tri
 */
class EventSearch{
    /**
     * @var String|null
     */
    private $lieux;

    public function getLieux() : ?String
    {
        return $this->lieux;
    }

    public function setLieux(String $lieux) : EventSearch
    {
        $this->lieux=$lieux;
        return $this;
    }

    /**
     * @var String|null
     */
    private $type;

    public function getType() : ?String
    {
        return $this->type;
    }

    public function setType(String $type) : EventSearch
    {
        $this->type=$type;
        return $this;
    }
}