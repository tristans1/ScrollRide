<?php

  require_once('class.UtilisateurC.php');

    class Abonnement  implements JsonSerializable {


        private $id = 0;
        private $libelle = null;

        // Association 0..*
        private $abonnes = array();


        public function __construct($id = 0, $libelle = null)
        {
            $this->id = $id;
            $this->libelle = $libelle;
        }

        public function getLibelle(){return $this->libelle;}
        public function getId(): int{return $this->id;}
        public function getAbonnes(): array{return $this->abonnes;}


        public function setId(int $id): void{$this->id = $id;}
        public function setLibelle($libelle): void{$this->libelle = $libelle;}
        public function setAbonnes(array $abonnes): void{$this->abonnes = $abonnes;}


        public function jsonSerialize(){ return get_object_vars($this);}

}

