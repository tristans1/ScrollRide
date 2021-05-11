<?php
/*
require_once('class.Discipline.php');
require_once ('class.UtilisateurC.php');
*/
    class Spot implements JsonSerializable
    {
        private $id = 0;
        private $nom = null;
        private $adresse = null;
        private $resume = null;
        private $photo = null;
        private $date = null;

        //association 0 à *

        private $utilisateurPartage = array();


        public function __construct($id = 0, $nom = null, $adresse = null, $resume = null, $photo = null, $date = null)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->adresse = $adresse;
            $this->resume = $resume;
            $this->photo = $photo;
            $this->date = $date;
        }


    //Getters

        private $lesDisciplines = array();
        public function getId(): int{return $this->id;}
        public function getNom(){return $this->nom;}
        public function getAdresse(){return $this->adresse;}
        public function getResume(){return $this->resume;}
        public function getPhoto(){return $this->photo;}
        public function getDate(){return $this->date;}


        public function getLesDisciplines(){return $this->lesDisciplines;}
        public function getUtilisateurPartage(){return $this->utilisateurPartage;}


        //Setters

        public function setId($id){$this->id = $id;}
        public function setNom($nom){$this->nom = $nom;}
        public function setAdresse($adresse){$this->adresse = $adresse;}
        public function setResume($resume){$this->resume = $resume;}
        public function setPhoto($photo){$this->photo = $photo;}
        public function setDate($date){$this->date = $date;}
        public function setLesDisciplines( $lesDisciplines){$this->lesDisciplines = $lesDisciplines;}
        public function setUtilisateurPartage($utilisateurPartage){$this->utilisateurPartage = $utilisateurPartage;}


        public function jsonSerialize(){ return get_object_vars($this);}



}