<?php

require_once('class.UtilisateurC.php');
 //   require_once('class.Spot.php');

    class Discipline implements JsonSerializable {


            private $id = 0 ;
            private $lib = null ;


        //Association (2)
            private $lesSpots = array() ;
            private $utilisateurDiscipline = array() ;


            public function __construct($id = 0, $lib = null)
            {
                $this->id = $id;
                $this->lib = $lib;
            }

        public function getId(): int{return $this->id;}
        public function getLib(){return $this->lib;}
        public function getLesSpots(): array{return $this->lesSpots;}
        public function getUtilisateurDiscipline(): array{return $this->utilisateurDiscipline;}


        public function setId(int $id): void{$this->id = $id;}
        public function setLib($lib): void{$this->lib = $lib;}
        public function setLesSpots(array $lesSpots): void{$this->lesSpots = $lesSpots;}
        public function setUtilisateurDiscipline(array $utilisateurDiscipline): void{$this->utilisateurDiscipline = $utilisateurDiscipline;}


        public function jsonSerialize(){ return get_object_vars($this);}
    }
