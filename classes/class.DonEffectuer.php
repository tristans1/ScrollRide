<?php

    require_once('class.Don.php');
    require_once('class.Utilisateur.php');
    require_once('class.Partenaire.php');

    class DonEffectuer extends Don implements JsonSerializable  {

        private $somme = 0;

        // Association 0..*
        private $utilisateurDonne = array();
        private $lesPartenaires = array();


        public function __construct($numero =0 , $somme = 0){
            parent::__construct($numero);
            $this->somme = $somme;
        }

        public function getUtilisateurDonne(): array{return $this->utilisateurDonne;}
        public function getLesPartenaires(): array{return $this->lesPartenaires;}
        public function getSomme(): int{return $this->somme;}
        public function getNumero(): int{return $this->numero;}

        public function setNumero(int $numero): void{$this->numero = $numero;}
        public function setSomme(int $somme): void{$this->somme = $somme;}
        public function setUtilisateurDonne(array $utilisateurDonne): void{$this->utilisateurDonne = $utilisateurDonne;}
        public function setLesPartenaires(array $lesPartenaires): void{$this->lesPartenaires = $lesPartenaires;}

        public function jsonSerialize(){ return get_object_vars($this);}


    }
