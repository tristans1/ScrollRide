<?php
require_once('class.Utilisateur.php');
require_once('class.DonEffectuer.php');


    class Partenaire implements JsonSerializable
    {
    private $id = 0;
    private $nom = null;


    //association 0 à *
    private $utilisateurRecompense = array();
    private $donPercu = array();


        public function __construct($id = 0, $nom=null)
        {
            $this->id = $id;
            $this->nom = $nom;
        }

        //getteurs
        public function getId(){return $this->id;}
        public function getNom(){return $this->nom;}

        public function getUtilisateurRecompense(): array{return $this->utilisateurRecompense;}
        public function getDonPercu(): array{return $this->donPercu;}



        //setteurs
        public function setId($id){$this->id = $id;}
        public function setNom($nom){$this->nom = $nom;}
        public function setUtilisateurRecompense(array $utilisateurRecompense): void{$this->utilisateurRecompense = $utilisateurRecompense;}
        public function setDonPercu(array $donPercu): void{$this->donPercu = $donPercu;}


        public function jsonSerialize(){ return get_object_vars($this);}

    }
