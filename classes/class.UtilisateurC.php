<?php

require_once('class.Abonnement.php');

require_once('class.Discipline.php');
/*
require_once('class.Spot.php');
require_once('class.Partenaire.php');
require_once('class.ListeRecompense.php');
*/
    class UtilisateurC implements JsonSerializable  {
        
        public $id_utilisateur=0;
        public $nom = null;
        public $prenom = null;
        public $sexe = null;
        public $identifiant = null;
        public $password = null;
        public $mail = null;
        public $ville = null;
        public $photo = null;

        private $partenaireRecompense = null;
        private $spotPartages = null;
        private $abonnement = null;
        private $lesDons = array();
        private $disciplineExercees = array();


        
        function __construct($id_utilisateur=0, $nom=null, $prenom=null, $sexe=null, $identifiant=null,
            $password=null, $mail=null, $ville=null,$photo=null) {
            $this->id_utilisateur = $id_utilisateur;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->identifiant = $identifiant;
            $this->password = $password;
            $this->mail = $mail;
            $this->ville = $ville;
            $this->photo = $photo;
               
        }


        public function getIdUtilisateur(): int{return $this->id_utilisateur;}
        public function getNom(){return $this->nom;}
        public function getPrenom(){return $this->prenom;}
        public function getSexe(){return $this->sexe;}
        public function getIdentifiant(){return $this->identifiant;}
        public function getPassword(){return $this->password;}
        public function getMail(){return $this->mail;}
        public function getVille(){return $this->ville;}
        public function getPhoto(){return $this->photo;}
        public function getPartenaireRecompense(){return $this->partenaireRecompense;}
        public function getSpotPartages(){return $this->spotPartages;}
        public function getAbonnement(){return $this->abonnement;}
        public function getDisciplineExercees(): array{return $this->disciplineExercees;}

        public function setIdUtilisateur(int $id_utilisateur): void{$this->id_utilisateur = $id_utilisateur;}
        public function setNom($nom): void{$this->nom = $nom;}
        public function setPrenom($prenom): void{$this->prenom = $prenom;}
        public function setSexe($sexe): void{$this->sexe = $sexe;}
        public function setIdentifiant($identifiant): void{$this->identifiant = $identifiant;}
        public function setPassword($password): void{$this->password = $password;}
        public function setMail($mail): void{$this->mail = $mail;}
        public function setVille($ville): void{$this->ville = $ville;}
        public function setPhoto($photo): void{$this->photo = $photo;}
        public function setPartenaireRecompense($partenaireRecompense): void{$this->partenaireRecompense = $partenaireRecompense;}
        public function setSpotPartages($spotPartages): void{$this->spotPartages = $spotPartages;}

        public function getLesDons(): array{return $this->lesDons;}
        public function setLesDons(array $lesDons): void{$this->lesDons = $lesDons;}
        public function setDisciplineExercees(array $disciplineExercees): void{$this->disciplineExercees = $disciplineExercees;}


        public function setAbonnement($abonnement): void{$this->abonnement = $abonnement;}


        public function jsonSerialize(){ return get_object_vars($this);}

        
    }
